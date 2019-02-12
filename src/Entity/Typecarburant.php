<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Typecarburant
 *
 * @ORM\Table(name="typecarburant")
 * @ORM\Entity
 */
class Typecarburant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_type_carburant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeCarburant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;


}
