<?php
interface Car2 {
	public function run();
	public function sound();

}
class Vinfast implements Car2 {
	public function run() {
		echo "xe vin rất đắt<br>";
	}
	public function sound() {
		echo 'xe vin kêu rất êm<br>';
	}
}
$xe = new Vinfast();
$xe->run();
$xe->sound();
?>