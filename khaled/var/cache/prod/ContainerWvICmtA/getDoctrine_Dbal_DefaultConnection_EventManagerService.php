<?php

namespace ContainerWvICmtA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnection_EventManagerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.dbal.default_connection.event_manager' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ContainerAwareEventManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.dbal.default_connection.event_manager'] = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', true],
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService', true],
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService', true],
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => ['privates', 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 'getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService', true],
            'doctrine.orm.messenger.doctrine_schema_subscriber' => ['privates', 'doctrine.orm.messenger.doctrine_schema_subscriber', 'getDoctrine_Orm_Messenger_DoctrineSchemaSubscriberService', true],
            'turbo.doctrine.event_listener' => ['privates', 'turbo.doctrine.event_listener', 'getTurbo_Doctrine_EventListenerService', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => '?',
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => '?',
            'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber' => '?',
            'doctrine.orm.messenger.doctrine_schema_subscriber' => '?',
            'turbo.doctrine.event_listener' => '?',
        ]), [0 => 'doctrine.orm.messenger.doctrine_schema_subscriber', 1 => 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 2 => 'doctrine.orm.listeners.pdo_cache_adapter_doctrine_schema_subscriber', 3 => 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 4 => [0 => [0 => 'loadClassMetadata'], 1 => 'doctrine.orm.default_listeners.attach_entity_listeners'], 5 => [0 => [0 => 'onFlush'], 1 => 'turbo.doctrine.event_listener'], 6 => [0 => [0 => 'postFlush'], 1 => 'turbo.doctrine.event_listener']]);
    }
}
