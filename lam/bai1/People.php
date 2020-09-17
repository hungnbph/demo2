<?php
//Khởi tạo lớp people
class People 
{
    private $name;
    // protected $age;
    public $address;
    public $email;
    public $sdt;
    public $bangcap;
    public $loaikhachhang;
    // const MAX_AGE= 200;
    public function __construct($name, $address, $email, $sdt, $bangcap, $loaikhachhang){
        $this->name= $name;
        $this->address=$address;
        $this->email=$email;
        $this->sdt=$sdt;
        $this->bangcap=$bangcap;
        $this->loaikhachhang=$loaikhachhang;

    }
    // public function setName($name){
    //     $this->name = $name ;

    // }
    // public function setAge($age){
    //     $this->age = $age ;
        
    // }
    function HienThi(){
        echo "<p>Tên: $this->name đang chạy để khỏe </p>";
        echo "<p>Địa chỉ: $this->address</p>";
        echo "<p>Email: $this->email </p>";
        echo "<p>SĐT: $this->sdt </p>";
        echo "<p>Bằng cấp: $this->bangcap </p>";
        echo "<p>Loại khách hàng: $this->loaikhachhang </p>";

  
     

    }
    public function __destruct()
    {
        // echo "$this->name Kết thúc";
    }
    
}

//Khởi tạo đối tượng
$lam = new People("lâm","dấdsad", "@@", 23432423, "khá", "" );


// var_dump($lam);
//tạo thêm một đối tượng

$chinh = new People("Chinh","yuy", "@@", 534545, "", "member" );
//truy cập vào hàng 
$chinh->HienThi();
echo "<hr>";
$lam->HienThi();
// echo "MAX_AGE: " . People::MAX_AGE;









