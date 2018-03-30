<?php

namespace ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cv
 *
 * @ORM\Table(name="cv", indexes={@ORM\Index(name="id_etudiant", columns={"id_etudiant"})})
 * @ORM\Entity
 */
class Cv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cv", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCv;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=20, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="text", length=65535, nullable=false)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="competence", type="text", length=65535, nullable=false)
     */
    private $competence;

    /**
     * @var string
     *
     * @ORM\Column(name="formation", type="text", length=65535, nullable=false)
     */
    private $formation;

    /**
     * @var string
     *
     * @ORM\Column(name="blog", type="text", length=65535, nullable=false)
     */
    private $blog;

    /**
     * @var string
     *
     * @ORM\Column(name="interet", type="text", length=65535, nullable=false)
     */
    private $interet;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel", type="string", length=15, nullable=false)
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="reseau_social", type="text", length=65535, nullable=false)
     */
    private $reseauSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=20, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=20, nullable=false)
     */
    private $adresse;

    /**
     * @var \ProjetBundle\Entity\Etudiant
     *
     * @ORM\ManyToOne(targetEntity="ProjetBundle\Entity\Etudiant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etudiant", referencedColumnName="id_etudiant")
     * })
     */
    private $idEtudiant;



    /**
     * Get idCv
     *
     * @return integer
     */
    public function getIdCv()
    {
        return $this->idCv;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Cv
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Cv
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return Cv
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set competence
     *
     * @param string $competence
     *
     * @return Cv
     */
    public function setCompetence($competence)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence
     *
     * @return string
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * Set formation
     *
     * @param string $formation
     *
     * @return Cv
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return string
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set blog
     *
     * @param string $blog
     *
     * @return Cv
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * Get blog
     *
     * @return string
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * Set interet
     *
     * @param string $interet
     *
     * @return Cv
     */
    public function setInteret($interet)
    {
        $this->interet = $interet;

        return $this;
    }

    /**
     * Get interet
     *
     * @return string
     */
    public function getInteret()
    {
        return $this->interet;
    }

    /**
     * Set numTel
     *
     * @param string $numTel
     *
     * @return Cv
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
     * Set reseauSocial
     *
     * @param string $reseauSocial
     *
     * @return Cv
     */
    public function setReseauSocial($reseauSocial)
    {
        $this->reseauSocial = $reseauSocial;

        return $this;
    }

    /**
     * Get reseauSocial
     *
     * @return string
     */
    public function getReseauSocial()
    {
        return $this->reseauSocial;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cv
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Cv
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
     * Set idEtudiant
     *
     * @param \ProjetBundle\Entity\Etudiant $idEtudiant
     *
     * @return Cv
     */
    public function setIdEtudiant(\ProjetBundle\Entity\Etudiant $idEtudiant = null)
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }

    /**
     * Get idEtudiant
     *
     * @return \ProjetBundle\Entity\Etudiant
     */
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }
}
