<?php
// src/DS/IntenauteBundle/Entity/Reference.php

namespace DS\InternauteBundle\Entity;

//use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="DS\InternauteBundle\Entity\ReferenceRepository")
 */
class Reference
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\Column (name="adresse", type="string", length=50)
     */
    private $adresse;

    /**
     * @ORM\Column(name="logo", type="string", length=50)
     */
    private $logo;

    /**
     * @ORM\Column(name="ordre", type="smallint")
     */
    private $ordre;

    /**
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif;

    /**
     * @Gedmo\Slug(fields={"titre"})
     * @ORM\Column(length=128, unique=true)
     */
    //private $slug;


    // les accesseurs
    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
    * @return smallint
    */
    public function getOrdre()
    {
    	return $this->ordre;
    }

    /** 
    * @return smallint
    */
    public function getCategorie()
    {
    	return $this->categorie;
    }

    /** 
    * @return boolean
    */
    public function getActif()
    {
    	return $this->actif;
    }

    /**
    * @param integer $id
    * @return Reference
    */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /** @param string $titre
     * @return Refence
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    /** @param text $description
     * @return Reference
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /** @param string $adresse
     * @return Reference
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    /** @param string $logo
     * @return Reference
     */

    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /** @param smallint $ordre
     * @return Reference
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
        return $this;
    }

    /** @param smallint $actif
     *  @return Reference
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
        return $this;
    }

}