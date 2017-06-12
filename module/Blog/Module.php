<?php
namespace Blog;


//teach the module where to find the controllers implementing getAutoloaderConfig() from AutoloaderProviderInterface
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
//inform module manager that has new configuration that needs to  load
use Zend\ModuleManager\Feature\ConfigProviderInterface;
/*
 * The module manager, Zend\ModuleManager\ModuleManager, is a very simple class which
 is responsible for iterating over an array of module names and triggering a sequence of
events for each. Instantiation of module classes, initialization tasks, and configuration are all
performed by attached event listeners.
https://framework.zend.com/manual/2.4/en/modules/zend.module-manager.module-manager.html
*/

class Module implements ConfigProviderInterface, AutoloaderProviderInterface
{
    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    // Autoload all classes from namespace 'Blog' from '/module/Blog/src/Blog'
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                )
            )
        );
    }

    public function getConfig(){
        //var_dump( __DIR__ . '/config/module.config.php' );
        return include __DIR__ . '/config/module.config.php';
    }


}