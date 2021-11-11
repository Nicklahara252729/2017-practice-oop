<h1><u>Membuat Objek</u></h1>
<?php
class Mobil{
	public $merk;
	public $tipe;
	public $tahun;
	public $warna = "biru";
}
$mobil = new Mobil();
var_dump($mobil);