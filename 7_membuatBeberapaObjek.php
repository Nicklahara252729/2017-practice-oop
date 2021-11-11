<h1><u>Membuat Beberapa Objek</u></h1>
<?php
class Mobil{
	public $merk = '';
	public $tipe = '';

	public function maju(){
		return "Broooommmm....... <br>";
	}
}

// membuat dan mengatur properti objek 1
$mobil = new Mobil();
$mobil->merk = 'suzuki';
$mobil->tipe = 'ertiga';

// mencetak properti & menjalankan method maju objek 1
echo $mobil->merk." ".$mobil->tipe." ".$mobil->maju();

// membuat dan mengatur properti objek 2
$mobil2 = new Mobil();
$mobil2->merk = 'audi';
$mobil2->tipe = 'venom';

// mencetak properti & menjalankan method maju onjek 2
echo $mobil2->merk." " .$mobil2->tipe." ".$mobil2->maju();