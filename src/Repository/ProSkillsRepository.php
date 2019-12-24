<?php

namespace App\Repository;

use App\Entity\ProSkills;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ProSkills|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProSkills|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProSkills[]    findAll()
 * @method ProSkills[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProSkillsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProSkills::class);
    }

    // /**
    //  * @return ProSkills[] Returns an array of ProSkills objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProSkills
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
