<?php

/**
 * Description of Direction
 *
 * @author atbr
 */

namespace Rep\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity;
 */
class Direction {

    function __construct() {
        
    }

    public function __toString() {
        return $this->getNomDir();
    }

    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Direction")
     * @Assert\NotBlank()
     */
    private $directionPere;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nomDir;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $observation;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nomDir
     *
     * @param string $nomDir
     * @return Direction
     */
    public function setNomDir($nomDir) {
        $this->nomDir = $nomDir;

        return $this;
    }

    /**
     * Get nomDir
     *
     * @return string 
     */
    public function getNomDir() {
        return $this->nomDir;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Direction
     */
    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return Direction
     */
    public function setObservation($observation) {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string 
     */
    public function getObservation() {
        return $this->observation;
    }

    /**
     * Set directionPere
     *
     * @param \Rep\GestionBundle\Entity\Direction $directionPere
     * @return Direction
     */
    public function setDirectionPere(\Rep\GestionBundle\Entity\Direction $directionPere = null) {
        $this->directionPere = $directionPere;

        return $this;
    }

    /**
     * Get directionPere
     *
     * @return \Rep\GestionBundle\Entity\Direction 
     */
    public function getDirectionPere() {
        return $this->directionPere;
    }

}
