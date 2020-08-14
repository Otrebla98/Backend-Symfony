<?php

namespace App\DataFixtures;

use App\Entity\Producto;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LoadProducto extends Fixture 
{
    public function load(ObjectManager $manager){
    	
 		$arrayParametro = array(
 			array("Refresco","Coca-Cola 600 ml",34),
            array("Refresco","Coca-Cola 800 ml",50),

		  );

		for($i=0;$i<sizeof($arrayParametro); $i++) {
			$parametro = new Producto();
			$parametro->setNombre( $arrayParametro[$i][0] );
			$parametro->setDescripcion( $arrayParametro[$i][1]);
			$parametro->setPrecio($arrayParametro[$i][2]);
			$manager->persist($parametro);
        	$manager->flush();
		}
    }
}