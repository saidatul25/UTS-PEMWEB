<?php
class Iklan {
		public $namaiklan,
				$durasi,
				$letak,
				$ukuran;


		public function __construct( $namaiklan, $durasi, $letak, $ukuran ) {
			$this->namaiklan = $namaiklan;
			$this->durasi = $durasi;
			$this->letak = $letak ;
			$this->ukuran = $ukuran;
		}

		public function __toString() {
			return "Nama Iklan : " . $this->namaiklan . ". <br> Durasi Iklan : ". $this->durasi. ". <br> Letak Iklan ". $this->letak. "Ukuran Iklan: ". $this->ukuran ;
		}


	}

	$Laporaniklan1 = new Iklan("Samsung", "1 bulan", "Sidebar", "300x250 px");
	
	echo "LAPORAN IKLAN: ";
	echo "<br>";
	echo $Laporaniklan1;