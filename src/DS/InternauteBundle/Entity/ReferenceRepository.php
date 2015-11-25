<?php 
// src/DS/InternauteBundle/Entity/ReferenceRepository.php

namespace DS\InternauteBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator; 

class ReferenceRepository extends \Doctrine\ORM\EntityRepository
{
	public function getReferencesActif()
	{
            $query = $this->_em->createQuery(
            'SELECT R.id, R.titre, R.description,
            R.logo, R.adresse,R.actif 
            FROM DSInternauteBundle:Reference R
            where R.actif = 1'
            );
            
        $ref = $query->getResult();
        return $ref;
	}
}
?>