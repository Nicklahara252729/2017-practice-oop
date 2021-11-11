<h1><u>Magic Method  Construct 2</u></h1>
<h3>Memberikan nilai default pada constructor</h3>
<?php
class Mobil{
	public $merk='';

	public function __construct($merk = 'audi'){
		$this->merk = $merk;
	}

	public function getMerk(){
		return ' Merk mobil adalah '.$this->merk;
	}
}
$mobil = new Mobil();
echo $mobil->getMerk();