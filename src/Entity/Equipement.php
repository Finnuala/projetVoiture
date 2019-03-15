<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity
 */
class Equipement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_equipement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Voiture", mappedBy="idEquipement")
     */
    private $numSerie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numSerie = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
