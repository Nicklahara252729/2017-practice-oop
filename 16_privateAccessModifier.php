<h1><u>Private Access Modifier</u></h1>
<?php
// hasilnya memang error
// menandakan private access berjalan

class MobilJepang{
	private $merk;

	public function getMerk(){
		return $this->merk;
	}
}
$mobil = new MobilJepang();
$mobil->merk = 'toyota';
echo 'merk mobil adalah '.$mobil->getMerk();