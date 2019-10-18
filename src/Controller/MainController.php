<?php
// src/Controller/MainController.php
namespace App\Controller;

use App\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    //======================================================================
    // FRONT CONTROLLER
    //======================================================================

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
        // Redirecting to the gallery page
        return $this->render('gallery/gallery.html.twig');
    }

    /**
     * @Route("/gallerymodify", name="manage_gallery")
     */
    public function modify_gallery()
    {
        // Redirecting to the gallery management page
        return $this->render('gallery/manage_gallery.html.twig');
    }

    /**
     * @Route("/show/{id}", name="show")
     */
    public function show(User $user)
    {
        // Redirecting to the show page when calling to the function, no entries by buttons or link, 
        // need to type it directly by the url
        return $this->render('show.html.twig', [
            'user' => $user,
        ]);
    }
}
