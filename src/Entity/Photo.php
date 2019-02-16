<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo", indexes={@ORM\Index(name="num_serie_2", columns={"num_serie"}), @ORM\Index(name="num_serie", columns={"num_serie"})})
 * @ORM\Entity
 */
class Photo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_photo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPhoto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lien_photo", type="string", length=255, nullable=true)
     */
    private $lienPhoto;

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
