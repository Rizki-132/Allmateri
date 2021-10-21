<?php 
	
	// if (kondisi) {
	// 	# statement
	// }elseif (kondisi) {
	// 	# statement
	// }
	// elseif (kondisi) {
	// 	# statement
	// }

	$uangAndi = 2000 ;
	$hargaSosis = 3000 ;
	$hargaTelur = 1000 ;

	if ($uangAndi >= $hargaSosis) {
		echo 'Beli sosis';
	}elseif ($uangAndi >= $hargaTelur) {
		echo 'beli telur';
	}else{

		echo 'beli yang lain';
	}
	// andi punya uang 3000, harga sosis goreng 3000, harga telur 1000
	// harga barang lain 500


 ?>