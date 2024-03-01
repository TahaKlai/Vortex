<?php

namespace App\Repository;

use App\Entity\LogModification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LogModification>
 *
 * @method LogModification|null find($id, $lockMode = null, $lockVersion = null)
 * @method LogModification|null findOneBy(array $criteria, array $orderBy = null)
 * @method LogModification[]    findAll()
 * @method LogModification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogModificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LogModification::class);
    }

//    /**
//     * @return LogModification[] Returns an array of LogModification objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LogModification
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
