<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Actualites extends \App\Entity\Actualites implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'categorie' => [parent::class, 'categorie', null],
        "\0".parent::class."\0".'date' => [parent::class, 'date', null],
        "\0".parent::class."\0".'discription' => [parent::class, 'discription', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'priorite' => [parent::class, 'priorite', null],
        "\0".parent::class."\0".'titre' => [parent::class, 'titre', null],
        'categorie' => [parent::class, 'categorie', null],
        'date' => [parent::class, 'date', null],
        'discription' => [parent::class, 'discription', null],
        'id' => [parent::class, 'id', null],
        'priorite' => [parent::class, 'priorite', null],
        'titre' => [parent::class, 'titre', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
