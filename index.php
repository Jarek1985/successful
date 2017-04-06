<?php

class Car{

	private $year;
	
	private $name;

	private $colour;

	public function __construct($year, $name, $colour){		//
		$this->year = $year;
		$this->name = $name;
		$this->colour = $colour;

	}

	public function goFast(){    // stworzenie metody
		echo 'brumbrum';	
	}

	public function showDetails(){     // kolejne metoda
		echo "Rok: ".$this->year."<br>";
		echo "Nazwa: ".$this->name."<br>"; 
		echo "Kolor: ".$this->colour."<br>"; 
	}

	public function getYear(){
		return $this->year;
	}

}

// $opelAstra = new Car('1998', 'Opel Astra', 'silver'); // utworzyliśmy nowy obiekt klasy Car
// $opelAstra->year = 1998;
// $opelAstra->name = 'Opel Astra';
// $opelAstra->colour = 'silver';

// $opelAstra->goFast(); // wywołaliśmy metodę goFast obiektu opelAstra
// echo "<br><br>";

// $opelAstra->showDetails();     // wyświetlamy na stronie składowe stworzonej metody

// var_dump($opelAstra);

// $nissan = new Car('2004', 'Primera', 'blue');

// var_dump($nissan);

// $nissan->showDetails();

$samochody = array();
$samochody[] = new Car('1998', 'Opel Astra', 'silver');
$samochody[] = new Car('2004', 'Primera', 'blue');
$samochody[] = new Car('2014', 'Peugeot', 'red');
$samochody[] = new Car('1979', 'Syrenka', 'yellow');

// var_dump($samochody);

foreach($samochody as $samochod){
	echo $samochod->getYear().'<br>';

}

