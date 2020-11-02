<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestRepository")
 */
class Test
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lol;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLol(): ?string
    {
        return $this->lol;
    }

    public function setLol(string $lol): self
    {
        $this->lol = $lol;

        return $this;
    }
}
