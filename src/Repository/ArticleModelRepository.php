<?php

namespace App\Repository;

use App\Entity\ArticleModel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArticleModel|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleModel|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleModel[]    findAll()
 * @method ArticleModel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleModelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleModel::class);
    }

    // /**
    //  * @return ArticleModel[] Returns an array of ArticleModel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ArticleModel
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
