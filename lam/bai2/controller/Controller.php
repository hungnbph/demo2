<?php
// class Controller
// {
//     public function index()
//     {

//         // $data = Categories::findOnce(8);
//         // var_dump($data);
//         $cate = new Categories ;
//         $arr = [
//             'cate_name'=>'samsung 23',
//             'slug'=>'samsung1',
//             'desc'=>'Điện thoại samsung1',
//             'created_at'=>date('Y-m-d H:i:s'),
//             'updated_at'=>date('Y-m-d H:i:s'),
//             'created_by'=>'-1',
//         ];
//         if($cate->update($arr, 87)){
//             // echo "thêm dữ liệu $arr[cate_name] thành công";
//             echo "Cập nhật thành công";
//         }
//         else{
//             // echo "không thể thêm dữ liệu, Tên $arr[cate_name] đã tồn tại";
//             echo "Cập nhật  $arr[cate_name]  thất bại";
//         }
//         $cate->insert($arr);
//         // include_once "./view/home.php";
//     }
//     public function about()
//     {
//         include_once "./view/about.php";
//     }
//     public function contact()
//     {
//         include_once "./view/contact.php";
//     }
// }

class Controller
{
    public function render($view, $data = [])
    {
        include_once "$view.php";
    }
}
