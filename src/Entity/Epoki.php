<?php

namespace App\Entity;

use App\Repository\EpokiRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EpokiRepository::class)
 */
class Epoki
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
     * @ORM\Column(type="string", length=255)
     */
    private $ramy_czasowe;

    /**
     * @ORM\OneToMany(targetEntity=Postacie::class, mappedBy="epoka")
     */
    private $postacies;

    /**
     * @ORM\Column(type="string", length=999)
     */
    private $cechy;

    public function __construct()
    {
        $this->postacies = new ArrayCollection();
    }

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

    public function getRamyCzasowe(): ?string
    {
        return $this->ramy_czasowe;
    }

    public function setRamyCzasowe(string $ramy_czasowe): self
    {
        $this->ramy_czasowe = $ramy_czasowe;

        return $this;
    }

    /**
     * @return Collection|Postacie[]
     */
    public function getPostacies(): Collection
    {
        return $this->postacies;
    }

    public function addPostacy(Postacie $postacy): self
    {
        if (!$this->postacies->contains($postacy)) {
            $this->postacies[] = $postacy;
            $postacy->setEpoka($this);
        }

        return $this;
    }

    public function removePostacy(Postacie $postacy): self
    {
        if ($this->postacies->removeElement($postacy)) {
            // set the owning side to null (unless already changed)
            if ($postacy->getEpoka() === $this) {
                $postacy->setEpoka(null);
            }
        }

        return $this;
    }

    public function getCechy(): ?string
    {
        return $this->cechy;
    }

    public function setCechy(string $cechy): self
    {
        $this->cechy = $cechy;

        return $this;
    }

    public function toArray()
    {
        $postacie = [];
        foreach ($this->postacies as $postac) {
            $postacie[] = [
            'id' => $postac->getId(),
            'name' => $postac->getName(),
            'dziela' => $postac->getDziela(),
            ];
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'ramy_czasowe' => $this->ramy_czasowe,
            'cechy' => $this->cechy,
            'postacie' => $postacie,
        ];
    }
}
