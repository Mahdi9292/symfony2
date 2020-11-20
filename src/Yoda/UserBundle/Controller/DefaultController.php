<?php


namespace Yoda\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        $lastUsername = "hello admin";
        return $this->render(
            'UserBundle:Default:admin.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
            )
        );;
    }

    /**
     * @Route("/hadi")
     */
    public function hadiAction()
    {
        $hello = "hello hadi jan";
        return $this->render(
            'UserBundle:Default:hadi.html.twig',
            array(
                // last username entered by the user
                'hello' => $hello,
            )
        );;
    }
}