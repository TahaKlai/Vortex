<?php

namespace App\Repository;

use App\Entity\Demandededon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Demandededon>
 *
 * @method Demandededon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Demandededon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Demandededon[]    findAll()
 * @method Demandededon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandededonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Demandededon::class);
    }

//    /**
//     * @return Demandededon[] Returns an array of Demandededon objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Demandededon
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
