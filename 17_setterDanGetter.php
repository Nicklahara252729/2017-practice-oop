<h1><u>Setter and Getter</u></h1>
<?php
class MobilJepang{
	private $merk;

	public function setMerk($merk){
		$this->merk = $merk;
	}

	public function getMerk(){
		return $this->merk;
	}
}
$mobil = new MobilJepang();
$mobil->setMerk('toyota');
echo 'merk mobil adalah '.$mobil->getMerk();