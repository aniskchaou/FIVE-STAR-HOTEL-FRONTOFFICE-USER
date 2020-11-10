<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TestimonialController extends Controller
{
    /**
     * @Route("/testimonial", name="testimonial")
     */
    public function index()
    {
        return $this->render('testimonial/index.html.twig', [
            'controller_name' => 'TestimonialController',
        ]);
    }
}
