<?php

require_once "Abstract.php";

// class PersegiPanjang
class PersegiPanjang extends Bentuk2D {
    public $panjang; // variable panjang
    public $lebar; // variable lebar

    // method namaBidang()
    public function namaBidang() {
        return "Persegi Panjang"; 
    }

    // method luasBidang()
    public function luasBidang() {
        return $this->panjang * $this->lebar; // rumus luas persegi panjang = p * l
    }

    // method kelilingBidang()
    public function kelilingBidang() {
        return 2 * ($this->panjang + $this->lebar); // rumus keliling persegi panjang = 2 * (p + l)
    }
}


?>