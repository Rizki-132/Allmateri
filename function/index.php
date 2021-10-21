<?php 

	// cara 1
	// function getbudiItem(){
	// 	$barangBudi = ["Robot ", "Kelereng ", "handphone"];
	// 	foreach ($barangBudi as $barang ) {
	// 		echo $barang;
	// 	}
	// }

	// function deleteArray(){
	// 	$barangBudi = ["Robot ", "Kelereng ", "handphone"];
	// 	unset ($barangBudi[0]);
	// 	foreach ($barangBudi as $barang) {
	// 		echo $barang;
	// 	}
	// }

	// // getbudiItem();
	// deleteArray();


	// cara2 
	function getbudiItem($barangBudi){
		foreach ($barangBudi as $barang ) {
			echo $barang;
		}
	}

	function deleteArray(){
		$barangBudi = ["Robot ", "Kelereng ", "handphone"];
		unset($barangBudi[2]);
		getbudiItem($barangBudi);
	}

	// getbudiItem();
	deleteArray ();
 ?>