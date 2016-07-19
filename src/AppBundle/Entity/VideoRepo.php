<?php

namespace AppBundle\Entity;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Select;


class VideoRepo extends EntityRepository
{

    public function VideoLeftJoin($productId)
    {

        //query for video repo and loop in frontend

       $query=$this->getEntityManager()
           ->createQuery(
               'SELECT v,a FROM AppBundle:Video v
                JOIN v.album a
                where v.album =:id'
           )->setParameter('id',$productId);

        return $query->getResult();

    }





}


/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\VideoRepo")
 */

