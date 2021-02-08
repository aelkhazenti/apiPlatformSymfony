<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserParticipationRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ORM\Entity(repositoryClass=UserParticipationRepository::class)
 * @ApiResource(
 *  itemOperations={
 *"get",
 *"put",
 *"delete",
 *"patch",
 *     "getparticipation"={
 *         "method"="GET",
 *         "path"="/user/{id}/getparticipation",
 *         "controller"=App\Controller\getUserParticipation::class
 *     }
 * })
 */
class UserParticipation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $IDuser;

    /**
     * @ORM\OneToOne(targetEntity=Entrainement::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $IDENT;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDuser(): ?User
    {
        return $this->IDuser;
    }

    public function setIDuser(User $IDuser): self
    {
        $this->IDuser = $IDuser;

        return $this;
    }

    public function getIDENT(): ?Entrainement
    {
        return $this->IDENT;
    }

    public function setIDENT(Entrainement $IDENT): self
    {
        $this->IDENT = $IDENT;

        return $this;
    }
}
