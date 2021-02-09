<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Entrainement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class newEntrainementAndEmail 
{
    public $entrai;

    public function __construct(EntityManagerInterface $ent)
    {
        $this->entrai = $ent;
    }

    public function __invoke(Entrainement $data,Request $request,MailerInterface $mailer)
    {
        $this->entrai->persist($data);

        $this->entrai->flush();

        $userID = $request->attributes->get('id');

        $emails = $this->entrai->getRepository(User::class)
        ->getUsersEmail($userID);

        
        for ($i = 0;$i<sizeof($emails);$i++){
            foreach($emails[$i] as $result) {
                
                $em = (new Email())
                ->from("symtest957@gmail.com")
                ->to($result)
                ->subject("test mail")
                ->text('entrainement ')
                ->html('Nouveau entrainement est disponible :) ');
        
        
                $mailer->send($em);
            }
        }
        return $emails;

    }


}