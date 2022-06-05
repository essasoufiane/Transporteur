<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $depart;

    #[ORM\Column(type: 'string', length: 255)]
    private $destination;

    #[ORM\Column(type: 'datetime')]
    private $date_reservation;

    #[ORM\Column(type: 'datetime')]
    private $date_creation;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'orders')]
    private $user_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepart(): ?string
    {
        return $this->depart;
    }

    public function setDepart(string $depart): self
    {
        $this->depart = $depart;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->date_reservation;
    }

    public function setDateReservation(\DateTimeInterface $date_reservation): self
    {
        $this->date_reservation = $date_reservation;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getUserId(): ?user
    {
        return $this->user_id;
    }


    public function setUserId(?user $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}


/*
    /**
 *
 * @ORM\Column(name="data", type="array")
 */
