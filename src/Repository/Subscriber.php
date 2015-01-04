<?php

namespace WND\SMVCP\Repository;

use Doctrine\ORM\EntityRepository;

class Subscriber extends EntityRepository
{
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
