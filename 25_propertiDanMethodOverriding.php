<h1><u>Properti dan Method Overrind</u></h1>
<?php

//parent class
class mobil{

	public $merk = 'toyota';

	public function klakson(){
		return ' tin tin';
	}
}

//child class
class MobilSport extends Mobil{
	public $merk = 'ferrari';

	public function klakson(){
		return ' tet tot..';
	}
}

//instance mobilsport
$ferrari = new MobilSport();
echo $ferrari->merk;
echo $ferrari->klakson();