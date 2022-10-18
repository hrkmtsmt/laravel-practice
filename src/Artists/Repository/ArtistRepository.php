<?php
declare(strict_types=1);

namespace Artists\Repository;

use Artists\Entity\ArtistEntity as Artist;
use Doctrine\ORM\EntityManagerInterface as EntityManager;
use Doctrine\ORM\EntityRepository;

class ArtistRepository extends EntityRepository
{
    public function __construct(EntityManager $entityManager)
    {
        parent::__construct($entityManager, $entityManager->getClassMetadata(Artist::class));
    }
}
?>