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

    /**
     * @return int
     */
    public function getIdTypeCarburant(): int
    {
        return $this->idTypeCarburant;
    }

    /**
     * @param int $idTypeCarburant
     */
    public function setIdTypeCarburant(int $idTypeCarburant): void
    {
        $this->idTypeCarburant = $idTypeCarburant;
    }

    /**
     * @return null|string
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * @param null|string $libelle
     */
    public function setLibelle(?string $libelle): void
    {
        $this->libelle = $libelle;
    }

    


}
