<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Societe
 *
 * @ORM\Table(name="societe")
 * @ORM\Entity
 */
class Societe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_societe", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSociete;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="dirigeant", type="string", length=20, nullable=false)
     */
    private $dirigeant;

    /**
     * @var string
     *
     * @ORM\Column(name="code_commerce", type="string", length=30, nullable=false)
     */
    private $codeCommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="code_tva", type="string", length=30, nullable=false)
     */
    private $codeTva;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=15, nullable=false)
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
     * @ORM\Column(name="site_web", type="string", length=20, nullable=false)
     */
    private $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=20, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="igit", type="text", length=65535, nullable=false)
     */
    private $igit;



    /**
     * Get idSociete
     *
     * @return integer
     */
    public function getIdSociete()
    {
        return $this->idSociete;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Societe
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
     * Set dirigeant
     *
     * @param string $dirigeant
     *
     * @return Societe
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
     * Set codeCommerce
     *
     * @param string $codeCommerce
     *
     * @return Societe
     */
    public function setCodeCommerce($codeCommerce)
    {
        $this->codeCommerce = $codeCommerce;

        return $this;
    }

    /**
     * Get codeCommerce
     *
     * @return string
     */
    public function getCodeCommerce()
    {
        return $this->codeCommerce;
    }

    /**
     * Set codeTva
     *
     * @param string $codeTva
     *
     * @return Societe
     */
    public function setCodeTva($codeTva)
    {
        $this->codeTva = $codeTva;

        return $this;
    }

    /**
     * Get codeTva
     *
     * @return string
     */
    public function getCodeTva()
    {
        return $this->codeTva;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Societe
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
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
     * @return Societe
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
     * @return Societe
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
     * @return Societe
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
     * @return Societe
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
     * @return Societe
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
     * Set logo
     *
     * @param string $logo
     *
     * @return Societe
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set igit
     *
     * @param string $igit
     *
     * @return Societe
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
