<?php

namespace App\Repository;

use App\Entity\CentreDeDon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CentreDeDon>
 *
 * @method CentreDeDon|null find($id, $lockMode = null, $lockVersion = null)
 * @method CentreDeDon|null findOneBy(array $criteria, array $orderBy = null)
 * @method CentreDeDon[]    findAll()
 * @method CentreDeDon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CentreDeDonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CentreDeDon::class);
    }



    public function search(?string $keyword, ?string $category)

    {

        $queryBuilder = $this->createQueryBuilder('c');
    
        if ($keyword !== null) {
            if ($category === 'nom') {
                $queryBuilder->andWhere('c.nom LIKE :keyword')
                    ->setParameter('keyword', '%' . $keyword . '%');
            } elseif ($category === 'adresse') {
                $queryBuilder->andWhere('c.adresse LIKE :keyword')
                    ->setParameter('keyword', '%' . $keyword . '%');
            } elseif ($category === 'coordonnegeo') {
                $queryBuilder->andWhere('c.coordonnegeo LIKE :keyword')
                    ->setParameter('keyword', '%' . $keyword . '%');
            } 
        }
    
        return $queryBuilder->getQuery()->getResult();
    }

//    /**
//     * @return CentreDeDon[] Returns an array of CentreDeDon objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CentreDeDon
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
