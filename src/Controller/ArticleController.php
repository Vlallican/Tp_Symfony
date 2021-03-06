<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article.index")
     */
    public function index(ArticleRepository $articleRepository,PaginatorInterface $paginator, Request $request): Response
    {
        $articleRepository = $this->getDoctrine()->getRepository(Article::class);
        $articles = $articleRepository->findAll();
        $pagination = $paginator->paginate(
            $articles,
            $request->query->getInt('page', 1),
            10);
        
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'articles' => $pagination,
        ]);  
    } 

    /**
     * @Route("/article/{id}", name="article.show")
     */
    public function show($id, ArticleRepository $articleRepository)
    {
        $articleRepository = $this->getDoctrine()->getRepository(Article::class);
        $article = $articleRepository->find($id);
        return $this->render('article/show.html.twig', [
            'controller_name' => 'ShowController',
             'article' => $article,
        ]);  
    }

}
