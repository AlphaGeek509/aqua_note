<?php
/**
 * Created by PhpStorm.
 * User: jeffn
 * Date: 5/1/17
 * Time: 2:08 PM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{

    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}