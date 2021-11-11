<h1><u>Mengatur Nilai Properti</u></h1>
<?php
class Mobil{
	public $merk = 'toyota';
	public $tipe = 'fortuner';
	public $tahun = 2016;
	public $warna = 'putih';
}
$mobil = new Mobil();

// mengatur nilai properti
$mobil->merk = 'suzuki';
$mobil->tipe = 'ertiga';
$mobil->tahun = 2014;
$mobil->warna = 'hitam';

// mencetak nilai properti
echo "mobil $mobil->merk <br>";
echo "model $mobil->tipe <br>";
echo "tahun $mobil->tahun <br>";
echo "warna $mobil->warna ";