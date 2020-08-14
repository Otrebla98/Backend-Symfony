<?php

namespace App\Repository;

use App\Entity\ParamatroConfigurable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ParamatroConfigurable |null find($id, $lockMode = null, $lockVersion = null)
 * @method ParametroConfigurable |null findOneBy(array $criteria, array $orderBy = null)
 * @method ParametroConfigurable []    findAll()
 * @method ParametroConfigurable []    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParametroConfiguraleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParametroConfigurable::class);
    }

    // /**
    //  * @return ParametroConfigurable[] Returns an array of ParametroConfigurable objects
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
    public function findOneBySomeField($value): ?ParametroConfigurable
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
