<?php

/**
 * Description of Categorie
 *
 * @author atbr
 */

namespace Rep\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity;
 */
class Categorie {

    function __construct() {
        
    }

    public function __toString() {
        return $this->getNomCategorie();
    }

    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nomCategorie;

    /**
     * @ORM\Column(type="bigint")
     * @Assert\NotBlank()
     */
    private $quota;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nomCategorie
     *
     * @param string $nomCategorie
     * @return Categorie
     */
    public function setNomCategorie($nomCategorie) {
        $this->nomCategorie = $nomCategorie;

        return $this;
    }

    /**
     * Get nomCategorie
     *
     * @return string 
     */
    public function getNomCategorie() {
        return $this->nomCategorie;
    }

    /**
     * Set quota
     *
     * @param integer $quota
     * @return Categorie
     */
    public function setQuota($quota) {
        $this->quota = $quota;

        return $this;
    }

    /**
     * Get quota
     *
     * @return integer 
     */
    public function getQuota() {
        return $this->quota;
    }

}