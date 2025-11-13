<?php

namespace App\Repository;

use App\Entity\Velo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Velo>
 */
class VeloRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Velo::class);
    }

    /**
     * Récupère tous les vélos
     * @return Velo[]
     */
    public function findAllVelo(): array
    {
        return $this->findAll();
    }

    /**
     * Récupère le premier vélo
     */
    public function findFirstVelo(): ?Velo
    {
        return $this->findOneBy([], ['id' => 'ASC']);
    }

    /**
     * Récupère les vélos en promotion
     * @return Velo[]
     */
    public function findVelosEnPromotion(): array
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.estEnPromotion = :promotion')
            ->setParameter('promotion', true)
            ->orderBy('v.dateAjout', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByType(string $type): array
{
    return $this->findBy(['type' => $type]);
}

public function findExpensiveVelos(float $price): array
{
    return $this->createQueryBuilder('v')
        ->where('v.prix > :price')
        ->setParameter('price', $price)
        ->orderBy('v.prix', 'DESC')
        ->getQuery()
        ->getResult();
}

}
