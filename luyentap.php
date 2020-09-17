<?php   
	var $concai = [];


    function getBMI(){

        $chieucaoquydoi = $this->chieucao/100;
        $bmi = $this->cannang/pow($chieucaoquydoi, 2);
        return $bmi;
    } 
    function getAge(){
    	//dựa vào ngày sinh của thực thể đang thực thi hành động
    	//lấy ra số tuổi của cảu người này 
    	// 1. lấy ra năm hiện tại 
    	// 2. lấy ra ngày sinh 
    	// 3. lấy năm hiện tại trừ số ngày sinh 
    	// 4. trả về kết quả 
        $now = getdate();
        $year = $now['year'];
       $date = DateTime:: createfromformat('Y-m-d', $this->ngaysinh);
       $bornyear = $date->format('Y');
       $age = $year - $bornyear;
       return $age;
    }

    function sinhcon($ten,$ngaysinh,$gioitinh,$chieucao,$cannang){
       $tuan = new connguoi();
       $tuan -> ten = $ten;
       $tuan -> ngaysinh = $ngaysinh;
       $tuan -> gioitinh = $gioitinh;
       $tuan -> chieucao = $chieucao;
       $tuan -> cannang = $cannang;
       $this -> concai[] = $tuan;

    }
   function muaoto($hangxe, $mauxe, $giaxe){
   	$adj = new oto();
   	$adj->hangxe = $hangxe;
   	$adj->mauxe = $mauxe;
   	$adj->giaxe = $giaxe;

   	$this oto[] = $adj;
   }
}
$hungnb = new connguoi();
$hungnb -> ten = "nguyễn bá hưng";
$hungnb -> ngaysinh = "1999-12-31";
$hungnb -> gioitinh = "nam";
$hungnb -> chieucao = 178;
$hungnb -> cannang = 60;

$hungnb->sincon('lê anh tiến','2000-12-12','nam',165,45);
echo "<pre>";
  // echo $hungnb->getBMI();
  echo $hungnb-> getAge();
// var_dump($hungnb);



 ?>