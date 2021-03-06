<?php

namespace AppBundle\Repository;

/**
 * ImageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ImageRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Get the gallery's query.
     *
     * @return \Doctrine\ORM\Query
     */
    public function getGalleryQuery()
    {
        $qb = $this->createQueryBuilder('i')
                   ->leftJoin('i.post', 'p')
                   ->where('p.published = 1')
                   ->orderBy('p.created', 'DESC');

        return $qb->getQuery();
    }
}
