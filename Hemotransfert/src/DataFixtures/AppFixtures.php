<?php

namespace App\DataFixtures;

use App\Entity\Stock;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $stock = new Stock();
        $stock->setType('Opositif')
        ->setQuantite(20)
        ->setEtat('bon')
        ->setOrigine('wissal arfaoui');

        $manager->persist($stock);
        $manager->flush();
    }
}
