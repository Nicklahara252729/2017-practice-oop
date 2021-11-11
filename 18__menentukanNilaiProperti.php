<h1><u>Menentukan Nilai Properti</u></h1>
<h3>cara membatasi agar hanya merk mobil jepang sebagai nilai properti</h3>
<?php
class MobilJepang{
	private $merk;

	public function setMerk($merk){
		$merkJepang= ['honda','suzuki','toyota','nissan'];
		if(in_array($merk, $merkJepang)){
			$this->merk = $merk;
		}
	}

	public function getMerk(){
		return $this->merk;
	}
}
$mobil = new MobilJepang();
$mobil->setMerk('bmw');
echo ' merk mobil adalah  '.$mobil->getMerk();