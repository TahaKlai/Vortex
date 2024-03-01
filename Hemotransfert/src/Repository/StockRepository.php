<?php

namespace App\Repository;

use App\Entity\Stock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Stock>
 *
 * @method Stock|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stock|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stock[]    findAll()
 * @method Stock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StockRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stock::class);
    }
    public function search(?string $keyword, ?string $category)
    {
        $queryBuilder = $this->createQueryBuilder('s');
    
        if ($keyword !== null) {
            if ($category === 'origine') {
                $queryBuilder->andWhere('s.origine LIKE :keyword')
                    ->setParameter('keyword', '%' . $keyword . '%');
            } elseif ($category === 'type') {
                $queryBuilder->andWhere('s.type LIKE :keyword')
                    ->setParameter('keyword', '%' . $keyword . '%');
            } elseif ($category === 'etat') {
                $queryBuilder->andWhere('s.etat LIKE :keyword')
                    ->setParameter('keyword', '%' . $keyword . '%');
            } elseif ($category === 'quantite') {
                $queryBuilder->andWhere('s.quantite LIKE :keyword')
                    ->setParameter('keyword', '%' . $keyword . '%');
            }
        }
    
        return $queryBuilder->getQuery()->getResult();
    }
//    /**
//     * @return Stock[] Returns an array of Stock objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Stock
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
