<?php

namespace App\Controllers;
use App\Models;
use App\Models\Mahasiswa;

class Login extends BaseController
{
    public function index(){
         helper(['form']);
         echo view('login');
      
    }

public function auth(){
     $session=session();
     $model=new \App\Models\Mahasiswa();
     $username=$this->request->getPost('username');
     $password=$this->request->getVar('password');
     $data=$model->where('username', $username)->first();
     if($data){
          $pass = $data['password'];
          $verifiy_pass= password_verify($password, $pass);
          if($username='' or $password= ''){
               $err="masukkan username dan password";
          }
          if($verifiy_pass){
               $sess_data=[
                    'id_mahasiswa' => $data['id_mahasiswa'],
                    'username_mahasiswa' => $data['username_mahasiswa'],
                    'password' => $data['password'],
                    'login'=> TRUE
               ];
               session()->set($sess_data);
               return redirect()->to('/halaman');

          }else{
               $session->setFlashdata('msg', 'Password salah');
               return redirect()->to('/login');
          }
     }else{
          $session->setFlashdata('msg', 'Username tidak ada');
          return redirect()->to('/login');
     }
}
}
