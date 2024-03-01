<?php

namespace ContainerWvICmtA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EM7s_2OService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.eM7s.2O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eM7s.2O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actualite' => ['privates', '.errored..service_locator.eM7s.2O.App\\Entity\\Actualites', NULL, 'Cannot autowire service ".service_locator.eM7s.2O": it references class "App\\Entity\\Actualites" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'actualite' => 'App\\Entity\\Actualites',
            'entityManager' => '?',
        ]);
    }
}
