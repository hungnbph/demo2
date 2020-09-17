<?php
class Connguoi {
	public $name;
	protected $age;
	protected $gender;
	protected $mail;
	protected $sdt;

	public function __construct($name, $age, $gender, $mail, $sdt) {
		$this->name = $name;
		$this->age = $age;
		$this->gender = $gender;
		$this->mail = $mail;
		$this->sdt = $sdt;
	}

}
class Sinhvien extends Connguoi {
	private $Bangdiem;
	public function setSV($Bangdiem, $Hanhkiem) {
		$this->Bangdiem = $Bangdiem;
		$this->Hanhkiem = $Hanhkiem;
	}
	public function run() {
		echo '<h3 style="color: red;">Sinh viên</h3>';
		echo " $this->name Học tập <br> Tuổi: $this->age <br> ";

	}
	public function show() {
		echo "Giới tính: $this->gender <br>";

		echo "Mail: $this->mail <br>";
		echo "Số điện thoại: $this->sdt <br>";
		echo "Điểm: $this->Bangdiem <br>";
		echo "Hạnh kiểm: $this->Hanhkiem<br>";
		echo '<hr>';
	}
}
class Nhanvien extends Connguoi {
	private $Kinhnghiem;
	public function setNV($Kinhnghiem) {
		$this->Kinhnghiem = $Kinhnghiem;
	}
	public function run() {
		echo '<h3 style="color: red;">Nhân viên</h3>';
		echo "$this->name Làm việc <br> Tuổi: $this->age <br>";

	}
	public function show() {
		echo "Mail: $this->mail <br>";
		echo "Số điện thoại: $this->sdt <br>";
		echo "Giới tính: $this->gender <br>";
		echo "Kinh nghiệm: $this->Kinhnghiem <br>";
	}

}
//tạo đối tượng
$Sv = new Sinhvien('Lâm', 19, 'Nam', 'lamdo21@!mail.com', '119');
$Sv->setSV('Tốt', 'Xuất Sắc');
$Sv->run();
$Sv->show();
$Nv = new Nhanvien('Nam', 25, 'Nam', 'namdtph06787@gmail.com', '2222');
$Nv->setNV('3 năm');
$Nv->run();
$Nv->show();
?>