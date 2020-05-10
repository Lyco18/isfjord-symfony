<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use App\Entity\Gallery;

class GalleryController extends AbstractController
{
    /**
     * @Route("/gallery", name="malmo-gallery")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Gallery::class);
        $photos = $repository->findAll();
        return $this->render('gallery/gallery.html.twig', [
            'controller_name' => 'GalleryController',
            'photos' => $photos
        ]);
    }
}
