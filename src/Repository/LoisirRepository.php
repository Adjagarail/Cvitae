<?php

namespace App\Repository;

use App\Entity\Loisir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Loisir|null find($id, $lockMode = null, $lockVersion = null)
 * @method Loisir|null findOneBy(array $criteria, array $orderBy = null)
 * @method Loisir[]    findAll()
 * @method Loisir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoisirRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Loisir::class);
    }

    // /**
    //  * @return Loisir[] Returns an array of Loisir objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Loisir
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
