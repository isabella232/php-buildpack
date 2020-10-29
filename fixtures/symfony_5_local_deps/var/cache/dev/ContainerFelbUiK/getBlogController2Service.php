<?php

namespace ContainerFelbUiK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlogController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BlogController' shared autowired service.
     *
     * @return \App\Controller\BlogController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BlogController.php';

        $container->services['App\\Controller\\BlogController'] = $instance = new \App\Controller\BlogController();

        $instance->setContainer(($container->privates['.service_locator.GcpeMM3'] ?? $container->load('get_ServiceLocator_GcpeMM3Service'))->withContext('App\\Controller\\BlogController', $container));

        return $instance;
    }
}
