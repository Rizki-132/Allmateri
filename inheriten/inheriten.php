<?php 

	class Handphone {

		public $warna ;
		public $bahan ;

		public function __construct($warna, $bahan){


			$this->warna = $warna;
			$this->bahan = $bahan;


		}

		function phoneCall(){

			echo "tuuuut.....";
		}

	} 

	class smarthphone extends Handphone{

		public $os;

		public function __construct($warna, $bahan, $os){

			parent::__construct($warna,$bahan);
			$this->os = $os;

		}
		
		function playGame (){

			echo "main....";
		}

	}

	$smarthphone = new smarthphone("hijau", " Besi", "Android");
	$Handphone = new Handphone("merah", "Besi", "Android");

	echo $smarthphone->bahan. " Handphone Saya berwarna ". $Handphone->warna;

		

 ?>	
