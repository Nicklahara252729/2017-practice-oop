<h1><u>Mengenal Method Chaining</u></h1>
<h3>Tanpa Method Chaining</h3>
<?php
class Mobil{
	public $tangki = 0;

	public function isiBensin($liter){
		$this->tangki += $liter;
	}

	public function kendarai($jarak){
		$terpakai = $jarak /20;
		$this->tangki -= $terpakai;
	}
}
$mobil = new Mobil();
$mobil->isiBensin(2);
$mobil->kendarai(20);
$sisaBensin = $mobil->tangki;
echo "sisa bensin = ".$sisaBensin."liter";