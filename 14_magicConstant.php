<h1><u>Magic Constant</u></h1>
<?php
class Mobil{
	public $merk = '';

	public function __construct($merk = 'audi'){
		$this->merk = $merk;
	}

	public function getMerk(){
		return 'Merk '.__CLASS__.' ini adalah : '.$this->merk;
	}
}
$mobil = new Mobil("ferrari");
echo $mobil->getMerk();