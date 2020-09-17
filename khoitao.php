<?php 
class sinhvien{
	function __construct(){
		// $this-> mssv = $mssv;
		// $this-> taikhoan = $taikhoan;
		// $this-> ten = $ten;
		$this->table = "sinhvien1";
		$this->connect = new PDO("mysql:host=127.0.0.1;dbname=sinhvien;charset=utf8","root","");

	}
	static function all(){
 		$model = new static(); // bằng với model = new classname
 		$sql = "select * from $model->table";
 		$stmt = $model->connect->prepare($sql);
 		$stmt-> execute();
 		$result = $stmt->fetchAll();
 		return $result;
 	}
 	static function find($id){
 		$model = new static();
 		$sql = "select * from $model->table where id = $id";
 		$stmt = $model->connect->prepare($sql);
 		$stmt-> execute();
 		$result = $stmt->fetchAll();
 		return $result;
 	}
 	static function where($cot, $phepsosanh, $giatricantim){
 		//return ra được kết quả cảu câu lệnh
 		//select * from sinhvien where cot phepsosanh giatri
 		$model = new static();
 		$sql = "select * from $model->table where $cot $phepsosanh '$giatricantim'";
 		$stmt = $model->connect->prepare($sql);
 		$stmt-> execute();
 		$result = $stmt->fetchAll();
 		return $result;
 	}





	// var $taikhoan = 100;	
	// function dangkyhoc($monhoc){
	// 	$sotienbitru = $monhoc*1.2;
	// 	$this -> danghoc = $monhoc;
	// 	$this -> taikhoan = $sotienbitru;
	// }
}


$dsSinhvien=sinhvien::where('ten', 'like', 'nguyen ba hung');
echo "<pre>";
var_dump($dsSinhvien);
 

 ?>
 <h2>
 	fdskfhjks
 </h2>