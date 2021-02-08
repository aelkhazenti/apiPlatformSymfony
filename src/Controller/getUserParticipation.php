<?php

namespace App\Controller;

use App\Entity\UserParticipation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


class getUserParticipation 
{
    public $entrai;

    public function __construct(EntityManagerInterface $ent)
    {
        $this->entrai = $ent;
    }

    public function __invoke( Request $request)
    {
        $userID = $request->attributes->get('id');
            
        return $this->entrai->getRepository(UserParticipation::class)
        ->getParticipation($userID);

    }


}