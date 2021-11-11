<h1><u>Menambah Properti dan Method di Abstract Class</u></h1>
<?php
abstract class Mobil{
	protected $volTangki;

	public function isiBensin($vol){
		$this->volTangki = $vol;
	}

	abstract protected function jarakTempuhMaks();
}

class Toyota extends Mobil{
	protected $perLiter = 10;

	public function jarakTempuhMaks(){
		$jarakMaks = $this->perLiter * $this->volTangki;
		echo 'Jarak tempuh maks Toyota '.$jarakMaks." km <br>";
	}
}

class Suzuki extends Mobil{
	protected $perLiter = 20;

	public function jarakTempuhMaks(){
		$jarakMaks = $this->perLiter * $this->volTangki;
		echo 'jarak tempuh mask Suzuki '.$jarakMaks. " km <br>";
	}
}

$toyota = new Toyota();
$toyota->isiBensin(10);
$toyota->jarakTempuhMaks();

$suzuki = new suzuki();
$suzuki->isiBensin(10);
$suzuki->jarakTempuhMaks();