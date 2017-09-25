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
    /**
     * @var \MainBundle\Entity\VoteOliech
     */
    private $voteoliech;


    /**
     * Set voteoliech
     *
     * @param \MainBundle\Entity\VoteOliech $voteoliech
     *
     * @return User
     */
    public function setVoteoliech(\MainBundle\Entity\VoteOliech $voteoliech = null)
    {
        $this->voteoliech = $voteoliech;

        return $this;
    }

    /**
     * Get voteoliech
     *
     * @return \MainBundle\Entity\VoteOliech
     */
    public function getVoteoliech()
    {
        return $this->voteoliech;
    }
}
