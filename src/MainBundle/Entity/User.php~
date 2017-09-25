<?php

namespace MainBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
/**
 * User
 */
class User extends BaseUSer
{

    /**
     * @var \MainBundle\Entity\Joueurs
     */
    private $joueur;


    /**
     * Set joueur
     *
     * @param \MainBundle\Entity\Joueurs $joueur
     *
     * @return User
     */
    public function setJoueur(\MainBundle\Entity\Joueurs $joueur = null)
    {
        $this->joueur = $joueur;

        return $this;
    }

    /**
     * Get joueur
     *
     * @return \MainBundle\Entity\Joueurs
     */
    public function getJoueur()
    {
        return $this->joueur;
    }
}
