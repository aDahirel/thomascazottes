<?php
// src/Controller/AdminController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends Controller
{
    //======================================================================
    // ADMIN INDEX
    //======================================================================

    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        // Redirecting to the admin page when calling to the function, no entries by buttons or link, 
        // need to type it directly by the url, the user has to be connected
        return $this->render('admin/admin.html.twig');
    }
}