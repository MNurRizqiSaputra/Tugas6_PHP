<?php

require_once 'Abstract.php'; 

// class Lingkaran
class Lingkaran extends Bentuk2D {
    public $jari2; // variable jari2

    // method namaBidang()
    public function namaBidang() {
        return "Lingkaran";
    }

    // method luasBidang(), menggunakan pi() = 3.14... (fungsi bawaan PHP)
    public function luasBidang() {
        return pi() * $this->jari2 * $this->jari2; // rumus luas lingkaran = pi * r^2
    }

    // method kelilingBidang(), menggunakan pi() = 3.14... (fungsi bawaan PHP)
    public function kelilingBidang() {
        return 2 * pi() * $this->jari2; // rumus keliling lingkaran = 2 * pi * r
    }
}

?>