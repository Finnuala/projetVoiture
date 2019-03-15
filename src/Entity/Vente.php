<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vente
 *
 * @ORM\Table(name="vente", indexes={@ORM\Index(name="num_serie", columns={"num_serie"}), @ORM\Index(name="id_client", columns={"id_client"})})
 * @ORM\Entity
 */
class Vente
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVente;

    /**
     * @var int|null
     *
     * @ORM\Column(name="montant_vente", type="integer", nullable=true)
     */
    private $montantVente;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_vente", type="date", nullable=true)
     */
    private $dateVente;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
     * })
     */
    private $idClient;

    /**
     * @var \Voiture
     *
     * @ORM\ManyToOne(targetEntity="Voiture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_serie", referencedColumnName="num_serie")
     * })
     */
    private $numSerie;


}
