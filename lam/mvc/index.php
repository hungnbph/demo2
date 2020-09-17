<?php
require_once "config.php";
require_once "model/BaseModel.php";
require_once "model/Categories.php";
require_once "model/Products.php";
require_once "controller/Controller.php";
require_once "controller/HomeController.php";
require_once "controller/CategoryController.php";
require_once "controller/DetailController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "";
$url = explode('/',$url);
// var_dump($url);
if ($url[0]=="") {
    $controller = '/';
}else{
    $controller = $url[0];
}
switch ($controller) {
    case '/':
    case 'home':
        $c = new HomeController;
        $c->index();
        break;
    case 'danhmuc';
        $c = new CategoryController;
        if (isset($url[1])) {
            $c->category($url[1]);
        }
        break;
    case 'detail';
        $c = new DetailController;
        if (isset($url[1])) {
            $c->Detailcontroller($url[1]);
        }
        break;
    case 'about';
        $c = new Controller;
        // $c->about();
        break;
    case 'contact';
        $c = new Controller;
        // $c->contact();
        break;
    default:
        echo "404 not found!!";
}
