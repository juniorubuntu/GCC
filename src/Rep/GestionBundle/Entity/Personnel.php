<?php

/**
 * Description of Personnel
 * @author atbr
 */

namespace Rep\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity;
 */
class Personnel {

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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $numTel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    private $dateRecru;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $refDecision;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Personnel
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Personnel
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set matricule
     *
     * @param string $matricule
     * @return Personnel
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    
        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set numTel
     *
     * @param string $numTel
     * @return Personnel
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    
        return $this;
    }

    /**
     * Get numTel
     *
     * @return string 
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Personnel
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set dateRecru
     *
     * @param \DateTime $dateRecru
     * @return Personnel
     */
    public function setDateRecru($dateRecru)
    {
        $this->dateRecru = $dateRecru;
    
        return $this;
    }

    /**
     * Get dateRecru
     *
     * @return \DateTime 
     */
    public function getDateRecru()
    {
        return $this->dateRecru;
    }

    /**
     * Set refDecision
     *
     * @param string $refDecision
     * @return Personnel
     */
    public function setRefDecision($refDecision)
    {
        $this->refDecision = $refDecision;
    
        return $this;
    }

    /**
     * Get refDecision
     *
     * @return string 
     */
    public function getRefDecision()
    {
        return $this->refDecision;
    }
}