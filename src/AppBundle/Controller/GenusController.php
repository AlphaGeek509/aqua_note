<?php
/**
 * Created by PhpStorm.
 * User: jeffn
 * Date: 5/1/17
 * Time: 9:03 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {

        return new Response('The genus: ' . $genusName);
    }
}