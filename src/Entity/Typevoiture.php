<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Typevoiture
 *
 * @ORM\Table(name="typevoiture")
 * @ORM\Entity
 */
class Typevoiture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_type_voiture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeVoiture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;


}
