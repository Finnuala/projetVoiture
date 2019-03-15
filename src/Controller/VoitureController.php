<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 10/02/2019
 * Time: 17:09
 */

namespace App\Controller;

use App\Entity\Equipement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use App\Entity\Voiture;
use App\Entity\Typecarburant;

class VoitureController extends AbstractController
{
    //Function to find the car with it Id
    public function findByIdCar($numSerie){
        /*$sql = "
        SELECT *
          FROM voitures_view
          WHERE num_serie = 123456789
    ";

        $em = $this->getDoctrine()->getManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();*/

        $repository = $this->getDoctrine()->getRepository(Voiture::class);

        $voiture = $repository->findOneBy([
            'numSerie' => $numSerie
        ]);

        return $voiture;
    }

    //Function to find the car with id IdTypeCarburant
    public function findByIdTypeCarburantForCar($idTypeCarburant){
        $repository = $this->getDoctrine()->getRepository(Typecarburant::class);

        $typeCarburant = $repository->findOneBy([
            'idTypeCarburant' => $idTypeCarburant,
        ]);

        return $typeCarburant;
    }

    public function findByIdEquipementForCar($idEquipement){
        $repository = $this->getDoctrine()->getRepository(Equipement::class);

        $equipement = $repository->findOneBy([
            'idTypeCarburant' => $idEquipement,
        ]);

        return $equipement;
    }

    /**
     * Matches /product exactly
     * @Route("/product", name="show_produit")
     */
    public function show()
    {
        $voiture = $this->findByIdCar('123456789');
        $typeCarburant = $this->findByIdTypeCarburantForCar($voiture->getIdTypeCarburant());

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
                'Consommation_Au_Cent' => $voiture->getConsommationAuCent(),
                'Emission' => $voiture->getEmission(),
                'Controle_Technique' => $voiture->getControleTechnique(),
                'Suivi_Entretien' => $voiture->getSuiviEntretien(),
                'Carburant' => $typeCarburant->getLibelle(),
            ]);
    }
}