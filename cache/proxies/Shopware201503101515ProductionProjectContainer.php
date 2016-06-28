<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class Shopware201503101515ProductionProjectContainer extends Shopware\Components\DependencyInjection\Container
{
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->set('service_container', $this);
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'application' => 'getApplicationService',
            'bootstrap' => 'getBootstrapService',
            'cache' => 'getCacheService',
            'cache_factory' => 'getCacheFactoryService',
            'categorydenormalization' => 'getCategorydenormalizationService',
            'categorysubscriber' => 'getCategorysubscriberService',
            'config' => 'getConfigService',
            'config_factory' => 'getConfigFactoryService',
            'corelogger' => 'getCoreloggerService',
            'currency' => 'getCurrencyService',
            'currency_factory' => 'getCurrencyFactoryService',
            'date' => 'getDateService',
            'db' => 'getDbService',
            'db_connection' => 'getDbConnectionService',
            'db_factory' => 'getDbFactoryService',
            'dbal_connection' => 'getDbalConnectionService',
            'debuglogger' => 'getDebugloggerService',
            'events' => 'getEventsService',
            'front' => 'getFrontService',
            'front_factory' => 'getFrontFactoryService',
            'hooks' => 'getHooksService',
            'loader' => 'getLoaderService',
            'locale' => 'getLocaleService',
            'locale_factory' => 'getLocaleFactoryService',
            'log' => 'getLogService',
            'mail' => 'getMailService',
            'mail_factory' => 'getMailFactoryService',
            'mailtransport' => 'getMailtransportService',
            'mailtransport_factory' => 'getMailtransportFactoryService',
            'model_annotations_factory' => 'getModelAnnotationsFactoryService',
            'model_factory' => 'getModelFactoryService',
            'modelannotations' => 'getModelannotationsService',
            'modelconfig' => 'getModelconfigService',
            'models' => 'getModelsService',
            'monolog.formatter.wildfire' => 'getMonolog_Formatter_WildfireService',
            'monolog.handler.chromephp' => 'getMonolog_Handler_ChromephpService',
            'monolog.handler.firephp' => 'getMonolog_Handler_FirephpService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.processor.uid' => 'getMonolog_Processor_UidService',
            'pluginlogger' => 'getPluginloggerService',
            'plugins' => 'getPluginsService',
            'plugins_factory' => 'getPluginsFactoryService',
            'router' => 'getRouterService',
            'session' => 'getSessionService',
            'session_factory' => 'getSessionFactoryService',
            'shopware.cache_manager' => 'getShopware_CacheManagerService',
            'shopware.holiday_table_updater' => 'getShopware_HolidayTableUpdaterService',
            'shopware.plugin_manager' => 'getShopware_PluginManagerService',
            'shopware.snippet_database_handler' => 'getShopware_SnippetDatabaseHandlerService',
            'shopware.snippet_query_handler' => 'getShopware_SnippetQueryHandlerService',
            'snippets' => 'getSnippetsService',
            'table' => 'getTableService',
            'table_factory' => 'getTableFactoryService',
            'template' => 'getTemplateService',
            'template_factory' => 'getTemplateFactoryService',
            'templatemail' => 'getTemplatemailService',
            'templatemail_factory' => 'getTemplatemailFactoryService',
            'thumbnail_generator_basic' => 'getThumbnailGeneratorBasicService',
            'thumbnail_manager' => 'getThumbnailManagerService',
        );
        $this->aliases = array(
            'plugin_manager' => 'plugins',
            'shopware.db' => 'db',
            'shopware.event_manager' => 'events',
            'shopware.hook_manager' => 'hooks',
            'shopware.loader' => 'loader',
            'shopware.locale' => 'locale',
            'shopware.mail_transport' => 'mailtransport',
            'shopware.model_annotations' => 'modelannotations',
            'shopware.model_config' => 'modelconfig',
            'shopware.model_manager' => 'models',
        );
    }
    protected function getApplicationService()
    {
        throw new RuntimeException('You have requested a synthetic service ("application"). The DIC does not know how to construct this service.');
    }
    protected function getBootstrapService()
    {
        throw new RuntimeException('You have requested a synthetic service ("bootstrap"). The DIC does not know how to construct this service.');
    }
    protected function getCacheService()
    {
        return $this->services['cache'] = $this->get('cache_factory')->factory(call_user_func(array('Zend_Cache', 'factory'), 'Core', 'File', array('automatic_serialization' => true, 'automatic_cleaning_factor' => 0, 'lifetime' => 3600), array('hashed_directory_perm' => 505, 'cache_file_perm' => 420, 'hashed_directory_level' => 3, 'cache_dir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/general/', 'file_name_prefix' => 'shopware')));
    }
    protected function getCacheFactoryService()
    {
        return $this->services['cache_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Cache();
    }
    protected function getCategorydenormalizationService()
    {
        return $this->services['categorydenormalization'] = new \Shopware\Components\Model\CategoryDenormalization($this->get('db_connection'));
    }
    protected function getCategorysubscriberService()
    {
        return $this->services['categorysubscriber'] = new \Shopware\Components\Model\CategorySubscriber($this->get('categorydenormalization'));
    }
    protected function getConfigService()
    {
        return $this->services['config'] = $this->get('config_factory')->factory($this->get('cache'), $this->get('db', ContainerInterface::NULL_ON_INVALID_REFERENCE), array());
    }
    protected function getConfigFactoryService()
    {
        return $this->services['config_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Config();
    }
    protected function getCoreloggerService()
    {
        $this->services['corelogger'] = $instance = new \Shopware\Components\Logger('core');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getCurrencyService()
    {
        return $this->services['currency'] = $this->get('currency_factory')->factory($this, $this->get('locale'));
    }
    protected function getCurrencyFactoryService()
    {
        return $this->services['currency_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Currency();
    }
    protected function getDateService()
    {
        return $this->services['date'] = new \Zend_Date($this->get('locale'));
    }
    protected function getDbService()
    {
        return $this->services['db'] = $this->get('db_factory')->factory('pdo_mysql', array('username' => 'root', 'password' => 'root', 'dbname' => 'shopware4', 'host' => 'localhost', 'charset' => 'utf8', 'adapter' => 'pdo_mysql', 'port' => '3306'));
    }
    protected function getDbConnectionService()
    {
        return $this->services['db_connection'] = $this->get('db')->getConnection();
    }
    protected function getDbFactoryService()
    {
        return $this->services['db_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Db();
    }
    protected function getDbalConnectionService()
    {
        return $this->services['dbal_connection'] = $this->get('models')->getConnection();
    }
    protected function getDebugloggerService()
    {
        return $this->services['debuglogger'] = new \Shopware\Components\Logger('debug');
    }
    protected function getEventsService()
    {
        $this->services['events'] = $instance = new \Enlight_Event_EventManager();
        $instance->addListener('Enlight_Controller_Front_RouteStartup', array(0 => $this->get('monolog.handler.chromephp'), 1 => 'onRouteStartUp'));
        $instance->addListener('Enlight_Controller_Front_RouteStartup', array(0 => $this->get('monolog.handler.firephp'), 1 => 'onRouteStartUp'));
        return $instance;
    }
    protected function getFrontService()
    {
        return $this->services['front'] = $this->get('front_factory')->factory($this, $this->get('bootstrap'), $this->get('events'), array('noErrorHandler' => false, 'throwExceptions' => false, 'useDefaultControllerAlways' => true, 'disableOutputBuffering' => false, 'showException' => false, 'charset' => 'utf-8'));
    }
    protected function getFrontFactoryService()
    {
        return $this->services['front_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Front();
    }
    protected function getHooksService()
    {
        return $this->services['hooks'] = new \Enlight_Hook_HookManager($this->get('events'), $this->get('loader'), array('proxyDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/proxies/', 'proxyNamespace' => 'Shopware_Proxies'));
    }
    protected function getLoaderService()
    {
        return $this->services['loader'] = new \Enlight_Loader();
    }
    protected function getLocaleService()
    {
        return $this->services['locale'] = $this->get('locale_factory')->factory($this);
    }
    protected function getLocaleFactoryService()
    {
        return $this->services['locale_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Locale();
    }
    protected function getLogService()
    {
        return $this->services['log'] = new \Enlight_Components_Log($this->get('debuglogger'));
    }
    protected function getMailService()
    {
        return $this->services['mail'] = $this->get('mail_factory')->factory($this, $this->get('config'), array('charset' => 'utf-8'));
    }
    protected function getMailFactoryService()
    {
        return $this->services['mail_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Mail();
    }
    protected function getMailtransportService()
    {
        return $this->services['mailtransport'] = $this->get('mailtransport_factory')->factory($this->get('loader'), $this->get('config'), array('charset' => 'utf-8'));
    }
    protected function getMailtransportFactoryService()
    {
        return $this->services['mailtransport_factory'] = new \Shopware\Components\DependencyInjection\Bridge\MailTransport();
    }
    protected function getModelAnnotationsFactoryService()
    {
        return $this->services['model_annotations_factory'] = new \Shopware\Components\DependencyInjection\Bridge\ModelAnnotation();
    }
    protected function getModelFactoryService()
    {
        return $this->services['model_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Models();
    }
    protected function getModelannotationsService()
    {
        return $this->services['modelannotations'] = $this->get('model_annotations_factory')->factory($this->get('modelconfig'), '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/engine/Shopware/Models');
    }
    protected function getModelconfigService()
    {
        return $this->services['modelconfig'] = new \Shopware\Components\Model\Configuration(array('autoGenerateProxyClasses' => false, 'fileCacheDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/doctrine/filecache/', 'attributeDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/doctrine/attributes/', 'proxyDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/doctrine/proxies/', 'proxyNamespace' => 'Shopware\\Proxies', 'cacheProvider' => 'auto', 'cacheNamespace' => NULL), $this->get('cache'), $this->get('hooks'));
    }
    protected function getModelsService()
    {
        $a = new \Doctrine\Common\EventManager();
        $a->addEventSubscriber(new \Shopware\Components\Model\EventSubscriber($this->get('events')));
        $a->addEventSubscriber(new \Shopware\Models\Order\OrderHistorySubscriber());
        $a->addEventSubscriber($this->get('categorysubscriber'));
        return $this->services['models'] = $this->get('model_factory')->factory($a, $this->get('modelconfig'), $this->get('loader'), $this->get('db_connection'), '/Users/Shared/development/projects_git/webshop/shopware-4/shopware', $this->get('modelannotations'));
    }
    protected function getMonolog_Formatter_WildfireService()
    {
        return $this->services['monolog.formatter.wildfire'] = new \Shopware\Components\Log\Formatter\WildfireFormatter();
    }
    protected function getMonolog_Handler_ChromephpService()
    {
        return $this->services['monolog.handler.chromephp'] = new \Shopware\Components\Log\Handler\ChromePhpHandler();
    }
    protected function getMonolog_Handler_FirephpService()
    {
        $this->services['monolog.handler.firephp'] = $instance = new \Shopware\Components\Log\Handler\FirePHPHandler();
        $instance->setFormatter($this->get('monolog.formatter.wildfire'));
        return $instance;
    }
    protected function getMonolog_Handler_MainService()
    {
        $a = new \Monolog\Handler\RotatingFileHandler('/Users/Shared/development/projects_git/webshop/shopware-4/shopware/logs/core_production.log', 14);
        $a->pushProcessor($this->get('monolog.processor.uid'));
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($a, 400);
    }
    protected function getPluginloggerService()
    {
        $a = new \Monolog\Handler\RotatingFileHandler('/Users/Shared/development/projects_git/webshop/shopware-4/shopware/logs/plugin_production.log', 14);
        $a->pushProcessor($this->get('monolog.processor.uid'));
        $this->services['pluginlogger'] = $instance = new \Shopware\Components\Logger('plugin');
        $instance->pushHandler($a);
        return $instance;
    }
    protected function getPluginsService()
    {
        return $this->services['plugins'] = $this->get('plugins_factory')->factory($this, $this->get('loader'), $this->get('events'), $this->get('application'), array());
    }
    protected function getPluginsFactoryService()
    {
        return $this->services['plugins_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Plugins();
    }
    protected function getRouterService()
    {
        return $this->services['router'] = $this->get('front')->Router();
    }
    protected function getSessionService()
    {
        return $this->services['session'] = $this->get('session_factory')->factory($this);
    }
    protected function getSessionFactoryService()
    {
        return $this->services['session_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Session();
    }
    protected function getShopware_CacheManagerService()
    {
        return $this->services['shopware.cache_manager'] = new \Shopware\Components\CacheManager($this);
    }
    protected function getShopware_HolidayTableUpdaterService()
    {
        return $this->services['shopware.holiday_table_updater'] = new \Shopware\Components\HolidayTableUpdater($this->get('dbal_connection'));
    }
    protected function getShopware_PluginManagerService()
    {
        return $this->services['shopware.plugin_manager'] = new \Shopware\Components\Plugin\Manager($this->get('models'), $this->get('plugins'));
    }
    protected function getShopware_SnippetDatabaseHandlerService()
    {
        return $this->services['shopware.snippet_database_handler'] = new \Shopware\Components\Snippet\DatabaseHandler($this->get('models'), $this->get('db'), '/Users/Shared/development/projects_git/webshop/shopware-4/shopware');
    }
    protected function getShopware_SnippetQueryHandlerService()
    {
        return $this->services['shopware.snippet_query_handler'] = new \Shopware\Components\Snippet\QueryHandler('/Users/Shared/development/projects_git/webshop/shopware-4/shopware/snippets/');
    }
    protected function getSnippetsService()
    {
        return $this->services['snippets'] = new \Shopware_Components_Snippet_Manager($this->get('models'), array('readFromDb' => true, 'writeToDb' => true, 'readFromIni' => false, 'writeToIni' => false));
    }
    protected function getTableService()
    {
        return $this->services['table'] = $this->get('table_factory')->factory($this->get('db'), $this->get('cache'));
    }
    protected function getTableFactoryService()
    {
        return $this->services['table_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Table();
    }
    protected function getTemplateService()
    {
        return $this->services['template'] = $this->get('template_factory')->factory($this->get('events'), $this->get('snippets'), array('compileCheck' => true, 'compileLocking' => true, 'useSubDirs' => true, 'forceCompile' => false, 'useIncludePath' => true, 'charset' => 'utf-8', 'forceCache' => false, 'cacheDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/templates/', 'compileDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/templates/'));
    }
    protected function getTemplateFactoryService()
    {
        return $this->services['template_factory'] = new \Shopware\Components\DependencyInjection\Bridge\Template();
    }
    protected function getTemplatemailService()
    {
        return $this->services['templatemail'] = $this->get('templatemail_factory')->factory($this);
    }
    protected function getTemplatemailFactoryService()
    {
        return $this->services['templatemail_factory'] = new \Shopware\Components\DependencyInjection\Bridge\TemplateMail();
    }
    protected function getThumbnailGeneratorBasicService()
    {
        return $this->services['thumbnail_generator_basic'] = new \Shopware\Components\Thumbnail\Generator\Basic();
    }
    protected function getThumbnailManagerService()
    {
        return $this->services['thumbnail_manager'] = new \Shopware\Components\Thumbnail\Manager($this->get('thumbnail_generator_basic'), '/Users/Shared/development/projects_git/webshop/shopware-4/shopware', $this->get('events'));
    }
    protected function getMonolog_Processor_UidService()
    {
        return $this->services['monolog.processor.uid'] = new \Monolog\Processor\UidProcessor();
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        $name = strtolower($name);
        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware',
            'kernel.environment' => 'production',
            'kernel.debug' => false,
            'kernel.name' => 'Shopware',
            'kernel.cache_dir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/proxies/',
            'kernel.logs_dir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/logs',
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'Shopware201503101515ProductionProjectContainer',
            'shopware.snippet_manager.class' => 'Shopware_Components_Snippet_Manager',
            'shopware.cache_factory.class' => 'Shopware\\Components\\DependencyInjection\\Bridge\\Cache',
            'shopware.config_factory.class' => 'Shopware\\Components\\DependencyInjection\\Bridge\\Config',
            'shopware.model_factory.class' => 'Shopware\\Components\\DependencyInjection\\Bridge\\Models',
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.logger.constant.critical' => 500,
            'monolog.logger.constant.error' => 400,
            'monolog.logger.constant.info' => 200,
            'monolog.handler.firephp.class' => 'Shopware\\Components\\Log\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Shopware\\Components\\Log\\Handler\\ChromePhpHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.formatter.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.formatter.wildfire.class' => 'Shopware\\Components\\Log\\Formatter\\WildfireFormatter',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'shopware.trustedproxies' => array(
            ),
            'shopware.db' => array(
                'username' => 'root',
                'password' => 'root',
                'dbname' => 'shopware4',
                'host' => 'localhost',
                'charset' => 'utf8',
                'adapter' => 'pdo_mysql',
                'port' => '3306',
            ),
            'shopware.db.username' => 'root',
            'shopware.db.password' => 'root',
            'shopware.db.dbname' => 'shopware4',
            'shopware.db.host' => 'localhost',
            'shopware.db.charset' => 'utf8',
            'shopware.db.adapter' => 'pdo_mysql',
            'shopware.db.port' => '3306',
            'shopware.snippet' => array(
                'readFromDb' => true,
                'writeToDb' => true,
                'readFromIni' => false,
                'writeToIni' => false,
            ),
            'shopware.snippet.readfromdb' => true,
            'shopware.snippet.writetodb' => true,
            'shopware.snippet.readfromini' => false,
            'shopware.snippet.writetoini' => false,
            'shopware.front' => array(
                'noErrorHandler' => false,
                'throwExceptions' => false,
                'useDefaultControllerAlways' => true,
                'disableOutputBuffering' => false,
                'showException' => false,
                'charset' => 'utf-8',
            ),
            'shopware.front.noerrorhandler' => false,
            'shopware.front.throwexceptions' => false,
            'shopware.front.usedefaultcontrolleralways' => true,
            'shopware.front.disableoutputbuffering' => false,
            'shopware.front.showexception' => false,
            'shopware.front.charset' => 'utf-8',
            'shopware.template' => array(
                'compileCheck' => true,
                'compileLocking' => true,
                'useSubDirs' => true,
                'forceCompile' => false,
                'useIncludePath' => true,
                'charset' => 'utf-8',
                'forceCache' => false,
                'cacheDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/templates/',
                'compileDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/templates/',
            ),
            'shopware.template.compilecheck' => true,
            'shopware.template.compilelocking' => true,
            'shopware.template.usesubdirs' => true,
            'shopware.template.forcecompile' => false,
            'shopware.template.useincludepath' => true,
            'shopware.template.charset' => 'utf-8',
            'shopware.template.forcecache' => false,
            'shopware.template.cachedir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/templates/',
            'shopware.template.compiledir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/templates/',
            'shopware.mail' => array(
                'charset' => 'utf-8',
            ),
            'shopware.mail.charset' => 'utf-8',
            'shopware.httpcache' => array(
                'enabled' => true,
                'debug' => false,
                'default_ttl' => 0,
                'private_headers' => array(
                    0 => 'Authorization',
                    1 => 'Cookie',
                ),
                'allow_reload' => false,
                'allow_revalidate' => false,
                'stale_while_revalidate' => 2,
                'stale_if_error' => false,
                'cache_dir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/html/',
                'cache_cookies' => array(
                    0 => 'shop',
                    1 => 'currency',
                ),
            ),
            'shopware.httpcache.enabled' => true,
            'shopware.httpcache.debug' => false,
            'shopware.httpcache.default_ttl' => 0,
            'shopware.httpcache.private_headers' => array(
                0 => 'Authorization',
                1 => 'Cookie',
            ),
            'shopware.httpcache.private_headers.0' => 'Authorization',
            'shopware.httpcache.private_headers.1' => 'Cookie',
            'shopware.httpcache.allow_reload' => false,
            'shopware.httpcache.allow_revalidate' => false,
            'shopware.httpcache.stale_while_revalidate' => 2,
            'shopware.httpcache.stale_if_error' => false,
            'shopware.httpcache.cache_dir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/html/',
            'shopware.httpcache.cache_cookies' => array(
                0 => 'shop',
                1 => 'currency',
            ),
            'shopware.httpcache.cache_cookies.0' => 'shop',
            'shopware.httpcache.cache_cookies.1' => 'currency',
            'shopware.session' => array(
                'name' => 'SHOPWARESID',
                'cookie_lifetime' => 0,
                'use_trans_sid' => false,
                'gc_probability' => 1,
                'gc_divisor' => 100,
                'save_handler' => 'db',
            ),
            'shopware.session.name' => 'SHOPWARESID',
            'shopware.session.cookie_lifetime' => 0,
            'shopware.session.use_trans_sid' => false,
            'shopware.session.gc_probability' => 1,
            'shopware.session.gc_divisor' => 100,
            'shopware.session.save_handler' => 'db',
            'shopware.phpsettings' => array(
                'error_reporting' => 32767,
                'display_errors' => 1,
                'date.timezone' => 'Europe/Berlin',
                'zend.ze1_compatibility_mode' => 0,
            ),
            'shopware.phpsettings.error_reporting' => 32767,
            'shopware.phpsettings.display_errors' => 1,
            'shopware.phpsettings.date.timezone' => 'Europe/Berlin',
            'shopware.phpsettings.zend.ze1_compatibility_mode' => 0,
            'shopware.cache' => array(
                'frontendOptions' => array(
                    'automatic_serialization' => true,
                    'automatic_cleaning_factor' => 0,
                    'lifetime' => 3600,
                ),
                'backend' => 'File',
                'backendOptions' => array(
                    'hashed_directory_perm' => 505,
                    'cache_file_perm' => 420,
                    'hashed_directory_level' => 3,
                    'cache_dir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/general/',
                    'file_name_prefix' => 'shopware',
                ),
            ),
            'shopware.cache.frontendoptions' => array(
                'automatic_serialization' => true,
                'automatic_cleaning_factor' => 0,
                'lifetime' => 3600,
            ),
            'shopware.cache.frontendoptions.automatic_serialization' => true,
            'shopware.cache.frontendoptions.automatic_cleaning_factor' => 0,
            'shopware.cache.frontendoptions.lifetime' => 3600,
            'shopware.cache.backend' => 'File',
            'shopware.cache.backendoptions' => array(
                'hashed_directory_perm' => 505,
                'cache_file_perm' => 420,
                'hashed_directory_level' => 3,
                'cache_dir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/general/',
                'file_name_prefix' => 'shopware',
            ),
            'shopware.cache.backendoptions.hashed_directory_perm' => 505,
            'shopware.cache.backendoptions.cache_file_perm' => 420,
            'shopware.cache.backendoptions.hashed_directory_level' => 3,
            'shopware.cache.backendoptions.cache_dir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/general/',
            'shopware.cache.backendoptions.file_name_prefix' => 'shopware',
            'shopware.hook' => array(
                'proxyDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/proxies/',
                'proxyNamespace' => 'Shopware_Proxies',
            ),
            'shopware.hook.proxydir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/proxies/',
            'shopware.hook.proxynamespace' => 'Shopware_Proxies',
            'shopware.model' => array(
                'autoGenerateProxyClasses' => false,
                'fileCacheDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/doctrine/filecache/',
                'attributeDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/doctrine/attributes/',
                'proxyDir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/doctrine/proxies/',
                'proxyNamespace' => 'Shopware\\Proxies',
                'cacheProvider' => 'auto',
                'cacheNamespace' => NULL,
            ),
            'shopware.model.autogenerateproxyclasses' => false,
            'shopware.model.filecachedir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/doctrine/filecache/',
            'shopware.model.attributedir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/doctrine/attributes/',
            'shopware.model.proxydir' => '/Users/Shared/development/projects_git/webshop/shopware-4/shopware/cache/doctrine/proxies/',
            'shopware.model.proxynamespace' => 'Shopware\\Proxies',
            'shopware.model.cacheprovider' => 'auto',
            'shopware.model.cachenamespace' => NULL,
            'shopware.config' => array(
            ),
            'shopware.custom' => array(
            ),
            'shopware.backendsession' => array(
                'name' => 'SHOPWAREBACKEND',
                'cookie_lifetime' => 0,
                'cookie_httponly' => 1,
                'use_trans_sid' => false,
                'referer_check' => true,
                'client_check' => false,
            ),
            'shopware.backendsession.name' => 'SHOPWAREBACKEND',
            'shopware.backendsession.cookie_lifetime' => 0,
            'shopware.backendsession.cookie_httponly' => 1,
            'shopware.backendsession.use_trans_sid' => false,
            'shopware.backendsession.referer_check' => true,
            'shopware.backendsession.client_check' => false,
            'shopware.plugins' => array(
            ),
        );
    }
}
