<?php

namespace App\Entity;

use App\Repository\PermissionRepository;
use Doctrine\ORM\Mapping as ORM;
use Fxp\Component\Security\Model\PermissionInterface;
use Fxp\Component\Security\Model\Traits\PermissionTrait;

/**
 * @ORM\Entity(repositoryClass=PermissionRepository::class)
 *
 * @ORM\Table(
 *     indexes={
 *         @ORM\Index(name="idx_permission_operation", columns={"operation"}),
 *         @ORM\Index(name="idx_permission_class", columns={"class"}),
 *         @ORM\Index(name="idx_permission_field", columns={"field"})
 *     },
 *     uniqueConstraints={
 *         @ORM\UniqueConstraint(name="uniq_permission", columns={"operation", "class", "field"})
 *     }
 * )
 */
class Permission implements PermissionInterface
{
    use PermissionTrait;

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

    public function __toString() {
        return (string) $this->getClass();
    }
}
