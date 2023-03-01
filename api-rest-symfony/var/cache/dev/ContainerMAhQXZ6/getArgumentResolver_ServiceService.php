<?php

namespace ContainerMAhQXZ6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'ServiceValueResolver.php';

        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.B6pysiG', 'get_ServiceLocator_B6pysiGService', true],
            'App\\Controller\\UserController::login' => ['privates', '.service_locator.B6pysiG', 'get_ServiceLocator_B6pysiGService', true],
            'App\\Controller\\VideoController::createVideo' => ['privates', '.service_locator.B6pysiG', 'get_ServiceLocator_B6pysiGService', true],
            'App\\Controller\\VideoController::detail' => ['privates', '.service_locator.XTXrOtq', 'get_ServiceLocator_XTXrOtqService', true],
            'App\\Controller\\VideoController::remove' => ['privates', '.service_locator.XTXrOtq', 'get_ServiceLocator_XTXrOtqService', true],
            'App\\Controller\\VideoController::videos' => ['privates', '.service_locator.t8lWGi5', 'get_ServiceLocator_T8lWGi5Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.B6pysiG', 'get_ServiceLocator_B6pysiGService', true],
            'App\\Controller\\UserController:login' => ['privates', '.service_locator.B6pysiG', 'get_ServiceLocator_B6pysiGService', true],
            'App\\Controller\\VideoController:createVideo' => ['privates', '.service_locator.B6pysiG', 'get_ServiceLocator_B6pysiGService', true],
            'App\\Controller\\VideoController:detail' => ['privates', '.service_locator.XTXrOtq', 'get_ServiceLocator_XTXrOtqService', true],
            'App\\Controller\\VideoController:remove' => ['privates', '.service_locator.XTXrOtq', 'get_ServiceLocator_XTXrOtqService', true],
            'App\\Controller\\VideoController:videos' => ['privates', '.service_locator.t8lWGi5', 'get_ServiceLocator_T8lWGi5Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::login' => '?',
            'App\\Controller\\VideoController::createVideo' => '?',
            'App\\Controller\\VideoController::detail' => '?',
            'App\\Controller\\VideoController::remove' => '?',
            'App\\Controller\\VideoController::videos' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:login' => '?',
            'App\\Controller\\VideoController:createVideo' => '?',
            'App\\Controller\\VideoController:detail' => '?',
            'App\\Controller\\VideoController:remove' => '?',
            'App\\Controller\\VideoController:videos' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}
