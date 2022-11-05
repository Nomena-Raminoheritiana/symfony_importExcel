<?php

namespace App\Repository;

use App\Entity\XlsData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<XlsData>
 *
 * @method XlsData|null find($id, $lockMode = null, $lockVersion = null)
 * @method XlsData|null findOneBy(array $criteria, array $orderBy = null)
 * @method XlsData[]    findAll()
 * @method XlsData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class XlsDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, XlsData::class);
    }

    public function save(XlsData $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(XlsData $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function clearData()
    {
        return  $this->createQueryBuilder('e')
            ->delete()
            ->getQuery()
            ->execute();
    }

//    /**
//     * @return XlsData[] Returns an array of XlsData objects
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

//    public function findOneBySomeField($value): ?XlsData
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
