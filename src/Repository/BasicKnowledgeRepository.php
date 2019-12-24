<?php

namespace App\Repository;

use App\Entity\BasicKnowledge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BasicKnowledge|null find($id, $lockMode = null, $lockVersion = null)
 * @method BasicKnowledge|null findOneBy(array $criteria, array $orderBy = null)
 * @method BasicKnowledge[]    findAll()
 * @method BasicKnowledge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BasicKnowledgeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BasicKnowledge::class);
    }

    // /**
    //  * @return BasicKnowledge[] Returns an array of BasicKnowledge objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BasicKnowledge
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
