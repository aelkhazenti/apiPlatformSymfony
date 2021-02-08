<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\EntrainementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrainementRepository::class)
 * @ApiResource(
 *  itemOperations={
 *"get",
 *"put",
 *"delete",
 *"patch", 
 *     "getentrainement"={
 *         "method"="GET",
 *         "path"="/user/{id}/getentrainement",
 *         "controller"=App\Controller\getEntrainementToUser::class
 *     }
 * })
 */
class Entrainement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDeb;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\Column(type="time")
     */
    private $heurDeb;

    /**
     * @ORM\Column(type="time")
     */
    private $heurFin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeEnt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $IDuser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->dateDeb;
    }

    public function setDateDeb(\DateTimeInterface $dateDeb): self
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getHeurDeb(): ?\DateTimeInterface
    {
        return $this->heurDeb;
    }

    public function setHeurDeb(\DateTimeInterface $heurDeb): self
    {
        $this->heurDeb = $heurDeb;

        return $this;
    }

    public function getHeurFin(): ?\DateTimeInterface
    {
        return $this->heurFin;
    }

    public function setHeurFin(\DateTimeInterface $heurFin): self
    {
        $this->heurFin = $heurFin;

        return $this;
    }

    public function getTypeEnt(): ?string
    {
        return $this->typeEnt;
    }

    public function setTypeEnt(string $typeEnt): self
    {
        $this->typeEnt = $typeEnt;

        return $this;
    }

    public function getIDuser(): ?User
    {
        return $this->IDuser;
    }

    public function setIDuser(?User $IDuser): self
    {
        $this->IDuser = $IDuser;

        return $this;
    }
}
