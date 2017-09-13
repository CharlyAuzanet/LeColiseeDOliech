<?php

namespace MainBundle\Entity;

/**
 * Joueurs
 */
class Joueurs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var int
     */
    private $voix;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Joueurs
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set voix
     *
     * @param integer $voix
     *
     * @return Joueurs
     */
    public function setVoix($voix)
    {
        $this->voix = $voix;

        return $this;
    }

    /**
     * Get voix
     *
     * @return int
     */
    public function getVoix()
    {
        return $this->voix;
    }
}

