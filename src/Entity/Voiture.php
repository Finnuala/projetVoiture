<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Typecarburant;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture", indexes={@ORM\Index(name="id_marque", columns={"id_marque"}), @ORM\Index(name="id_type_carburant", columns={"id_type_carburant"}), @ORM\Index(name="id_type_voiture", columns={"id_type_voiture"})})
 * @ORM\Entity
 */
class Voiture
{
    /**
     * @var int
     *
     * @ORM\Column(name="num_serie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numSerie;

    /**
     * @return int
     */
    public function getNumSerie(): int
    {
        return $this->numSerie;
    }

    /**
     * @param int $numSerie
     */
    public function setNumSerie(int $numSerie): void
    {
        $this->numSerie = $numSerie;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="immatriculation", type="string", length=9, nullable=true)
     */
    private $immatriculation;

    /**
     * @return string|null
     */
    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    /**
     * @param string|null $immatriculation
     */
    public function setImmatriculation(?string $immatriculation): void
    {
        $this->immatriculation = $immatriculation;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="kilometrage", type="string", length=9, nullable=true)
     */
    private $kilometrage;

    /**
     * @return string|null
     */
    public function getKilometrage(): ?string
    {
        return $this->kilometrage;
    }

    /**
     * @param string|null $kilometrage
     */
    public function setKilometrage(?string $kilometrage): void
    {
        $this->kilometrage = $kilometrage;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @return string|null
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * @param string|null $libelle
     */
    public function setLibelle(?string $libelle): void
    {
        $this->libelle = $libelle;
    }

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_mec", type="date", nullable=true)
     */
    private $dateMec;

    /**
     * @return \DateTime|null
     */
    public function getDateMec(): ?\DateTime
    {
        return $this->dateMec;
    }

    /**
     * @param \DateTime|null $dateMec
     */
    public function setDateMec(?\DateTime $dateMec): void
    {
        $this->dateMec = $dateMec;
    }

    /**
     * @var int|null
     *
     * @ORM\Column(name="garantie", type="integer", nullable=true)
     */
    private $garantie;

    /**
     * @return int|null
     */
    public function getGarantie(): ?int
    {
        return $this->garantie;
    }

    /**
     * @param int|null $garantie
     */
    public function setGarantie(?int $garantie): void
    {
        $this->garantie = $garantie;
    }

    /**
     * @var int|null
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @return int|null
     */
    public function getPrix(): ?int
    {
        return $this->prix;
    }

    /**
     * @param int|null $prix
     */
    public function setPrix(?int $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @var int|null
     *
     * @ORM\Column(name="puissance_fiscale", type="integer", nullable=true)
     */
    private $puissanceFiscale;

    /**
     * @return int|null
     */
    public function getPuissanceFiscale(): ?int
    {
        return $this->puissanceFiscale;
    }

    /**
     * @param int|null $puissanceFiscale
     */
    public function setPuissanceFiscale(?int $puissanceFiscale): void
    {
        $this->puissanceFiscale = $puissanceFiscale;
    }

    /**
     * @var int|null
     *
     * @ORM\Column(name="puissance_reelle", type="integer", nullable=true)
     */
    private $puissanceReelle;

    /**
     * @return int|null
     */
    public function getPuissanceReelle(): ?int
    {
        return $this->puissanceReelle;
    }

    /**
     * @param int|null $puissanceReelle
     */
    public function setPuissanceReelle(?int $puissanceReelle): void
    {
        $this->puissanceReelle = $puissanceReelle;
    }

    /**
     * @var int|null
     *
     * @ORM\Column(name="concommation_au_cent", type="integer", nullable=true)
     */
    private $concommationAuCent;

    /**
     * @return int|null
     */
    public function getConcommationAuCent(): ?int
    {
        return $this->concommationAuCent;
    }

    /**
     * @param int|null $concommationAuCent
     */
    public function setConcommationAuCent(?int $concommationAuCent): void
    {
        $this->concommationAuCent = $concommationAuCent;
    }

    /**
     * @var int|null
     *
     * @ORM\Column(name="emission", type="integer", nullable=true)
     */
    private $emission;

    /**
     * @return int|null
     */
    public function getEmission(): ?int
    {
        return $this->emission;
    }

    /**
     * @param int|null $emission
     */
    public function setEmission(?int $emission): void
    {
        $this->emission = $emission;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="controle_technique", type="string", length=255, nullable=true)
     */
    private $controleTechnique;

    /**
     * @return string|null
     */
    public function getControleTechnique(): ?string
    {
        return $this->controleTechnique;
    }

    /**
     * @param string|null $controleTechnique
     */
    public function setControleTechnique(?string $controleTechnique): void
    {
        $this->controleTechnique = $controleTechnique;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="suivi_entretien", type="string", length=255, nullable=true)
     */
    private $suiviEntretien;

    /**
     * @return string|null
     */
    public function getSuiviEntretien(): ?string
    {
        return $this->suiviEntretien;
    }

    /**
     * @param string|null $suiviEntretien
     */
    public function setSuiviEntretien(?string $suiviEntretien): void
    {
        $this->suiviEntretien = $suiviEntretien;
    }

    /**
     * @var \Typevoiture
     *
     * @ORM\ManyToOne(targetEntity="Typevoiture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_voiture", referencedColumnName="id_type_voiture")
     * })
     */
    private $idTypeVoiture;

    /**
     * @return \Typevoiture
     */
    public function getIdTypeVoiture(): \Typevoiture
    {
        return $this->idTypeVoiture;
    }

    /**
     * @param \Typevoiture $idTypeVoiture
     */
    public function setIdTypeVoiture(\Typevoiture $idTypeVoiture): void
    {
        $this->idTypeVoiture = $idTypeVoiture;
    }

    /**
     * @var \Marque
     *
     * @ORM\ManyToOne(targetEntity="Marque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_marque", referencedColumnName="id_marque")
     * })
     */
    private $idMarque;

    /**
     * @return \Marque
     */
    public function getIdMarque(): \Marque
    {
        return $this->idMarque;
    }

    /**
     * @param \Marque $idMarque
     */
    public function setIdMarque(\Marque $idMarque): void
    {
        $this->idMarque = $idMarque;
    }

    /**
     * @var \Typecarburant
     *
     * @ORM\ManyToOne(targetEntity="Typecarburant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_carburant", referencedColumnName="id_type_carburant")
     * })
     */
    private $idTypeCarburant;

    /**
     * @return \Typecarburant
     */
    public function getIdTypeCarburant(): \Typecarburant
    {
        return $this->idTypeCarburant;
    }

    /**
     * @param \Typecarburant $idTypeCarburant
     */
    public function setIdTypeCarburant(\Typecarburant $idTypeCarburant): void
    {
        $this->idTypeCarburant = $idTypeCarburant;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Equipement", inversedBy="numSerie")
     * @ORM\JoinTable(name="equipementvoiture",
     *   joinColumns={
     *     @ORM\JoinColumn(name="num_serie", referencedColumnName="num_serie")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_equipement", referencedColumnName="id_equipement")
     *   }
     * )
     */
    private $idEquipement;

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdEquipement(): \Doctrine\Common\Collections\Collection
    {
        return $this->idEquipement;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idEquipement
     */
    public function setIdEquipement(\Doctrine\Common\Collections\Collection $idEquipement): void
    {
        $this->idEquipement = $idEquipement;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEquipement = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
