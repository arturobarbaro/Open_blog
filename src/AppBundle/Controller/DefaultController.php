<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/list/{page}", name="list")
     */
    public function listAction(Request $request, $page)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => 'list',
        ]);
    }

    /**
     * @Route("/category/{page}", name="homepage")
     */
    public function categoryAction(Request $request, $page)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => 'category',
        ]);
    }

    /**
     * @Route("/{slug}", name="post_view")
     */
    public function postViewAction(Request $request, $slug)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => 'list',
        ]);
    }

    /**
     * @Route("/post/new", name="post_new")
     */
    public function postNewAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => 'postN',
        ]);
    }

    /**
     * @Route("/post/edir/{slug}", name="post_edit")
     */
    public function postEditAction(Request $request, $slug)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => 'list',
        ]);
    }
}
