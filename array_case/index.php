<?php 
	
	// Andi memilliki keranjang berisi telur, daging, dan sayur.
	// Tampilkan isi keranjang andi

	 $keranjangAndi = ["telur ", "daging ", "sayur"];

	// foreach ($keranjangAndi as $keranjang) {
	// 	echo $keranjang; 
	// }


	// Budi memiliki kelereng warna hitam ,merah, dan emas
	// Tampilkan semua kelereng Budi.
	// jika kelereng Budi berwarna emas, maka tampilkan
	// ini kelereng mahal

	$kelerengBudi = ["hitam ","merah ", " Emas"];

	foreach ($kelerengBudi as $kelereng ) {
		if ($kelereng == " Emas") {
			echo "ini Kelereng mahal :";
		}else{
			echo "kelereng Murahan";
		}
		echo $kelereng;

	}
	


 ?>