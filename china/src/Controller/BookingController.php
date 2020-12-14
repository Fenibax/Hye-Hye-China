<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Booking;
use App\Entity\Fidelity;
use App\Form\BookingType;
use App\Repository\BookingRepository;
use App\Repository\FidelityRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/booking")
 */
class BookingController extends AbstractController
{
    /**
     * @Route("/", name="booking_index", methods={"GET"})
     */
    public function index(BookingRepository $bookingRepository, FidelityRepository $fidelityRepository, UserInterface $user, UserRepository $userRepository): Response
    {
   //     $repo = $this->getDoctrine()->getRepository(User::class);

 //       $booking = $repo->findByBookingByUser($user->getId());
 $userId = $this->getUser()->getId();
 $booking = $userRepository->findByBookingByUser($userId);

         $tab = $booking->getBookings();

         $fidelity = new Fidelity();
         $fidelity->setNombreReservation(sizeof($tab));
         $rendezvous = new Booking();
         $rendezvous ->setFidelity($fidelity);
        
        return $this->render('booking/index.html.twig', [
        
            'bookings' => $booking,
            'fidelity'=> sizeof($tab)
        ]);
    }

    /**
     * @Route("/booking/calendar", name="booking_calendar", methods={"GET"})
     */
    public function calendar(UserInterface $user): Response
    {
        $repo = $this->getDoctrine()->getRepository(User::class);
     //   $booking = $repo->findByBookingByUser($user->getId());
        return $this->render('booking/calendar.html.twig');
    }


    /**
     * @Route("/new", name="booking_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserInterface $user, UserRepository $userRepository): Response // 
    {
        $fidelity = new Fidelity();
        $booking = new Booking();
        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);
        // dd($user);
        if ($form->isSubmitted() && $form->isValid()) {
           
            $userId = $this->getUser()->getId();
        
            $b = $userRepository->findByBookingByUser($userId);
            $tab = $b->getBookings();
            $fidelity->setNombreReservation(sizeof($tab));
            $booking->setFidelity($fidelity);
            $booking->addUser($user);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($booking);
            $entityManager->flush();

            return $this->redirectToRoute('booking_index');
        }

        return $this->render('booking/new.html.twig', [
            'booking' => $booking,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="booking_show", methods={"GET"})
     */
    public function show(Booking $booking): Response
    {
        return $this->render('booking/show.html.twig', [
            'booking' => $booking,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="booking_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Booking $booking): Response
    {
        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('booking_index');
        }

        return $this->render('booking/edit.html.twig', [
            'booking' => $booking,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="booking_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Booking $booking): Response
    {
        if ($this->isCsrfTokenValid('delete' . $booking->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($booking);
            $entityManager->flush();
        }

        return $this->redirectToRoute('booking_index');
    }
}
