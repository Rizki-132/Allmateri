<?php 

	// buatlah oblek mobil dengan atribut, jenis mobil dan warna mobil.
	// memiliki method menyalakan mesin.

	// class car {

	// 	public $warnamobil;
	// 	public $jenismobil;

	// 	function __construct($warnamobil, $jenismobil){

	// 		$this->warnamobil = $warnamobil;
	// 		$this->jenismobil = $jenismobil;
	// 	}

	// 	function startEngine(){

	// 		echo "ngeeeng....";

	// 	}
	// }

	// $carSedan = new car(" red ", " sedan ");
	// echo 'saya punya mobil'.$carSedan->jenismobil.'dengan warna'. $carSedan->warnamobil;


	// buatlah handphon dengan atribut kualitas kamera, nama handphone dan method untuk mengambil foto.


	class handphone {

		public $kulitascamera;
		public $jenishandphone;
		public $namahandphone;

		function __construct($kulitascamera, $jenishandphone, $namahandphone){

			$this->kulitascamera = $kulitascamera;
			$this->jenishandphone = $jenishandphone;
			$this->namahandphone = $namahandphone;
		}

		function mengambilfoto(){

			echo "ckreeek...";

		}
	}

	$handphone = new handphone(" HD ", " Android ", " layar sentuh ");
	$handphonetouch = new handphone(" HD ", " Android ", " Realme 5 ", );

	echo '<p>saya punya handphone dengan kulitas camera'.$handphone->kulitascamera.'handphone jenisnya adalah'. $handphone->jenishandphone. ' nama handphonenya adalah '. $handphone->namahandphone.'</p>';
	
	echo 'saya punya handphone dengan kulitas camera'.$handphonetouch->kulitascamera.'handphone jenisnya adalah'. $handphonetouch->jenishandphone. ' nama handphonenya adalah '. $handphonetouch->namahandphone;

	$handphone->mengambilfoto();


 ?>