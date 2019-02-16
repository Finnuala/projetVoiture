<?php

namespace App\Entity;

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
     * @return int
     */
    public function getIdTypeCarburant(): int
    {
        return $this->idTypeCarburant;
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



}
