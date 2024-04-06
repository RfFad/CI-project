<?php 
namespace App\Libraries;
class Lib_halaman {
    public function info ($parameter){
        return"Ditulis Untuk: <b>".$parameter['kategori']."</b>,Ditulis oleh:<b>".$parameter['ditulis']."</b>";
    }
}