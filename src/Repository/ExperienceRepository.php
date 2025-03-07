<?php

namespace App\Repository;

use App\Entity\Experience;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ExperienceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Experience::class);
    }

    /**
     * Retourne toutes les expériences triées par ordre alphabétique.
     */
    public function countByEvaluation(int $evaluation): int
    {
        return $this->createQueryBuilder('e')
            ->select('COUNT(e.id)')
            ->where('e.evaluation = :evaluation')
            ->setParameter('evaluation', $evaluation)
            ->getQuery()
            ->getSingleScalarResult();
    }
    // src/Repository/ExperienceRepository.php

public function findByTitreSearch(string $searchTitre, array $orderBy = []): array
{
    $qb = $this->createQueryBuilder('e');

    // Apply the search condition for 'titre' (case insensitive)
    if ($searchTitre) {
        $qb->andWhere('e.titre LIKE :searchTitre')
           ->setParameter('searchTitre', '%' . $searchTitre . '%');
    }

    // Apply ordering if provided
    foreach ($orderBy as $field => $direction) {
        $qb->addOrderBy('e.' . $field, $direction);
    }

    return $qb->getQuery()->getResult();
}

}

/*
// src/Repository/ExperienceRepository.php
namespace App\Repository;

use App\Entity\Experience;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ExperienceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Experience::class);
    }

    public function findAllSortedByName(): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.nom', 'ASC') // Remplace 'nom' par l'attribut à trier
            ->getQuery()
            ->getResult();
    }
}


    //    /**
    //     * @return Experience[] Returns an array of Experience objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Experience
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

//