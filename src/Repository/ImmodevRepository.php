<?php

namespace App\Repository;

use App\Entity\Immodev;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Immodev|null find($id, $lockMode = null, $lockVersion = null)
 * @method Immodev|null findOneBy(array $criteria, array $orderBy = null)
 * @method Immodev[]    findAll()
 * @method Immodev[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImmodevRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Immodev::class);
    }

    // /**
    //  * @return Immodev[] Returns an array of Immodev objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Immodev
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
