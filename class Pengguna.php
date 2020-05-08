<?php

class Pengguna{
		public $nama,
				$email;


		public function __construct( $nama, $email) {
			$this->nama = $nama;
			$this->email = $email;
		}

		public function __toString() {
			return "Nama : " . $this->nama . ". <br> Alamat Email : ". $this->email;
	}
}
	$Pengguna1 = new Pengguna("Fifit", "fifit@gmail.com");
	$Pengguna2 = new Pengguna("Saidatul", "saidatul@gmail.com");
	
	echo "Daftar Pengguna: ";
	echo "<br>";
	echo $Pengguna1;
	echo "<br>";
	echo $Pengguna2;
	


class Artikel extends Pengguna{
		public $judulartikel,
				$isi;


		public function __construct( $judulartikel, $isi, $nama) {
			$this->judulartikel = $judulartikel;
			$this->isi = $isi;
			$this->creator = $nama ;
		}

		public function __toString() {
			return "Judul: " . $this->judulartikel . ". <br> Nama creator: " . $this->creator . ". <br> Isi: ". $this->isi;
		}


	}

	$Artikel1 = new Artikel("Judul Artikel", "isi artikel", "Maghfiroh");
	
	echo "<br><br>";
	echo "ARTIKEL: ";
	echo "<br>";
	echo $Artikel1;