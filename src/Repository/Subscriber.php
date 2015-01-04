<?php

namespace WND\SMVCP\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class Subscriber
 */
class Subscriber extends EntityRepository
{
    /**
     * @param int $limit
     *
     * @return \WND\SMVCP\Entity\Subscriber[]
     */
    public function getLatest($limit)
    {
        return $this
            ->createQueryBuilder('s')
            ->add('orderBy', 's.id DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult()
        ;
    }
}
