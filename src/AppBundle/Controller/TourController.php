<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tour;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TourController extends Controller
{
    /**
     * @Route("/tour/{slug}", name="tour_detail")
     * @Method("GET")
     */
    public function tourShowAction(Tour $tour)
    {
        return $this->render('single-tour/content.html.twig', ['tour' => $tour]);
    }
}
