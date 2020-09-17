<?php 
// tính đóng gói: bảo vệ thuộc tính, giới hạn phương thức, không cho phép các lớp kế thừa gọi các thuộc tính, phương thức 1 cách bừa bãi. 
class nganhangcha{
	public $TenTK = "nguyễn bá hưng";
	protected $sotaikhoan = "0001016222623";
	private $taisan = 8000;
	public function gettaisan(){	
	 	return $this->taisan;
	 }
	 public function settaisan($taisanmoi){
	 	$this->taisan = $taisanmoi;
	 }
}
class ConCai extends nganhangcha{

	public function getsotaikhoan(){
	    return	$this->sotaikhoan;
	}
}
$hungnb = new ConCai();
echo $hungnb->TenTK;
echo '<br>';
echo $hungnb->getsotaikhoan();
echo "<br>";
$hungnb->settaisan(10000);
echo $hungnb->gettaisan();

 ?>