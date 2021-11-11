<h1><u>Magic Method Construct</u></h1>
<?php
class Mobil{
	public $merk = '';

	public function __construct($merk){
		$this->merk = $merk;
	}

	public function getMerk(){
		return 'Merk Mobil adalah '.$this->merk;
	}
}
$mobil = new Mobil('ferrari');
echo $mobil->getMerk();