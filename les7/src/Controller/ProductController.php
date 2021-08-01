<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/", name="catalog")
     */
    public function index(): Response
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        $category['name'] = 'Акционный каталог';

        return $this->render('product/index.html.twig', [
            'products' => $products,
            'category' => $category,
        ]);
    }

    /**
     * @Route("/product/{id}", name="product")
     */
    public function showProduct($id): Response
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        if (!isset($product)) {
            return $this->index();
        }

        $categoryId = $product->getCategoryId();
        $category = $this->getDoctrine()->getRepository(Category::class)->findBy([
            'id' => $categoryId
        ]);

        return $this->render('product/showProduct.html.twig', [
            'product' => $product,
            'category' => $category[0],
        ]);
    }

    /**
     * @Route("/category/{id}", name="category")
     */
    public function showCategory($id): Response
    {
        $category = $this->getDoctrine()->getRepository(Category::class)->find($id);
        if (!isset($category)) {
            return $this->index();
        }

        $categoryId = $category->getId();
        $products = $this->getDoctrine()->getRepository(Product::class)->findBy([
            'categoryId' => $categoryId
        ]);

        return $this->render('product/index.html.twig', [
            'products' => $products,
            'category' => $category,
        ]);
    }
}
