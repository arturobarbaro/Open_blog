<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/{slug}", name="post_view")
     */
    public function viewAction(Request $request, $slug)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => 'list',
        ]);
    }

    /**
     * @Route("/post/new", name="post_new")
     */
    public function newAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => 'postN',
        ]);
    }

    /**
     * @Route("/post/edir/{slug}", name="post_edit")
     */
    public function editAction(Request $request, $slug)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => 'list',
        ]);
    }
}
