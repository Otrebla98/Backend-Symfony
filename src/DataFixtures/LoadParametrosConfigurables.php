<?php

namespace App\DataFixtures;

/*use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;*/
use App\Entity\ParametroConfigurable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LoadParametrosConfigurables extends Fixture 
{
    public function load(ObjectManager $manager){
    	
 		$arrayParametro = array(
 			array("HORARIO","8:00 - 15:00",true,"HORARIO"),
            array("HORARIO 2", "8;00-12:00",true,"HORARIO"),

		  );

		for($i=0;$i<sizeof($arrayParametro); $i++) {
			$parametro = new ParametroConfigurable();
			$parametro->setParametro( $arrayParametro[$i][0] );
			$parametro->setValor( $arrayParametro[$i][1]);
			$parametro->setActivo($arrayParametro[$i][2]);
            $parametro->setTipo($arrayParametro[$i][3]);
			$manager->persist($parametro);
        	$manager->flush();
		}
    }
}