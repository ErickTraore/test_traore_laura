<?php

namespace App\Repository;

use App\Entity\UserPerso;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UserPerso|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserPerso|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserPerso[]    findAll()
 * @method UserPerso[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserPersoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserPerso::class);
    }

    // /**
    //  * @return UserPerso[] Returns an array of UserPerso objects
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
    public function findOneBySomeField($value): ?UserPerso
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
