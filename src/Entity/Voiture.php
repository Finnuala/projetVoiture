<?php



use Doctrine\ORM\Mapping as ORM;

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
     * @var string|null
     *
     * @ORM\Column(name="immatriculation", type="string", length=9, nullable=true)
     */
    private $immatriculation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kilometrage", type="string", length=9, nullable=true)
     */
    private $kilometrage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_mec", type="date", nullable=true)
     */
    private $dateMec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="garantie", type="integer", nullable=true)
     */
    private $garantie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="prix", type="integer", nullable=true)
     */
    private $prix;

    /**
     * @var int|null
     *
     * @ORM\Column(name="puissance_fiscale", type="integer", nullable=true)
     */
    private $puissanceFiscale;

    /**
     * @var int|null
     *
     * @ORM\Column(name="puissance_reelle", type="integer", nullable=true)
     */
    private $puissanceReelle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="concommation_au_cent", type="integer", nullable=true)
     */
    private $concommationAuCent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="emission", type="integer", nullable=true)
     */
    private $emission;

    /**
     * @var string|null
     *
     * @ORM\Column(name="controle_technique", type="string", length=255, nullable=true)
     */
    private $controleTechnique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="suivi_entretien", type="string", length=255, nullable=true)
     */
    private $suiviEntretien;

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
     * @var \Marque
     *
     * @ORM\ManyToOne(targetEntity="Marque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_marque", referencedColumnName="id_marque")
     * })
     */
    private $idMarque;

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
     * Constructor
     */
    public function __construct()
    {
        $this->idEquipement = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
