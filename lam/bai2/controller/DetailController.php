<?php
class DetailController extends Controller 
{
    public function Detailcontroller($id)
    {
        $cate = Products::findOnce($id);
        $this->render('view/layout/detail', [
            'page'=>'DetailController',
        
            'products'=> $cate
            
        ]);
}
}