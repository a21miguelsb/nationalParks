<?php

namespace Container3XPAIC1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddParksControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\addParksController' shared autowired service.
     *
     * @return \App\Controller\addParksController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/addParksController.php';

        $container->services['App\\Controller\\addParksController'] = $instance = new \App\Controller\addParksController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\addParksController', $container));

        return $instance;
    }
}
