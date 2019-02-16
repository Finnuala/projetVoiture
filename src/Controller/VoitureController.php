<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 10/02/2019
 * Time: 17:09
 */

namespace App\Controller;

use MongoDB\BSON\Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use App\Entity\Voiture;
use App\Entity\Typecarburant;
use Doctrine\Common\Util\ClassUtils;

class VoitureController extends AbstractController
{

    public function findByCarburantTypeForCar(){
       $entityManager = $this->getDoctrine()->getManager();

       $query = $entityManager->createQuery('SELECT libelle FROM typecarburant WHERE id_type_carburant = (SELECT voiture.id_type_carburant FROM voiture WHERE num_serie = 123456789)');

       return $query->execute();
    }

    /**
     * Matches /product exactly
     * @Route("/product", name="show_produit")
     */
    public function show()
    {
        $repository = $this->getDoctrine()->getRepository(Voiture::class);

        $voiture = $repository->findOneBy(['kilometrage' => '105000']);

        $realClassName = Doctrine\Common\Util\ClassUtils::getRealClass($object);

        $carburant = $this->getDoctrine()->getRepository(Typecarburant::class)->findBy([
            'id_type_carburant' => ClassUtils::getRealClass($voiture->getIdTypeCarburant()),
        ]);



        return $this->render(
            'ficheProduit.html.twig',
            [
                'NumSerie' => $voiture->getNumSerie(),
                'Immatriculation' => $voiture->getImmatriculation(),
                'Kilometrage' => $voiture->getKilometrage(),
                'Libelle' => $voiture->getLibelle(),
                'Date_Mec' => $voiture->getDateMec(),
                'Garantie' => $voiture->getGarantie(),
                'Prix' => $voiture->getPrix(),
                'Puissance_Fiscale' => $voiture->getPuissanceFiscale(),
                'Puissance_Reelle' => $voiture->getPuissanceReelle(),
                'Consommation_Au_Cent' => $voiture->getConcommationAuCent(),
                'Emission' => $voiture->getEmission(),
                'Controle_Technique' => $voiture->getControleTechnique(),
                'Suivi_Entretien' => $voiture->getSuiviEntretien(),
                'Carburant' => $carburant->getLibelle(),
            ]);
    }
}