<?php

/**
 * Description of Compte
 *
 * @author atbr
 */

namespace Rep\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity;
 */
class Compte {

    
    function __construct() {
        
    }
    
    public function __toString() {
        return $this->getLogin();
    }

    
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Personnel")
     * @Assert\NotBlank()
     */
    private $personnel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $motPasse;


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
     * Set login
     *
     * @param string $login
     * @return Compte
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set motPasse
     *
     * @param string $motPasse
     * @return Compte
     */
    public function setMotPasse($motPasse)
    {
        $this->motPasse = $motPasse;
    
        return $this;
    }

    /**
     * Get motPasse
     *
     * @return string 
     */
    public function getMotPasse()
    {
        return $this->motPasse;
    }

    /**
     * Set personnel
     *
     * @param \Rep\GestionBundle\Entity\Personnel $personnel
     * @return Compte
     */
    public function setPersonnel(\Rep\GestionBundle\Entity\Personnel $personnel = null)
    {
        $this->personnel = $personnel;
    
        return $this;
    }

    /**
     * Get personnel
     *
     * @return \Rep\GestionBundle\Entity\Personnel 
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }
}