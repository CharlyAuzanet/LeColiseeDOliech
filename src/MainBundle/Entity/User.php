<?php

namespace MainBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
/**
 * User
 */
class User extends BaseUSer
{
    /**
     * @var int
     */
    protected $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

