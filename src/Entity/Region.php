<?php

namespace App\Entity;

use App\Repository\RegionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RegionRepository::class)]
class Region
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'text')]
    private $border;

    #[ORM\Column(type: 'string', length: 100)]
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBorder(): ?string
    {
        return $this->border;
    }

    public function setBorder(string $border): self
    {
        $this->border = $border;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
