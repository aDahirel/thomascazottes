<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('primary/home.html.twig');
    }

    /**
     * @Route("/gallery")
     */
    public function gallery()
    {
        return $this->render('gallery/gallery.html.twig');
    }
}
