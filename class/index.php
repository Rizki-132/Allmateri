<?php 

	class cat {

		public $warnakucing = "hitam";
		public $jeniskucing = "Persia";

		function Mengeong() {

			echo ' meooong....';
		}

	}

	$cat = new cat ();

	echo 'Saya punya kucing berwarna '.$cat->warnakucing. ' dan Jenisnya '.$cat->jeniskucing;
	$cat->Mengeong();

 ?>