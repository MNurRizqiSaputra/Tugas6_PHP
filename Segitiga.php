<?php

require_once "Abstract.php";

// class Segitiga
class Segitiga extends Bentuk2D {
    public $alas; // variable alas
    public $tinggi; // variable tinggi

    // method namaBidang()
    public function namaBidang() {
        return "Segitiga <br> (Segitiga sama sisi)";
    }

    // method luasBidang()
    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi; // rumus luas segitiga = 1/2 * a * t
    }

    // method kelilingBidang()
    public function kelilingBidang() {
        // sebelumnya, tidak dijelaskan tipe segitiga secara spesifik dalam rincian tugas, maka asumsi segitiga sama sisi
        return 3 * $this->alas; // rumus keliling segitiga sama sisi = 3 * a
    }
}

?>