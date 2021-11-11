<h1><u>Keyword This Utk Properti</u></h1>
<?php
class Mobil{
	public $merk = 'BMW';
	public function sebutMerk(){
		// mengakses properti $merk dari method sebutMerk
		return $this->merk;
	}
}

$mobil = new Mobil();
echo $mobil->sebutMerk();