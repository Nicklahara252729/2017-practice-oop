<h1><u>Mengakses Properti</u></h1>
<?php
class Mobil{
	public $merk ='toyota';
	public $tipe = 'fortuner';
	public $tahun =  2016;
	public $warna = 'putih';
}
$mobil = new Mobil();
echo "mobil $mobil->merk <br>";
echo "model $mobil->tipe <br>";
echo "tahun $mobil->tahun \n";