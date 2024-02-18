<?php

namespace App\Test\Controller;

use App\Entity\Demandededon;
use App\Repository\DemandededonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DemandededonControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private DemandededonRepository $repository;
    private string $path = '/demandededon/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Demandededon::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Demandededon index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'demandededon[ID_Demande]' => 'Testing',
            'demandededon[ID_Donateur]' => 'Testing',
            'demandededon[datedemande]' => 'Testing',
            'demandededon[typedon]' => 'Testing',
            'demandededon[quantitedemande]' => 'Testing',
            'demandededon[statusdemande]' => 'Testing',
        ]);

        self::assertResponseRedirects('/demandededon/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Demandededon();
        $fixture->setID_Demande('My Title');
        $fixture->setID_Donateur('My Title');
        $fixture->setDatedemande('My Title');
        $fixture->setTypedon('My Title');
        $fixture->setQuantitedemande('My Title');
        $fixture->setStatusdemande('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Demandededon');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Demandededon();
        $fixture->setID_Demande('My Title');
        $fixture->setID_Donateur('My Title');
        $fixture->setDatedemande('My Title');
        $fixture->setTypedon('My Title');
        $fixture->setQuantitedemande('My Title');
        $fixture->setStatusdemande('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'demandededon[ID_Demande]' => 'Something New',
            'demandededon[ID_Donateur]' => 'Something New',
            'demandededon[datedemande]' => 'Something New',
            'demandededon[typedon]' => 'Something New',
            'demandededon[quantitedemande]' => 'Something New',
            'demandededon[statusdemande]' => 'Something New',
        ]);

        self::assertResponseRedirects('/demandededon/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getID_Demande());
        self::assertSame('Something New', $fixture[0]->getID_Donateur());
        self::assertSame('Something New', $fixture[0]->getDatedemande());
        self::assertSame('Something New', $fixture[0]->getTypedon());
        self::assertSame('Something New', $fixture[0]->getQuantitedemande());
        self::assertSame('Something New', $fixture[0]->getStatusdemande());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Demandededon();
        $fixture->setID_Demande('My Title');
        $fixture->setID_Donateur('My Title');
        $fixture->setDatedemande('My Title');
        $fixture->setTypedon('My Title');
        $fixture->setQuantitedemande('My Title');
        $fixture->setStatusdemande('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/demandededon/');
    }
}
