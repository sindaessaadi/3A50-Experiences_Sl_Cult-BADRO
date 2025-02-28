<?php

namespace App\Repository;

use App\Entity\Preferences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Preferences>
 */
class PreferencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Preferences::class);
    }

//    /**
//     * @return Preferences[] Returns an array of Preferences objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Preferences
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
        public function findPreferenceById(int $id): ?Preferences
       {
         return $this->find($id);
         }

         public function findByCountry(string $country): ?Preferences
         {
             return $this->findOneBy(['Country' => $country]);
         }
       
         public function findByUniversityType(string $universityType): array
         {
             return $this->createQueryBuilder('p')
                 ->andWhere('p.University_Type = :type')
                 ->setParameter('type', $universityType)
                 ->getQuery()
                 ->getResult();
         }
         

}
