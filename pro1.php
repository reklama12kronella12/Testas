<?php
	
	class Pavz {

	public $kelias = 'ss';

	public static function test(){
		echo "testing<br>";
	}

	public function test1(){
		echo $this->kelias;
	}

	
}

class File{

	private $keliukas;
	private $duomenys;


		//setter's
	public function _setKeliukas($x){
		$this->keliukas=$x;

	}

	public function _setDuomenys($x){
		$this->duomenys=$x;
	}

		//getter's

	public function _getKeliukas(){
		return $this->keliukas.'<br>';
	}
	public function _getDuomenys(){
		return $this->duomenys.'<br>';
	}

	public function __construct($x,$y)
		{
			$this->duomenys=$x;
			$this->keliukas=$y;
		}

}

class FileReader{

	public function reader(array $paths){
		echo "sekmigai perduotas kelias<br>";

		$objArray = array();
		foreach ($paths as $path) {
			
			$objArray[] = new File();
			$tempor = new File();

			$temp = fopen($path, 'r') or die("Nepavyko atidaryti <br>");
			$tempor->_setDuomenys(fread($temp,filesize($path)));
			$tempor->_setKeliukas($path);
			$objArray[]=$tempor;
			fclose($temp);

		}
		return $objArray;
		
	}	

}

$galutinis = array();
$paths = array('C:\xampp\htdocs\pro\failas.txt', 'C:\xampp\htdocs\pro\failas1.txt','C:\xampp\htdocs\pro\failas2.txt' );

$failas1 =  new File();
$skaitytojas = new FileReader();
$galutinis = $skaitytojas ->reader($paths);


foreach ($galutinis as $failiukas) {
	
	$failas1=$failiukas;
	echo $failas1->_getKeliukas();
	echo $failas1->_getDuomenys();
	
}



?>
 