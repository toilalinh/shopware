<?php
/**
 * Shopware 4
 * Copyright © shopware AG
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

namespace Shopware\Components\Plugin;

use Shopware\Components\Model\ModelManager;
use Shopware\Models\Plugin\Plugin;
use Shopware\Models\Shop\Shop;

/**
 * @category  Shopware
 * @package   Shopware\Components\Plugin
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */
class Manager
{
    /**
     * @var ModelManager
     */
    private $em;

    /**
     * @var \Enlight_Plugin_PluginManager
     */
    private $plugins;

    /**
     * @param ModelManager $em
     * @param $plugins
     */
    public function __construct(ModelManager $em, \Enlight_Plugin_PluginManager $plugins)
    {
        $this->plugins = $plugins;
        $this->em = $em;
    }

    /**
     * @param $pluginName
     * @throws \Exception
     * @return Plugin
     */
    public function getPluginByName($pluginName)
    {
        $repository = $this->em->getRepository('Shopware\Models\Plugin\Plugin');

        /** @var Plugin $plugin */
        $plugin = $repository->findOneBy(array('name' => $pluginName, 'capabilityEnable' => 1));

        if ($plugin === null) {
            throw new \Exception(sprintf('Unknown plugin: %s.', $pluginName));
        }

        return $plugin;
    }

    /**
     * Returns a certain plugin by plugin id.
     *
     * @param Plugin $plugin
     * @return \Shopware_Components_Plugin_Bootstrap|null
     */
    public function getPluginBootstrap(Plugin $plugin)
    {
        $namespace = $this->plugins->get($plugin->getNamespace());
        if ($namespace === null) {
            return null;
        }
        $plugin = $namespace->get($plugin->getName());

        return $plugin;
    }

    /**
     * @param Plugin $plugin
     * @throws \Exception
     */
    public function installPlugin(Plugin $plugin)
    {
        if ($plugin->getInstalled()) {
            return;
        }

        $bootstrap = $this->getPluginBootstrap($plugin);

        /** @var $namespace \Shopware_Components_Plugin_Namespace */
        $namespace = $bootstrap->Collection();

        try {
            $result = $namespace->installPlugin($bootstrap);
        } catch (\Exception $e) {
            throw new \Exception(sprintf("Unable to install, got exception:\n%s\n", $e->getMessage()), 0, $e);
        }

        $success = (is_bool($result) && $result || isset($result['success']) && $result['success']);
        if (!$success) {
            if (isset($result['message'])) {
                throw new \Exception(sprintf("Unable to install, got message:\n%s\n", $result['message']));
            } else {
                throw new \Exception(sprintf('Unable to install %s, an unknown error occured.', $plugin->getName()));
            }
        }
    }

    /**
     * @param Plugin $plugin
     * @throws \Exception
     */
    public function uninstallPlugin(Plugin $plugin)
    {
        if (!$plugin->getInstalled()) {
            return;
        }

        $bootstrap = $this->getPluginBootstrap($plugin);

        /** @var $namespace \Shopware_Components_Plugin_Namespace */
        $namespace = $bootstrap->Collection();

        try {
            $result = $namespace->uninstallPlugin($bootstrap);
        } catch (\Exception $e) {
            throw new \Exception(sprintf("Unable to uninstall, got exception:\n%s\n", $e->getMessage()), 0, $e);
        }

        $success = (is_bool($result) && $result || isset($result['success']) && $result['success']);
        if (!$success) {
            if (isset($result['message'])) {
                throw new \Exception(sprintf("Unable to uninstall, got message:\n%s\n", $result['message']));
            } else {
                throw new \Exception(sprintf('Unable to uninstall %s, an unknown error occured.', $plugin->getName()));
            }
        }
    }

    /**
     * @param Plugin $plugin
     * @throws \Exception
     */
    public function updatePlugin(Plugin $plugin)
    {
        if (!$plugin->getUpdateVersion()) {
            return;
        }

        $bootstrap = $this->getPluginBootstrap($plugin);

        /** @var $namespace \Shopware_Components_Plugin_Namespace */
        $namespace = $bootstrap->Collection();

        try {
            $result = $namespace->updatePlugin($bootstrap);
        } catch (\Exception $e) {
            throw new \Exception(sprintf("Unable to update, got exception:\n%s\n", $e->getMessage()), 0, $e);
        }

        $success = (is_bool($result) && $result || isset($result['success']) && $result['success']);
        if (!$success) {
            if (isset($result['message'])) {
                throw new \Exception(sprintf("Unable to update, got message:\n%s\n", $result['message']));
            } else {
                throw new \Exception(sprintf('Unable to update %s, an unknown error occured.', $plugin->getName()));
            }
        }
    }

    /**
     * @param Plugin $plugin
     * @throws \Exception
     */
    public function activatePlugin(Plugin $plugin)
    {
        if ($plugin->getActive()) {
            return;
        }

        if (!$plugin->getInstalled()) {
            throw new \Exception('Plugin has to be installed first.');
        }

        $bootstrap = $this->getPluginBootstrap($plugin);
        $isAllowed = $bootstrap->enable();
        $isAllowed = is_bool($isAllowed) ? $isAllowed : !empty($isAllowed['success']);
        if (!$isAllowed) {
            throw new \Exception('Not allowed to enable plugin.');
        }

        $plugin->setActive(true);
        $this->em->flush($plugin);
    }

    /**
     * @param Plugin $plugin
     * @throws \Exception
     */
    public function deactivatePlugin(Plugin $plugin)
    {
        if (!$plugin->getActive()) {
            return;
        }

        $bootstrap = $this->getPluginBootstrap($plugin);
        $isAllowed = $bootstrap->disable();
        $isAllowed = is_bool($isAllowed) ? $isAllowed : !empty($isAllowed['success']);
        if (!$isAllowed) {
            throw new \Exception('Not allowed to disable plugin.');
        }

        $plugin->setActive(false);
        $this->em->flush($plugin);
    }

    /**
     * @param Plugin $plugin
     * @param Shop $shop
     * @return array
     */
    public function getPluginConfig(Plugin $plugin, Shop $shop = null)
    {
        $namespace = $this->plugins->get($plugin->getNamespace());

        /** @var \Shopware_Components_Plugin_Namespace $namespace */
        $config = $namespace->getConfig($plugin->getName(), $shop);

        return $config->toArray();
    }

    /**
     * @param Plugin $plugin
     * @param array $elements
     * @param Shop $shop
     */
    public function savePluginConfig(Plugin $plugin, $elements, Shop $shop = null)
    {
        if ($shop === null) {
            $shopRepository  = $this->em->getRepository('Shopware\Models\Shop\Shop');
            $shop = $shopRepository->find($shopRepository->getActiveDefault()->getId());
        }

        foreach ($elements as $name => $value) {
            $this->saveConfigElement($plugin, $name, $value, $shop);
        }
    }

    /**
     * @param Plugin $plugin
     * @param string $name
     * @param mixed $value
     * @param Shop $shop
     * @throws \Exception
     */
    public function saveConfigElement(Plugin $plugin, $name, $value, Shop $shop = null)
    {
        if ($shop === null) {
            $shopRepository  = $this->em->getRepository('Shopware\Models\Shop\Shop');
            $shop = $shopRepository->find($shopRepository->getActiveDefault()->getId());
        }

        $elementRepository = $this->em->getRepository('Shopware\Models\Config\Element');
        $formRepository    = $this->em->getRepository('Shopware\Models\Config\Form');
        $valueRepository   = $this->em->getRepository('Shopware\Models\Config\Value');

        /** @var $form \Shopware\Models\Config\Form*/
        $form = $formRepository->findOneBy(array('pluginId' => $plugin->getId()));

        /** @var $element \Shopware\Models\Config\Element */
        $element = $elementRepository->findOneBy(array('form' => $form, 'name' => $name));
        if (!$element) {
            throw new \Exception(sprintf('Config element "%s" not found.', $name));
        }

        if ($element->getScope() == 0) {
            // todo prevent subshop updates
        }

        $defaultValue = $element->getValue();
        $valueModel = $valueRepository->findOneBy(array('shop' => $shop, 'element' => $element));

        if (!$valueModel) {
            if ($value == $defaultValue || $value === null) {
                return;
            }

            $valueModel = new \Shopware\Models\Config\Value();
            $valueModel->setElement($element);
            $valueModel->setShop($shop);
            $valueModel->setValue($value);
            $this->em->persist($valueModel);
            $this->em->flush($valueModel);

            return;
        }

        if ($value == $defaultValue || $value === null) {
            $this->em->remove($valueModel);
        } else {
            $valueModel->setValue($value);
        }
        $this->em->flush($valueModel);
    }

    /**
     *
     */
    public function refreshPluginList()
    {
        $refreshed = \Zend_Date::now();
        $repository   = $this->em->getRepository('Shopware\Models\Plugin\Plugin');

        /** @var $collection \Shopware_Components_Plugin_Namespace */
        foreach ($this->plugins as $namespace => $collection) {
            if (!$collection instanceof \Shopware_Components_Plugin_Namespace) {
                continue;
            }
            foreach (array('Local', 'Community', 'Commercial', 'Default') as $source) {
                $path = Shopware()->AppPath('Plugins_' . $source . '_' . $namespace);
                if (!is_dir($path)) {
                    continue;
                }
                foreach (new \DirectoryIterator($path) as $dir) {
                    if (!$dir->isDir() || $dir->isDot()) {
                        continue;
                    }
                    $file = $dir->getPathname() . DIRECTORY_SEPARATOR . 'Bootstrap.php';
                    if (!file_exists($file)) {
                        $file = $dir->getPathname() . DIRECTORY_SEPARATOR . 'BootstrapDummy.php';
                        if (!file_exists($file)) {
                            continue;
                        }
                    }

                    $name = $dir->getFilename();
                    $plugin = $collection->get($name);

                    if ($plugin === null) {
                        $plugin = $collection->initPlugin($name, new \Enlight_Config(array(
                            'source' => $source,
                            'path' => $dir->getPathname() . DIRECTORY_SEPARATOR
                        )));
                    }
                    $collection->registerPlugin($plugin);
                }
            }
        }

        $sql = 'SELECT id, refresh_date FROM s_core_plugins WHERE refresh_date<?';
        $pluginIds = Shopware()->Db()->fetchCol($sql, array($refreshed));
        foreach ($pluginIds as $pluginId) {
            $plugin = $repository->find($pluginId);
            $this->em->remove($plugin);
        }
        $this->em->flush();
    }
}
