<?php
// src/Controller/MainController.php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        // Redirecting to the home page by default
        return $this->render('primary/home.html.twig');
    }

    /**
     * @Route("/gallery", name="gallery")
     */
    public function gallery()
    {
        // Redirecting to the gallery page when calling to the function
        return $this->render('gallery/gallery.html.twig');
    }

    /**
     * @Route("/gallerymodify", name="manage_gallery")
     */
    public function modify_gallery()
    {
        return $this->render('gallery/manage_gallery.html.twig');
    }

    /**
     * @Route("/show/{id}", name="show")
     */
    public function show(User $user)
    {
        // Redirecting to the show page when calling to the function
        return $this->render('show.html.twig', [
            'user' => $user,
        ]);
    }
}
