<?php


namespace App\Controller;

use App\Entity\Entrainement;
use App\Form\EntrainementType;
use App\Repository\EntrainementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\UserParticipation;
use App\Form\UserParticipationType;

/**
 * @Route("/entrainement")
 */

class newController extends AbstractController
{


    /**
     * @Route("/entrainementuo", name="entrainement_index", methods={"GET"})
     */
    public function index(EntrainementRepository $entrainementRepository): Response
    {
        $userid=$this->getUser();
        return $this->render('entrainement/index.html.twig', [
            'entrainements' => $entrainementRepository->getEntrainement($userid),
        ]);
    }

}