<?php

namespace ContainerWWx2V6b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DbLmqFoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DbLmqFo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DbLmqFo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ActualitesRepository' => ['privates', 'App\\Repository\\ActualitesRepository', 'getActualitesRepositoryService', true],
        ], [
            'ActualitesRepository' => 'App\\Repository\\ActualitesRepository',
        ]);
    }
}
