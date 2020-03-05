<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/main", name="main")
     */
    public function main()
    {
    	return $this->render('home/main.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
     /**
     * @Route("/pricing", name="pricing")
     */
    public function pricing()
    {
    	return $this->render('home/pricing.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/faq", name="faq")
     */
    public function faq()
    {
    	return $this->render('home/faq.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/team", name="team")
     */
    public function team()
    {
    	return $this->render('home/team.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/classes", name="classes")
     */
    public function classes()
    {
    	return $this->render('home/classes.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
