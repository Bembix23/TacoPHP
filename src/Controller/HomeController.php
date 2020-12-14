<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Post;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Expr\PostDec;
use Symfony\Component\Form\Forms;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/add", name="articles.add")
     */
    public function create(Request $request, EntityManagerInterface $em)
    {
        $article = new Post();

        $formBuilder = $this->createFormBuilder($article);

        $formBuilder->add("Title", TextType::class, [
            "attr" => [
                "class" => "form-control"
            ]
        ])
            ->add("Content", TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add("Author", TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add("PostalCode", TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add("Address", TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ])
            ->add("Ville", TextType::class, [
                "attr" => [
                    "class" => "form-control"
                ]
            ] )
            ->add("Contrat", TextType::class,
            ["help"=>"CDD, CDI ou FREELANCE"])

            ->add("TypeContrat", TextType::class,
            ["help"=>"temps plein ou temps partiel"]);
            

            $formBuilder->add("EndMission", DateType::class)


            ->add("submit", SubmitType::class, [
                "attr" => [
                    "class" => "btn btn-primary"
                ]
            ]);


        $article->setCreatedAt(new \DateTime());
        $article->setMajDate(new \DateTime());

        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($article);
            $em->flush();
        }

        return $this->render('home/add.html.twig', [
            "form" => $form->createView()
        ]);
    }

    
}
