<h1><u>Mencegah inheritance</u></h1>
<?php
// hasil memang error
//parent class
final class Mobil{
	public function mesin(){
		return 'bensin';
	}
}

//child class
class MobilListrik extends Mobil{
	public function mesin(){
		return 'motor elektrik';
	}
}

//instance Mobillistrik 
$tesla = new Mobillistrik();
echo $tesla->mesin();