<h1><u>Mengenal Method Chaining</u></h1>
<h3>Dengan Method Chaining</h3>
<?php
class Mobil{
	public $tangki = 0;

	public function isiBensin($liter){
		$this->tangki += $liter;
		return $this;
	}

	public function kendarai($jarak){
		$terpakai = $jarak / 20;
		$this->tangki -= $terpakai;
		return $this;
	}
}
$mobil = new Mobil();
$sisaBensin = $mobil->isiBensin(2)
					->kendarai(20)
					->tangki;
echo "sisa bensin = ".$sisaBensin." liter ";