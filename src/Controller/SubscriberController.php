<?php

namespace WND\SMVCP\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use WND\SMVCF\Http\Controller;
use WND\SMVCP\Entity\Subscriber;
use WND\SMVCP\Form\CreateSubscriberType;

class SubscriberController extends Controller
{
    public function listAction()
    {
        $em = $this->get('doctrine')->getManager();
        $subscribers = $em
            ->getRepository('WND\SMVCP\Entity\Subscriber')
            ->getLatest(10);

        return $this->render(
            'View/Subscriber/index.php',
            [
                'subscribers' => $subscribers,
            ]
        );
    }

    public function createAction()
    {
        $em = $this->get('doctrine')->getManager();

        $subscriber = new Subscriber;

        $form = $this->createForm(new CreateSubscriberType(), $subscriber);

        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($subscriber);
            $em->flush();

            return $this->redirect('subscriber_list');
        }

        return $this->render(
            'View/Subscriber/create.php',
            ['form' => $form->createView()]
        );
    }
}
