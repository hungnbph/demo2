<?php
class CategoryController extends Controller
{
    //Hiển thị danh sách sản phẩm trong category
    public function category($id){
            $products = Products::listProductInCate($id);
            $cate = Categories::listAll();
            $this->render('view/layout/layout', [
                'page'=>'category',
                'categories'=>$cate,
                'products'=> $products
            ]);
    }
}