<?php
namespace AppBundle\Entity;
use Doctrine\ORM\EntityRepository;


class VideoRepo extends EntityRepository
{
    public function VideoLeftJoin($videoID)
    {
        $query=$this->getEntityManager()
            ->createQuery(
                'SELECT v,a FROM AppBundle:Video v
                JOIN v.album a
                where v.album =:id'
            )->setParameter('id',$videoID);
        return $query->getResult();
    }
    /*
     * Query Join for video and album
     *
    SELECT alben.alben_id,alben.name,alben.release
    FROM alben
    INNER JOIN video
    ON alben.alben_id=video.album*/
}