<?php 

	class cat {

		public $warnakucing ;
		public $jeniskucing ;
		public $warnamata ;

		// constructor
		// contructor adalah sebuah function dimana dia akan //di panggil pertama setelah pembuatan objek.

		function __construct($warnakucing, $jeniskucing, $warnamata){

			$this->warnakucing = $warnakucing ;
			$this->jeniskucing = $jeniskucing ;
			$this->warnamata = $warnamata;

		}

		function Mengeong() {

			echo ' meooong....';
		}

	}

	$cat = new cat (" hitam ", " kucing biasa ", " hitam ");
	$catanggora = new cat(" Putih ", " Anggora ", " biru ");
	$catkampung = new cat(" merah ", " kampung ", " cokelat " );

	echo '<p>saya punya kucing'.$cat->warnakucing.' dan jenisnya adalah '.$cat->jeniskucing.' warna matanya adalah'.$cat->warnamata. '</p>';
	echo '<p>saya punya kucing'.$catanggora->warnakucing.' dan jenisnya'.$catanggora->jeniskucing.' warna matanya adalah'.$catanggora->warnamata. '</p>';
	echo '<p>saya punya kucing'.$catkampung->warnakucing.' dan jenisnya'.$catkampung->jeniskucing.' warna matanya adalah'.$catkampung->warnamata. '</p>';

 ?>