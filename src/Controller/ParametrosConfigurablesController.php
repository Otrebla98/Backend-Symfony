<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ParametrosConfigurablesController extends AbstractController
{
    /**
     * @Route("/parametros/configurables", name="parametros_configurables")
     */
    public function index()
    {
        return $this->render('parametros_configurables/index.html.twig', [
            'controller_name' => 'ParametrosConfigurablesController',
        ]);
    }
}