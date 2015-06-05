<?php
include "Tombol.php";

class TombolNuklir extends Tombol {
	public function tekan() {
		echo "Bom nuklir telah diluncurkan!\n";
		sleep(3); // delay for 3 seconds
		echo "BooooMMMmmmm!!!!\n";
	}
}