<?php 
namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model{
    
  
    protected $table = "mahasiswa";
    protected $allowedFields=['id_mahasiswa','email','username_mahasiswa','password'];
}

?>