<h1><u>Keyword This Untuk Method</u></h1>
<?php
class Mobil{
	public $merk ='BMW';

	public function sebutMerk(){

		//mengakses properti $merk
		$merk = $this->merk;

		//mengubah format dan mengembalikan properti $merk
		return $this->lowercase($merk);
	}

	public function lowercase($merk){
		return strtolower($merk);
	}
}
$mobil = new Mobil();
echo $mobil->sebutMerk();