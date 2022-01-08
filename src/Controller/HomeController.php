<?php

namespace App\Controller;

use App\Classe\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $mail = new Mail();
        $mail->send('allan.lelous@gmail.com', 'Allan Lelous', 'Mon premier mail', "Bonjour Allan");

        return $this->render('home/index.html.twig');
    }
}
