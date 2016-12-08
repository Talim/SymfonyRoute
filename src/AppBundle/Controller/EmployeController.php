<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/gestemp")
 */
class EmployeController extends Controller
{
    /**
     * @Route(
     *     path="/employe/{id}",
     *     name="employer_voir",
     *     requirements={"id"="\d+"}
     *
     * )
     */
    public function voirAction($id)
    {
        return $this->render('AppBundle:Employe:voir.html.twig', array("id" => $id));
    }

}
