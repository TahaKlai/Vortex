<?php

namespace ContainerXcCikpj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vv3IHVHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Vv3IHVH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Vv3IHVH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'front' => ['privates', '.errored..service_locator.Vv3IHVH.App\\Entity\\Front', NULL, 'Cannot autowire service ".service_locator.Vv3IHVH": it references class "App\\Entity\\Front" but no such service exists.'],
        ], [
            'front' => 'App\\Entity\\Front',
        ]);
    }
}
