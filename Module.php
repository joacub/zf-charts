<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZfCharts;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getServiceConfig($e = null)
    {
    	return array(
    		'factories' => array(
    			'zfChart' => 'ZfChart\Chart\Factory'
    		),
    	);
    }
    
    public function getViewHelperConfig()
    {
    	return array(
    		'invokables' => array(
    			'displayZfChart' => 'ZfChart\View\Helper\DisplayZfChart',
    		)
    	);
    }

}
