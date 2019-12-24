<?php

namespace App\Repository;

use App\Entity\Coding;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Coding|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coding|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coding[]    findAll()
 * @method Coding[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CodingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coding::class);
    }

    // /**
    //  * @return Coding[] Returns an array of Coding objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Coding
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
