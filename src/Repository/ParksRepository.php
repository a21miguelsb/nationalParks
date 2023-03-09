<?php

namespace App\Repository;

use App\Entity\Parks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Parks>
 *
 * @method Parks|null find($id, $lockMode = null, $lockVersion = null)
 * @method Parks|null findOneBy(array $criteria, array $orderBy = null)
 * @method Parks[]    findAll()
 * @method Parks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Parks::class);
    }

    public function save(Parks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Parks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

   /**
    * @return Parks[] Returns an array of Parks objects
    */
   public function findByEcosistema($ecosistema): array
   {
       return $this->createQueryBuilder('p')
           ->andWhere('p.ecosistema = :eco')
           ->setParameter('eco', $ecosistema)
           ->orderBy('p.id', 'ASC')
           ->getQuery()
           ->getResult()
       ;
   }

//    public function findOneBySomeField($value): ?Parks
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
