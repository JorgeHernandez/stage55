<?php

namespace ServerGrove\SGLiveChatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SGLiveChatBundle:Default:index.html.twig');
    }
    public function pruebaAction()
    {
        return $this->render('SGLiveChatBundle:Default:hallo.html.twig');
    }
}
