<?php

namespace AppBundle\Repository;

/**
 * Taxrefv10Repository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Taxrefv10Repository extends \Doctrine\ORM\EntityRepository
{

    public function getAll()
    {
        $qb = $this->createQueryBuilder('taxrefv10')->getQuery();
        return $qb;
    }

}
