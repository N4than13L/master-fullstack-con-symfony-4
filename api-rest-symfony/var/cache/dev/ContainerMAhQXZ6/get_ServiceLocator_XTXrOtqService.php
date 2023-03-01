<?php

namespace ContainerMAhQXZ6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XTXrOtqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XTXrOtq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XTXrOtq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jwt_Auth' => ['privates', 'App\\Services\\JwtAuth', 'getJwtAuthService', true],
        ], [
            'jwt_Auth' => 'App\\Services\\JwtAuth',
        ]);
    }
}