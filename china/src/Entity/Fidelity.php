<?php

namespace App\Entity;

use App\Repository\FidelityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FidelityRepository::class)
 */
class Fidelity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreReservation;

    /**
     * @ORM\OneToOne(targetEntity=Booking::class, inversedBy="fidelity", cascade={"persist", "remove"})
     */
    private $booking;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreReservation(): ?int
    {
        return $this->nombreReservation;
    }

    public function setNombreReservation(int $nombreReservation): self
    {
        $this->nombreReservation = $nombreReservation;

        return $this;
    }

    public function getBooking(): ?Booking
    {
        return $this->booking;
    }

    public function setBooking(?Booking $booking): self
    {
        $this->booking = $booking;

        return $this;
    }
}
