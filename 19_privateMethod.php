<h1><u>Private Method</u></h1>
<?php
class Mobil{

	public function maju(){
		$maju = $this->injakKopling();
		$maju .= $this->ubahPerseneling();
		$maju .= $this->injakGas();
		$maju .= 'broommm.....';
		echo $maju;
	}

	private function injakKopling(){
		return "injak kopling <br>";
	}

	private function ubahPerseneling(){
		return "ubah perseneling <br>";
	}

	private function injakGas(){
		return "injak gas <br>";
	}
}
$mobil = new Mobil();
$mobil->maju();