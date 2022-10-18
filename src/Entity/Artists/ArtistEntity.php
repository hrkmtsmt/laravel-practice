<?php

declare(strict_types=1);

namespace Entity\Artist;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="artists")
 */
class Artist {

  /**
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   * @ORM\Column(type="integer")
   */
  private int $id;

  /**
   * @ORM\Column(type="string")
   */
  private string $name;

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name): self
  {
    $this->name = $name;
    return $this;
  }

  public function getArtist()
  {
    return [
      'id' => $this->id,
      'name' => $this->name
    ];
  }
}

?>