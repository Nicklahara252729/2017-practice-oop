<h1><u>Menambah Method</u></h1>
<?php
class Mobil{
	public $merk = 'toyota';
	public $tipe = 'fortuner';
	public $tahun = 2016;
	public $warna = 'putih';

	public function maju(){
		echo "brooom";
	}
}
$mobil = new Mobil();

// Mengatur nilai properti 
$mobil->merk = 'suzuki';
$mobil->tipe = 'ertiga';
$mobil->tahun = 2014;
$mobil->warna = 'hitam';

// Mencetak nilai properti
echo "Mobil $mobil->merk <br>";
echo "Model $mobil->tipe <br>";
echo "Tahun $mobil->tahun <br>";
echo "Warna $mobil->warna <br>";

//Menjalankan method maju
$mobil->maju();