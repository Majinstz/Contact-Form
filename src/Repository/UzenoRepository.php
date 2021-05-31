<?php

namespace App\Repository;

use App\Entity\Uzeno;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Uzeno|null find($id, $lockMode = null, $lockVersion = null)
 * @method Uzeno|null findOneBy(array $criteria, array $orderBy = null)
 * @method Uzeno[]    findAll()
 * @method Uzeno[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UzenoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Uzeno::class);
    }

    // /**
    //  * @return Uzeno[] Returns an array of Uzeno objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Uzeno
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
