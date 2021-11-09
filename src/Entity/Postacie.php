<?php

namespace App\Entity;

use App\Repository\PostacieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostacieRepository::class)
 */
class Postacie
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
    private $name;

    /**
     * @ORM\Column(type="string", length=999)
     */
    private $dziela;

    /**
     * @ORM\ManyToOne(targetEntity=Epoki::class, inversedBy="postacies")
     * @ORM\JoinColumn(nullable=false)
     */
    private $epoka;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDziela(): ?string
    {
        return $this->dziela;
    }

    public function setDziela(string $dziela): self
    {
        $this->dziela = $dziela;

        return $this;
    }

    public function getEpoka(): ?Epoki
    {
        return $this->epoka;
    }

    public function setEpoka(?Epoki $epoka): self
    {
        $this->epoka = $epoka;

        return $this;
    }
}
