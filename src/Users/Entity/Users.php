<?php

declare(strict_types=1);

namespace Source\Users\Entity\Users;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="users")
 */

class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", nullable=false, unique=false, length=255)
     */
    private string $;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true, length=255)
     */
    private string $email;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true, length=255)
     */
    private string $password;
}
?>
