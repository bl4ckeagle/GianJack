<?php

namespace AppBundle\Entity;
use Doctrine\ORM\EntityRepository;

/**
 * TourRepo
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TourRepo extends EntityRepository
{

    public function dateSorted()
    {

        return $this->findBy(array(),array('date'=>'ASC'));

    }

}
