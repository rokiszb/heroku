<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Item;
// use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\EntityRepository;

class ItemRepository extends EntityRepository
{
    // public function __construct(RegistryInterface $registry)
    // {
    //     parent::__construct($registry, Item::class);
    // }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
