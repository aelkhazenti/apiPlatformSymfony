<?php

namespace App\Controller;

use App\Entity\Entrainement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


class getEntrainementToUser 
{
    public $entrai;

    public function __construct(EntityManagerInterface $ent)
    {
        $this->entrai = $ent;
    }

    public function __invoke( Request $request)
    {
        $userID = $request->attributes->get('id');
            
        return $this->entrai->getRepository(Entrainement::class)
        ->getEntrainement($userID);

    }


}