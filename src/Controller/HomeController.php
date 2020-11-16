<?php

namespace App\Controller;

use App\Entity\Post;
use DateTime;
use PhpParser\Node\Expr\PostDec;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        $post = $this->getDoctrine()
            ->getRepository(Post::class)
            ->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            "post" => $post
        ]);
    }

    /**
     * @Route("/posts/{id}", name="show_post")
     */
    public function show(Post $posts)
    {
        return $this->render('home/post.html.twig', [
            'controller_name' => 'HomeController',
            "posts" => $posts
        ]);
    }
}
