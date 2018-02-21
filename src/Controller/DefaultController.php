<?php
/**
 * Created by PhpStorm.
 * User: Sahip
 * Date: 21.02.2018
 * Time: 22:36
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index()
    {
        return $this->render('default/index.html.twig');
    }
}