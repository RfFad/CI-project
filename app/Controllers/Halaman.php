<?php

namespace App\Controllers;

class Halaman extends BaseController
{
    public function index(){
         return view('halaman');
        
         
        }
        public function logout(){
        session()->destroy();
        return redirect()->to ('login');
        
    }
}
