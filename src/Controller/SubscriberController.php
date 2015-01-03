<?php

namespace WND\SMVCP\Controller;

use WND\SMVCF\Http\Controller;

class SubscriberController extends Controller
{
    public function listAction()
    {
        return $this->render('View/Subscriber/index.php');
    }

    public function createAction()
    {
        return $this->render('View/Subscriber/create.php');
    }
}
