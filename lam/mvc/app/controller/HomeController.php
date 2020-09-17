<?php
class HomeController extends Controller
{
    function index()
    {   

        $categories = new Categories;
        $cate = Categories::listAll();
        $products = Products::listAll();
        $this->render('view/layout/layout', [
            'page'=>'content',
            'categories'=>$cate,
            'products'=> $products
        ]);
    }
}