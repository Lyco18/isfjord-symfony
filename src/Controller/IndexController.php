<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('views/index.html.twig', [
            'boats' => 'Malmö',
            'services' => ['Expeditions', 'cruises']
        ]);
    }

    /**
     * @Route("/malmo")
     */
    public function malmo()
    {
        return new Response('malmo');
    }
}
