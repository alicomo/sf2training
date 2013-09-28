<?php

namespace Training\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TrainingBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
