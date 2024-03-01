<?php

namespace ContainerWWx2V6b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O5fdk4CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o5fdk4C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o5fdk4C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'frontRepository' => ['privates', 'App\\Repository\\FrontRepository', 'getFrontRepositoryService', true],
        ], [
            'frontRepository' => 'App\\Repository\\FrontRepository',
        ]);
    }
}
