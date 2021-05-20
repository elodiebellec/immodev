<?php

namespace App\Entity;

use App\Repository\ImmodevRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImmodevRepository::class)
 */
class Immodev
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $area;

    /**
     * @ORM\Column(type="integer")
     */
    private $rooms_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $housing_type;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $adress;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $post_code;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $city;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_pool;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_exterior;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $exterior_surface;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_garage;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $transaction;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publication_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getArea(): ?int
    {
        return $this->area;
    }

    public function setArea(int $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getRoomsNumber(): ?int
    {
        return $this->rooms_number;
    }

    public function setRoomsNumber(int $rooms_number): self
    {
        $this->rooms_number = $rooms_number;

        return $this;
    }

    public function getHousingType(): ?string
    {
        return $this->housing_type;
    }

    public function setHousingType(string $housing_type): self
    {
        $this->housing_type = $housing_type;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getPostCode(): ?int
    {
        return $this->post_code;
    }

    public function setPostCode(?int $post_code): self
    {
        $this->post_code = $post_code;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getIsPool(): ?bool
    {
        return $this->is_pool;
    }

    public function setIsPool(bool $is_pool): self
    {
        $this->is_pool = $is_pool;

        return $this;
    }

    public function getIsExterior(): ?bool
    {
        return $this->is_exterior;
    }

    public function setIsExterior(bool $is_exterior): self
    {
        $this->is_exterior = $is_exterior;

        return $this;
    }

    public function getExteriorSurface(): ?int
    {
        return $this->exterior_surface;
    }

    public function setExteriorSurface(?int $exterior_surface): self
    {
        $this->exterior_surface = $exterior_surface;

        return $this;
    }

    public function getIsGarage(): ?bool
    {
        return $this->is_garage;
    }

    public function setIsGarage(bool $is_garage): self
    {
        $this->is_garage = $is_garage;

        return $this;
    }

    public function getTransaction(): ?string
    {
        return $this->transaction;
    }

    public function setTransaction(string $transaction): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publication_date;
    }

    public function setPublicationDate(\DateTimeInterface $publication_date): self
    {
        $this->publication_date = $publication_date;

        return $this;
    }
}
