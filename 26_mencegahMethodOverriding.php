<h1><u>Mencegah Method Overriding</u></h1>
<?php

// hasilny memang error
//parent class
class Mobil{
	final public function mesin(){
		return ' mesin bensin';
	}
}

//child class
class MobilListrik extends Mobil{
	public function mesin(){
		return 'Motor elektrik ';
	}
}

//Instance tesla 
$tesla = new MobilListrik();
echo $tesla->mesin();