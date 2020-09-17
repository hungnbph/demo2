<?php 
// Tính đa hình : lớp B kế thừa lớp A, thì trong nội dung của lớp B, được phép định nghĩa ghi lại, ghi đè lên những giá trị thuộc tính của lớp A định nghĩa ra . các thực thể đc tạo ra từ lớp B sẽ ưu tiên thực thi các thiết lập cảu lớp B.
class phuhuynh{
	function __construct($ten, $toan, $van, $anh){
		$this->ten=$ten;
		$this->toan=$toan;
		$this->van=$van;
	}
	function diemtb(){
		return round(($this->toan + $this->van )/2, 2);
          
	}
}
class sinhvien extends phuhuynh{
	function diemtb(){
		return round((($this->toan*2)+ $this->van )/4, 2);
	}
}


$hungnb = new sinhvien(' hưng',9,9,7);
echo $hungnb->diemtb();

 ?>