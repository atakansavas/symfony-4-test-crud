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

    /**
     * @Route("/getName/{slug}", name="app_getName", methods={"POST"})
     */
    public function getName($slug)
    {
        //TODO - Connect the database and get full name of entity.
        $changedName = "Full name is : " . $slug;
        return new JsonResponse(['name' => $changedName]);
    }
}