<?php

namespace Gobusgo\GobusgoBundle\Repository;

/**
 * AddressRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
    public function getCategory()
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c');

        return $qb->getQuery()
            ->getResult();
    }
}
