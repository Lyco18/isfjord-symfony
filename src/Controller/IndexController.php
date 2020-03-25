<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="malmo-homepage")
     */
    public function homepage()
    {
        return $this->render('views/home.html.twig', [
            'boats' => 'Malmö',
            'services' => ['Expeditions', 'cruises']
        ]);
    }
    /**
     * @Route("/malmo", name="malmo-malmo")
     */
    public function malmo()
    {
        return $this->render('views/malmo.html.twig');
    }
    /**
     * @Route("/charter", name="malmo-charter")
     */
    public function charter()
    {
        return $this->render('views/charter.html.twig');
    }
    /**
     * @Route("/options", name="malmo-options")
     */
    public function options()
    {
        return $this->render('views/options.html.twig');
    }
    /**
     * @Route("/contact", name="malmo-contact")
     */
    public function contact()
    {
        return $this->render('views/contact.html.twig');
    }
    /**
     * @Route("/gallery", name="malmo-gallery")
     */
    public function gallery()
    {
        return $this->render('views/gallery.html.twig');
    }
}
