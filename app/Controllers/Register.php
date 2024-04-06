<?php

namespace App\Controllers;

use App\Models\Mahasiswa;

class Register extends BaseController{
    

    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'username_mahasiswa'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            
        ];
         
        if($this->validate($rules)){
            $model = new Mahasiswa();
            
            $data = [
                'username_mahasiswa'     => $this->request->getVar('username_mahasiswa'),
                'email'    => $this->request->getVar('email'),
                'password' => md5($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');

        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }
}
