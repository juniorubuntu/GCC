<?php

/**
 * Description of Poste
 *
 * @author atbr
 */

namespace Rep\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity;
 */
class Poste {

    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @Assert\NotBlank()
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="Direction")
     * @Assert\NotBlank()
     */
    private $direction;

    /**
     * @ORM\ManyToOne(targetEntity="Personnel")
     * @Assert\NotBlank()
     */
    private $occupant;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nomPoste;

    /**
     * @ORM\Column(type="string", length=500)
     * @Assert\NotBlank()
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
     * Set nomPoste
     *
     * @param string $nomPoste
     * @return Poste
     */
    public function setNomPoste($nomPoste) {
        $this->nomPoste = $nomPoste;

        return $this;
    }

    /**
     * Get nomPoste
     *
     * @return string 
     */
    public function getNomPoste() {
        return $this->nomPoste;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return Poste
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
     * Set categorie
     *
     * @param \Rep\GestionBundle\Entity\Categorie $categorie
     * @return Poste
     */
    public function setCategorie(\Rep\GestionBundle\Entity\Categorie $categorie = null) {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Rep\GestionBundle\Entity\Categorie 
     */
    public function getCategorie() {
        return $this->categorie;
    }

    /**
     * Set direction
     *
     * @param \Rep\GestionBundle\Entity\Direction $direction
     * @return Poste
     */
    public function setDirection(\Rep\GestionBundle\Entity\Direction $direction = null) {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return \Rep\GestionBundle\Entity\Direction 
     */
    public function getDirection() {
        return $this->direction;
    }


    /**
     * Set occupant
     *
     * @param \Rep\GestionBundle\Entity\Personnel $occupant
     * @return Poste
     */
    public function setOccupant(\Rep\GestionBundle\Entity\Personnel $occupant = null)
    {
        $this->occupant = $occupant;
    
        return $this;
    }

    /**
     * Get occupant
     *
     * @return \Rep\GestionBundle\Entity\Personnel 
     */
    public function getOccupant()
    {
        return $this->occupant;
    }
}