<?php

namespace WND\SMVCP\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use WND\SMVCF\Http\Controller;
use WND\SMVCP\Form\CreateSubscriberType;

class SubscriberController extends Controller
{
    public function listAction()
    {
        return $this->render('View/Subscriber/index.php');
    }

    public function createAction()
    {
        $request = $this->get('request_stack')->getCurrentRequest();

        $form = $this->createForm(new CreateSubscriberType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            return $this->redirect('subscriber_list');
        }

        return $this->render(
            'View/Subscriber/create.php',
            ['form' => $form->createView()]
        );
    }
}
