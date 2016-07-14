<?php

/**
 * Description of Admin
 *
 * @author atbr
 */

namespace Rep\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity;
 */
class Admin extends \Rep\GestionBundle\Entity\Personnel {

    function __construct() {
        $this->setDateRecru(new \DateTime());
    }

    public function __toString() {
        return $this->getnom();
    }

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $codeSecret;

    /**
     * Set codeSecret
     *
     * @param string $codeSecret
     * @return Admin
     */
    public function setCodeSecret($codeSecret) {
        $this->codeSecret = $codeSecret;

        return $this;
    }

    /**
     * Get codeSecret
     *
     * @return string 
     */
    public function getCodeSecret() {
        return $this->codeSecret;
    }

}
