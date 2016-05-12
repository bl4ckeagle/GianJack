<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 12.05.2016
 * Time: 13:44
 */


namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;


class Task
{

    /**
     * @Assert\NotBlank()
     *
     */
    protected $task;

    /**
     * @var
     * @Assert\NotBlank
     * @Assert\Type("\DateTime")
     */
    protected $dueDate;

    /**
     * @return mixed
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * @param mixed $task
     */
    public function setTask($task)
    {
        $this->task = $task;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param mixed $dueDate
     */
    public function setDueDate(\DateTime $dueDate=null)
    {
        $this->dueDate = $dueDate;
    }



}