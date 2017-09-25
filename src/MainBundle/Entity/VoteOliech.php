<?php

namespace MainBundle\Entity;

/**
 * VoteOliech
 */
class VoteOliech
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $booleen;

    /**
     * @var int
     */
    private $nb;


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
     * Set booleen
     *
     * @param string $booleen
     *
     * @return VoteOliech
     */
    public function setBooleen($booleen)
    {
        $this->booleen = $booleen;

        return $this;
    }

    /**
     * Get booleen
     *
     * @return string
     */
    public function getBooleen()
    {
        return $this->booleen;
    }

    /**
     * Set nb
     *
     * @param integer $nb
     *
     * @return VoteOliech
     */
    public function setNb($nb)
    {
        $this->nb = $nb;

        return $this;
    }

    /**
     * Get nb
     *
     * @return int
     */
    public function getNb()
    {
        return $this->nb;
    }
}
