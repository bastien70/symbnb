<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    /**
     * Accueil
     *
     * @Route("/", name="homepage")
     * @return void
     */
    public function home()
    {
        return $this->render(
            "home.html.twig",
            ["title" => "Bonjour you"]
        );
    }

    /**
     * @Route("/hello/{prenom}/age/{age}", name="hello")
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * Dire bonjour
     *
     * @return void
     */
    public function hello($prenom = "anonyme", $age= 0)
    {
        return new Response("Hey ". $prenom . "Tu as ". $age);
    }
}

?>