<?php

namespace App\Repository;

use App\Entity\Epoki;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Epoki|null find($id, $lockMode = null, $lockVersion = null)
 * @method Epoki|null findOneBy(array $criteria, array $orderBy = null)
 * @method Epoki[]    findAll()
 * @method Epoki[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EpokiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Epoki::class);
    }

    // /**
    //  * @return Epoki[] Returns an array of Epoki objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Epoki
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
