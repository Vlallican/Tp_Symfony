<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category.index")
     */
    public function index(CategoryRepository $categoryRepository, Request $request): Response
    {
        $categoryRepository = $this->getDoctrine()->getRepository(Article::class);
        $categories = $categoryRepository->findAll();
        
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);  
    } 

    /**
     * @Route("/category/{id}", name="category.show")
     */
    public function show($id, CategoryRepository $categoryRepository)
    {
        $categoryRepository = $this->getDoctrine()->getRepository(Category::class);
        $category = $categoryRepository->find($id);
        return $this->render('category/show.html.twig', [
            'controller_name' => 'ShowController',
             'category' => $category,
        ]);  
    }

}
