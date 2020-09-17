<?php
class DetailController extends Controller 
{
    public function Detailcontroller()
    {
    	 $id = $_GET['id'];
		$chitiet = product::find($id);
        $this->render('view/layout/detail', [
            'page'=>'DetailController',
            'products'=> $cate
            
        ]);
}
}