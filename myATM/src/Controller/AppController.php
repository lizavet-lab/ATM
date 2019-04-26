<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AppController extends AbstractController
{
    private $productRepository;

    //конструктор
    public function __construct(ProductRepository $productRepository)
    {
        $this -> productRepository = $productRepository;
    }

    public function create(){
        $product = new Product();
        $product->setName('книга')
            ->setPrice(500);
        $this->productRepository->add($product);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getAll(){
        return $this->json($this->productRepository->findAll());
    }

    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public  function update(){
        //надо найти какую-то строку.
        $product = $this->productRepository->find(1);
        $product->setName('журнал')->setPrice(150);
        $this->productRepository->add($product);
        return $this ->json($product);
    }

    public function delete(){
        $product = $this->productRepository->find(4);
        $this->productRepository->delete($product);
        return new Response;
    }

    public function sendMoney($otp, $pol)
    {
        $sender = new Sender();
        $sender->sendMonye($otp, $pol);
        return new Response();
    }

}