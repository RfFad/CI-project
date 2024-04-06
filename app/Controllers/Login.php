<?php

namespace App\Controllers;


class Login extends BaseController
{
   
    public function index()    {
        helper(['form']);
        $Mahasiswa= new \App\Models\Mahasiswa();
        $login= $this->request->getPOst('login');
        $logout=$this->request->getPOst('logout');
        if($login){
            $username= $this->request->getPost('username_mahasiswa');
            $password= $this->request->getPost('password');
            if($username == '' or $password == ''){
                $err="masukkan username dan password ";

            }
            if(empty($err)){
                $dataMember = $Mahasiswa-> where ('username_mahasiswa', $username)->first();
                
                if($dataMember['password']!= md5("$password")){
                    $err="Sandi anda salah";
                }
            }
            if(empty($err)){
                $Datasesi = [
                    'id_mahasiswa' => $dataMember['id_mahasiswa'],
                    'username_mahasiswa' => $dataMember['username_mahasiswa'],
                    'password' => $dataMember['password'],
                    'login' => TRUE
                ];
                session()->set($Datasesi);
                return redirect()->to(base_url('halaman'));
            }
            if($err){
                session()->setFlashdata('username_mahasiswa', $username);
                session()->setFlashdata('msg', $err);
                return redirect()->to(base_url('login'));
            }
           
        }
        return view('login');

   
    }
   


}
