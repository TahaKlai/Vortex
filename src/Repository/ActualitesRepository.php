<?php

namespace App\Repository;

use App\Entity\Actualites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Actualites>
 *
 * @method Actualites|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actualites|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actualites[]    findAll()
 * @method Actualites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActualitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actualites::class);
    }

    public function searchByKeyword(string $keyword): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.titre LIKE :keyword OR a.description LIKE :keyword')
            ->setParameter('keyword', '%'.$keyword.'%')
            ->getQuery()
            ->getResult();
    }


   
    public function paginationQuery()
    {
        return $this->createQueryBuilder('a')
           ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
        ;
   
    }




    
    public function getStatsByType()
    {
        $qb = $this->createQueryBuilder('s')
            ->select('s.priorite as priorite, count(s) as count')
            ->groupBy('s.priorite');
            
    
        return $qb->getQuery()->getResult();
    }





    public function searchByType($query)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.titre LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('s.titre', 'ASC')
            ->getQuery()
            ->getResult();
    }
    


//    public function findOneBySomeField($value): ?Actualites
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
