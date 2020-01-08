<?php
// src/Controller/SecurityController.php
namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    //======================================================================
    // REGISTER FUNCTION
    //======================================================================

    /**
     * @Route("/register", name="user_registration")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) Build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) Handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) Save the User
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // 5) Redirect to the show route with the User's id
            return $this->redirectToRoute('show', [
                'id' => $user->getId(),
            ]);
        }
        // Redirecting to the form page when calling to the function, no entries by buttons or link, 
        // need to type it directly by the url
        return $this->render('form.html.twig',
            array('form' => $form->createView()) // Create a view with the form file
        );
    }


    //======================================================================
    // LOGIN FUNCTION
    //======================================================================

    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        // Get the login error in a variable
        $error = $authenticationUtils->getLastAuthenticationError();
        // Return the login file with the error code if exist
        return $this->render('login/login.html.twig', array(
            'error'         => $error,
        ));
    }

    //======================================================================
    // LOGOUT FUNCTION
    //======================================================================

    /**
     * @Route("/logout", name="app_logout", methods={"GET"})
     */
    public function logout()
    {
        // Controller can be blank: it will never be executed!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}
