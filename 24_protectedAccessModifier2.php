<h1><u>Protected Access Modifier 2</u></h1>
<?php
// hasil memang error
// lihat bagian 2
// parent class
class Mobil{
	protected $merk;

	public function setMerk($merk){
		$this->merk = $merk;
	}
}

//child class
class MobilSport extends Mobil{
	public function halo(){
		return ' halo saya '.$this->merk;
	}
}

//instance mobilsport
$ferrari = new MobilSport();
$ferrari->setMerk('ferrari');
echo $ferrari->halo();