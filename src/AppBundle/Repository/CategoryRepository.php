<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Category;
// use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    // public function __construct(RegistryInterface $registry)
    // {
    //     parent::__construct($registry, Category::class);
    // }
}
