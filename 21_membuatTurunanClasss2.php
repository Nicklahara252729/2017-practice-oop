<h1><u>Membuat turunan class 2 </u></h1>
<?php
// parent class
class Mobil{
	private $merk;

	public function setMerk($merk){
		$this->merk = $merk;
	}

	public function getMerk(){
		return $this->merk;
	}

	public function halo(){
		return ' tin tin halo saya adalah '.$this->merk;
	}
}

//child class
class MobilSport extends Mobil{}

//instance mobil sport
$ferrari = new MobilSport();
$ferrari->setMerk('ferrari');
echo $ferrari->halo();