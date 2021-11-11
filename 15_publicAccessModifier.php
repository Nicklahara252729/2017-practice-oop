<h1><u>Public Access Modifier</u></h1>
<?php
class MobilJepang{
	public $merk;

	public function getMerk(){
		return $this->merk;
	}
}

$mobil = new MobilJepang();
$mobil->merk = 'toyota';
echo 'merk mobil adalah '.$mobil->getMerk();