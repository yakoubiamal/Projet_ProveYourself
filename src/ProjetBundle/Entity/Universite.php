<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Universite
 *
 * @ORM\Table(name="universite")
 * @ORM\Entity
 */
class Universite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_universite", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUniversite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=20, nullable=false)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="dirigeant", type="string", length=20, nullable=false)
     */
    private $dirigeant;

    /**
     * @var integer
     *
     * @ORM\Column(name="adresse", type="integer", nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel", type="string", length=15, nullable=false)
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="num_portable", type="string", length=15, nullable=false)
     */
    private $numPortable;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=20, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="site_web", type="string", length=30, nullable=false)
     */
    private $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="igit", type="text", length=65535, nullable=false)
     */
    private $igit;



    /**
     * Get idUniversite
     *
     * @return integer
     */
    public function getIdUniversite()
    {
        return $this->idUniversite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Universite
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
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Universite
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set dirigeant
     *
     * @param string $dirigeant
     *
     * @return Universite
     */
    public function setDirigeant($dirigeant)
    {
        $this->dirigeant = $dirigeant;

        return $this;
    }

    /**
     * Get dirigeant
     *
     * @return string
     */
    public function getDirigeant()
    {
        return $this->dirigeant;
    }

    /**
     * Set adresse
     *
     * @param integer $adresse
     *
     * @return Universite
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return integer
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set numTel
     *
     * @param string $numTel
     *
     * @return Universite
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
     * Set numPortable
     *
     * @param string $numPortable
     *
     * @return Universite
     */
    public function setNumPortable($numPortable)
    {
        $this->numPortable = $numPortable;

        return $this;
    }

    /**
     * Get numPortable
     *
     * @return string
     */
    public function getNumPortable()
    {
        return $this->numPortable;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Universite
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Universite
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
     * Set siteWeb
     *
     * @param string $siteWeb
     *
     * @return Universite
     */
    public function setSiteWeb($siteWeb)
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return string
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * Set igit
     *
     * @param string $igit
     *
     * @return Universite
     */
    public function setIgit($igit)
    {
        $this->igit = $igit;

        return $this;
    }

    /**
     * Get igit
     *
     * @return string
     */
    public function getIgit()
    {
        return $this->igit;
    }
}
