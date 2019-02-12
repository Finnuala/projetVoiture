<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 10/02/2019
 * Time: 17:09
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoitureController extends AbstractController
{
    private $_num_serie;
    private $_immatriculation;
    private $_kilometrage;
    private $_libelle;
    private $_date_mec;
    private $_garantie;
    private $_prix;
    private $_puissance_fiscale;
    private $_puissance_reelle;
    private $_consommation_au_cent;
    private $_emission;
    private $_controle_technique;
    private $_suivi_entretien = NULL;

    /**
     * @return mixed
     */
    public function getNumSerie()
    {
        return $this->_num_serie;
    }

    /**
     * @param mixed $num_serie
     */
    public function setNumSerie($num_serie): void
    {
        $this->_num_serie = $num_serie;
    }

    /**
     * @return mixed
     */
    public function getImmatriculation()
    {
        return $this->_immatriculation;
    }

    /**
     * @param mixed $immatriculation
     */
    public function setImmatriculation($immatriculation): void
    {
        $this->_immatriculation = $immatriculation;
    }

    /**
     * @return mixed
     */
    public function getKilometrage()
    {
        return $this->_kilometrage;
    }

    /**
     * @param mixed $kilometrage
     */
    public function setKilometrage($kilometrage): void
    {
        $this->_kilometrage = $kilometrage;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->_libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle): void
    {
        $this->_libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getDateMec()
    {
        return $this->_date_mec;
    }

    /**
     * @param mixed $date_mec
     */
    public function setDateMec($date_mec): void
    {
        $this->_date_mec = $date_mec;
    }

    /**
     * @return mixed
     */
    public function getGarantie()
    {
        return $this->_garantie;
    }

    /**
     * @param mixed $garantie
     */
    public function setGarantie($garantie): void
    {
        $this->_garantie = $garantie;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->_prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->_prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getPuissanceFiscale()
    {
        return $this->_puissance_fiscale;
    }

    /**
     * @param mixed $puissance_fiscale
     */
    public function setPuissanceFiscale($puissance_fiscale): void
    {
        $this->_puissance_fiscale = $puissance_fiscale;
    }

    /**
     * @return mixed
     */
    public function getPuissanceReelle()
    {
        return $this->_puissance_reelle;
    }

    /**
     * @param mixed $puissance_reelle
     */
    public function setPuissanceReelle($puissance_reelle): void
    {
        $this->_puissance_reelle = $puissance_reelle;
    }

    /**
     * @return mixed
     */
    public function getConsommationAuCent()
    {
        return $this->_consommation_au_cent;
    }

    /**
     * @param mixed $consommation_au_cent
     */
    public function setConsommationAuCent($consommation_au_cent): void
    {
        $this->_consommation_au_cent = $consommation_au_cent;
    }

    /**
     * @return mixed
     */
    public function getEmission()
    {
        return $this->_emission;
    }

    /**
     * @param mixed $emission
     */
    public function setEmission($emission): void
    {
        $this->_emission = $emission;
    }

    /**
     * @return mixed
     */
    public function getControleTechnique()
    {
        return $this->_controle_technique;
    }

    /**
     * @param mixed $controle_technique
     */
    public function setControleTechnique($controle_technique): void
    {
        $this->_controle_technique = $controle_technique;
    }

    /**
     * @return mixed
     */
    public function getSuiviEntretien()
    {
        return $this->_suivi_entretien;
    }

    /**
     * @param mixed $suivi_entretien
     */
    public function setSuiviEntretien($suivi_entretien): void
    {
        $this->_suivi_entretien = $suivi_entretien;
    }

    /**
     * Matches /product exactly
     * @Route("/product", name="show_produit")
     */
    public function show()
    {
        $voiture = new VoitureController();
        $voiture->setConsommationAuCent(2.5);
        $voiture->setNumSerie("VHCR123GRKJLR45");
        $voiture->setPuissanceFiscale("7CV");
        $voiture->setPuissanceReelle("250CV");
        $voiture->setEmission("100g/km");
        $voiture->setImmatriculation("DB-209-AY");
        $voiture->setDateMec("23/12/2015");
        return $this->render(
            'ficheProduit.html.twig',
            [
                'ConsommationAuCent' => $voiture->getConsommationAuCent(),
                'NumSerie' => $voiture->getNumSerie(),
                'PuissanceFiscale' => $voiture->getPuissanceFiscale(),
                'PuissanceReelle' => $voiture->getPuissanceReelle(),
                'Emission' => $voiture->getEmission(),
                'Immatriculation' => $voiture->getImmatriculation(),
                'DateMec' => $voiture->getDateMec(),
            ]);
    }
}