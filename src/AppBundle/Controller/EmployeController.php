<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/gestemp")
 */
class EmployeController extends Controller
{
    /**
     * @Route(
     *     path="/employe/{id}",
     *     name="employer_voir",
     *     requirements={"id":"\d+"}
     * )
     */
    public function voirAction($id)
    {
        return $this->render('AppBundle:Employe:voir.html.twig', array("id" => $id));
    }
    /**
     * @Route(
     *     path="/employev2/{id}",
     *     name="employerv2_voir",
     *     defaults={"id":99},
     *     requirements={"id":"\d+"}
     * )
     * @Template("AppBundle:Employe:voir.html.twig")
     */
    public function voirV2Action($id)
    {
        return array("id" => $id);
    }


    /**
     * @Route(
     *     path="/employe-nom/{nom}",
     *     name="employer_nom",
     *     defaults={"nom":99},
     *     requirements={"nom":"^B[\w\W]+"}
     * )
     * @Template("AppBundle:Employe:voir.html.twig")
     */
    public function voirNomAction($nom)
    {
        return array("nom" => $nom);
    }


}
