<?php

namespace App\Repository;

use App\Entity\Reply;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReplyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reply::class);
    }

    /**
     * Retourne toutes les réponses triées par ordre alphabétique.
     */
    public function findAllSortedByName(): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.nom', 'ASC')
            ->getQuery()
            ->getResult();
    }
}

/*
namespace App\Repository;

use App\Entity\Reply;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReplyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reply::class);
    }

    public function findAllSortedByName(): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.nom', 'ASC') // Remplace 'nom' par l'attribut à trier
            ->getQuery()
            ->getResult();
    }
    //    /**
    //     * @return Reply[] Returns an array of Reply objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Reply
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

