<?php

namespace Proxies\__CG__\Rep\GestionBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Poste extends \Rep\GestionBundle\Entity\Poste implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNomPoste($nomPoste)
    {
        $this->__load();
        return parent::setNomPoste($nomPoste);
    }

    public function getNomPoste()
    {
        $this->__load();
        return parent::getNomPoste();
    }

    public function setObservation($observation)
    {
        $this->__load();
        return parent::setObservation($observation);
    }

    public function getObservation()
    {
        $this->__load();
        return parent::getObservation();
    }

    public function setCategorie(\Rep\GestionBundle\Entity\Categorie $categorie = NULL)
    {
        $this->__load();
        return parent::setCategorie($categorie);
    }

    public function getCategorie()
    {
        $this->__load();
        return parent::getCategorie();
    }

    public function setDirection(\Rep\GestionBundle\Entity\Direction $direction = NULL)
    {
        $this->__load();
        return parent::setDirection($direction);
    }

    public function getDirection()
    {
        $this->__load();
        return parent::getDirection();
    }

    public function setOccupant(\Rep\GestionBundle\Entity\Personnel $occupant = NULL)
    {
        $this->__load();
        return parent::setOccupant($occupant);
    }

    public function getOccupant()
    {
        $this->__load();
        return parent::getOccupant();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nomPoste', 'observation', 'categorie', 'direction', 'occupant');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}