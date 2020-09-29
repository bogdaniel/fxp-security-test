<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;
use Fxp\Component\Security\Model\RoleInterface;
use Fxp\Component\Security\Model\Traits\RoleTrait;

/**
 * @ORM\Entity(repositoryClass=RoleRepository::class)
 */
class Role implements RoleInterface
{
    use RoleTrait;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
