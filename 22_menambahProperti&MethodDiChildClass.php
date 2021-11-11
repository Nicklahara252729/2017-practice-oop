<h1><u>Menambah Properti dan Method di Child Class</u></h1>
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
		return 'tin tin halo saya adalah '.$this->merk;
	}
}

//child class
class MobilSport extends Mobil{
	private $nos = 'nitrous oxide system';

	public function ngebut(){
		return ' mengendarai '.$this->getMerk(). ' dengan '.$this->nos;
	}
}

//instance mobilsport
$ferrari = new MobilSport();
$ferrari->setMerk('ferrari') ;
echo $ferrari->ngebut();