<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_client", type="string", length=255, nullable=true)
     */
    private $nomClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom_client", type="string", length=255, nullable=true)
     */
    private $prenomClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_client", type="string", length=255, nullable=true)
     */
    private $emailClient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone_client", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $telephoneClient;


}
