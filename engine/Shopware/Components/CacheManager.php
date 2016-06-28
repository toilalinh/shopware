<?php
/**
 * Shopware 4.0
 * Copyright © 2013 shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace Shopware\Components;

use Shopware\Components\DependencyInjection\Container;

/**
 * @category  Shopware
 * @package   Shopware\Components\CacheManager
 * @copyright Copyright (c) 2013, shopware AG (http://www.shopware.de)
 */
class CacheManager
{
    /**
     * @var Container
     */
    private $container;

    /**
     * @var \Shopware\Components\Model\Configuration
     */
    private $emConfig;

    /**
     * @var \Zend_Cache_Core
     */
    private $cache;

    /**
     * @var \Enlight_Components_Db_Adapter_Pdo_Mysql
     */
    private $db;

    /**
     * @var \Shopware_Components_Config
     */
    private $config;

    /**
     * @var \Enlight_Event_EventManager
     */
    private $events;

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;

        $this->cache    = $container->get('cache');
        $this->emConfig = $container->get('shopware.model_config');
        $this->db       = $container->get('db');
        $this->config   = $container->get('config');
        $this->events   = $container->get('events');
    }

    /**
     * @return \Zend_Cache_Core
     */
    public function getCoreCache()
    {
        return $this->cache;
    }

    /**
     * Clear HTTP-Cache
     */
    public function clearHttpCache()
    {
        $cacheDir = $this->container->getParameter('shopware.httpCache.cache_dir');
        $this->clearDirectory($cacheDir);

        // Fire event to let Plugin-Implementation clear cache
        $this->events->notify('Shopware_Plugins_HttpCache_ClearCache');
    }

    /**
     * Clear template cache
     */
    public function clearTemplateCache()
    {
        $cacheDir   = $this->container->getParameter('shopware.template.cacheDir');
        $compileDir = $this->container->getParameter('shopware.template.compileDir');

        $this->clearDirectory($compileDir);

        if ($cacheDir != $compileDir) {
            $this->clearDirectory($cacheDir);
        }
    }

    /**
     * Clear rewrite cache
     */
    public function clearRewriteCache()
    {
        $cache = (int) $this->config->routerCache;
        $cache = $cache < 360 ? 86400 : $cache;

        $sql = "SELECT `id` FROM `s_core_config_elements` WHERE `name` LIKE 'routerlastupdate'";
        $elementId = $this->db->fetchOne($sql);

        $sql = "
            SELECT v.shop_id, v.value
            FROM s_core_config_values v
            WHERE v.element_id=?
        ";
        $values = $this->db->fetchPairs($sql, array($elementId));

        foreach ($values as $shopId => $value) {
            $value = unserialize($value);
            $value = min(strtotime($value), time() - $cache);
            $value = date('Y-m-d H:i:s', $value);
            $value = serialize($value);
            $sql = '
                UPDATE s_core_config_values SET value=?
                WHERE shop_id=? AND element_id=?
            ';
            $this->db->query($sql, array($value, $shopId, $elementId));
        }
    }

    /**
     * Clear search cache
     */
    public function clearSearchCache()
    {
        $sql = "SELECT `id` FROM `s_core_config_elements` WHERE `name` LIKE 'fuzzysearchlastupdate'";
        $elementId = $this->db->fetchOne($sql);

        $sql = 'DELETE FROM s_core_config_values WHERE element_id=?';
        $this->db->query($sql, array($elementId));
    }

    /**
     * Clear search cache
     */
    public function clearConfigCache()
    {
        $this->cache->clean(\Zend_Cache::CLEANING_MODE_MATCHING_ANY_TAG, array(
            'Shopware_Config',
            'Shopware_Plugin'
        ));
    }

    /**
     * Clear proxy cache
     *
     * Clears:
     * - Shopware Proxies
     * - Classmap
     * - Doctrine-Proxies
     * - Doctrine-Anotations
     * - Doctrine-Metadata
     */
    public function clearProxyCache()
    {
        $configuration = $this->emConfig;

        $metaDataCache = $configuration->getMetadataCacheImpl();
        if (method_exists($metaDataCache, 'deleteAll')) {
            $metaDataCache->deleteAll();
        }

        // Clear Shopware Proxies / Classmaps / Container
        $this->clearDirectory($this->container->getParameter('shopware.hook.proxyDir'));

        // Clear Doctrine Proxies
        $this->clearDirectory($this->container->getParameter('shopware.model.fileCacheDir'));

        // Clear Anotation file cache
        $this->clearDirectory($this->container->getParameter('shopware.model.proxyDir'));
    }

    /**
     * Returns cache information
     *
     * @param null $request
     * @return array
     */
    public function getHttpCacheInfo($request = null)
    {
        $cacheDir = $this->container->getParameter('shopware.httpCache.cache_dir');

        $info = $this->getDirectoryInfo($cacheDir);
        $info['name'] = 'Http-Reverse-Proxy';

        if ($request && $request->getHeader('Surrogate-Capability')) {
            $info['backend'] = $request->getHeader('Surrogate-Capability');
        } else {
            $info['backend'] = 'Unknown';
        }

        return $info;
    }

    /**
     * Returns cache information
     *
     * @return array
     */
    public function getConfigCacheInfo()
    {
        $cacheConfig = $this->container->getParameter('shopware.cache');

        if ($cacheConfig['backend'] == 'apc' && extension_loaded('apc')) {
            $apcInfo = apc_cache_info('user');
            $info['files'] = $apcInfo['num_entries'];
            $info['size'] = $this->encodeSize($apcInfo['mem_size']);
        } else {
            if (!empty($cacheConfig['backendOptions']['cache_dir'])) {
                $dir = $cacheConfig['backendOptions']['cache_dir'];
            } elseif (!empty($cacheConfig['backendOptions']['slow_backend_options']['cache_dir'])) {
                $dir = $cacheConfig['backendOptions']['slow_backend_options']['cache_dir'];
            }
            $info = $this->getDirectoryInfo($dir);
        }

        $info['name'] = 'Shopware configuration';
        $info['backend'] = empty($cacheConfig['backend']) ? 'File' : $cacheConfig['backend'];

        return $info;
    }

    /**
     * Returns cache information
     *
     * @return array
     */
    public function getTemplateCacheInfo()
    {
        $dir = $this->container->getParameter('shopware.template.compileDir');
        $info = $this->getDirectoryInfo($dir);
        $info['name'] = 'Smarty templates';

        return $info;
    }

    /**
     * Returns cache information
     *
     * @return array
     */
    public function getDoctrineProxyCacheInfo()
    {
        $dir = $this->container->getParameter('shopware.model.proxydir');
        $info = $this->getDirectoryInfo($dir);
        $info['name'] = 'Doctrine Proxies';

        return $info;
    }

    /**
     * Returns cache information
     *
     * @return array
     */
    public function getDoctrineFileCacheInfo()
    {
        $dir = $this->container->getParameter('shopware.model.fileCacheDir');

        $info = $this->getDirectoryInfo($dir);
        $info['name'] = 'Doctrine annotations';

        return $info;
    }

    /**
     * Returns cache information
     *
     * @return array
     */
    public function getShopwareProxyCacheInfo()
    {
        $dir = $this->container->getParameter('shopware.hook.proxyDir');

        $info = $this->getDirectoryInfo($dir);
        $info['name'] = 'Shopware Proxies';

        return $info;
    }

    /**
     * Returns cache information
     *
     * @param string $dir
     * @return array
     */
    public function getDirectoryInfo($dir)
    {
        $docRoot = $this->container->getParameter('kernel.root_dir') . '/';

        $info = array();
        $info['dir'] = str_replace($docRoot, '', $dir);
        $info['dir'] = str_replace(DIRECTORY_SEPARATOR, '/', $info['dir']);
        $info['dir'] = rtrim($info['dir'], '/') . '/';

        if (!file_exists($dir) || !is_dir($dir)) {
            $info['message'] = 'Cache dir not exists';
            return $info;
        }

        if (!is_readable($dir)) {
            $info['message'] = 'Cache dir is not readable';
            return $info;
        }

        if (!is_writable($dir)) {
            $info['message'] = 'Cache dir is not writable';
        }

        $info['size'] = (float) 0;
        $info['files'] = 0;

        $dirIterator = new \RecursiveDirectoryIterator($dir, \RecursiveDirectoryIterator::SKIP_DOTS);
        $iterator = new \RecursiveIteratorIterator(
            $dirIterator,
            \RecursiveIteratorIterator::LEAVES_ONLY
        );

        /** @var $entry \SplFileInfo */
        foreach ($iterator as $entry) {
            if ($entry->getFileName() === '.gitkeep') {
                continue;
            }

            $info['size'] += $entry->getSize();
            $info['files']++;
        }
        $info['size'] = $this->encodeSize($info['size']);
        $info['freeSpace'] = disk_free_space($dir);
        $info['freeSpace'] = $this->encodeSize($info['freeSpace']);

        return $info;
    }

    /**
     * Clear directory contents
     *
     * @param $dir
     */
    private function clearDirectory($dir)
    {
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($dir, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );

        /** @var \SplFileInfo $path */
        foreach ($iterator as $path) {
            if ($path->getFilename() === '.gitkeep') {
                continue;
            }

            if ($path->isDir()) {
                rmdir($path->__toString());
            } else {
                unlink($path->__toString());
            }
        }
    }

    /**
     * Format size method
     *
     * @param float $bytes
     * @return string
     */
    public function encodeSize($bytes)
    {
        $types = array('B', 'KB', 'MB', 'GB', 'TB');
        for ($i = 0; $bytes >= 1024 && $i < (count($types) - 1); $bytes /= 1024, $i++) ;
        return (round($bytes, 2) . ' ' . $types[$i]);
    }
}
