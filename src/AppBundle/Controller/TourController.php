<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tour;
use AppBundle\Entity\TourOrder;
use AppBundle\Form\TourOrderType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TourController extends Controller
{
    private $bookingForm;

    /**
     * @Route("/tour/{slug}", name="tour_detail")
     * @Method("GET")
     */
    public function tourShowAction(Tour $tour)
    {
        return $this->render('single-tour/content.html.twig', ['tour' => $tour]);
    }


    /**
     * @Route("/booking/{tourSlug}/new", name="tour_booking_new")
     * @Method("POST")
     * @ParamConverter("tour", class="AppBundle:Tour", options={"mapping" : {"tourSlug": "slug"}})
     *
     * @param Request $request
     * @param Tour $tour
     * @return Response
     */
    public function bookingNewAction(Request $request, Tour $tour)
    {
        $form = $this->getBookingForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $booking_data = $form->getData();
        }
    }

    /**
     * @param Tour $tour
     * @return Response
     */
    public function bookingFormAction(Tour $tour)
    {
        $form = $this->getBookingForm();

        return $this->render('single-tour/_booking_form.html.twig', [
            'tour' => $tour,
            'form' => $form->createView()
        ]);
    }

    /**
     * @return \Symfony\Component\Form\FormInterface
     */
    private function getBookingForm()
    {
        $form = $this->createFormBuilder(array())
            ->add('departure', TextType::class, array(
                'label' => 'Chọn ngày khởi hành',
                'attr' => ['placeholder' => 'Ngày khởi hành']
            ))
            ->add('adults', IntegerType::class, array(
                'label' => 'Số lượng người',
                'attr' => ['min' => 1],
            ))
            ->getForm();

        return $form;
    }
}
