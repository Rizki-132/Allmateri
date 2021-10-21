<?php 

	class Handphone{

		public $warna ;
		public $bahan ;

		public function __construct($warna, $bahan){


			$this->warna = $warna;
			$this->bahan = $bahan;


		}
		// akan di overide
		function phoneCall(){

			echo "tuuuut.....";
		}

		// overload

		function kirimPesan(){

			echo "kirim sms.....";
		}

	} 

	class smarthphone extends Handphone{

		public $os;

		function __construct($warna , $bahan, $os){

			parent:: __construct($warna , $bahan);

			$this->os = $os;

		}
		
		// overriding
		function phoneCall(){

			echo "preeet....";
		}

		// overloading

		function kirimPesan($namaorang ="Rizki"){

			echo "Sms ke....".$namaorang;
		}
	}

	$smarthphone = new smarthphone("hijau", " Besi", "Android");
	$Handphone = new Handphone("merah", "Besi", "Android" );

	echo $Handphone->kirimPesan();
	echo $smarthphone->kirimPesan("Rizki");
	

 ?>