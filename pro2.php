<?php

	class Testas{

		private $vardas;
		private $amzius;

		//setter
			public function _set($pavad, $age){

				$this->vardas=$pavad;
				$this->amzius=$age;

			}

		//getter

			public function _get(){
				
				return $this->vardas."<br>".$this->amzius;

			}

			public function __construct($x,$y)
				{
					$this->vardas=$x;
					$this->amzius=$y;
				}


	} 

	$testasObj =  new Testas('matas','19');
	//$testasObj->_set('matas','20');
	echo $testasObj->_get();

 ?>