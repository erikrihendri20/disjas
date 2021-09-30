<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public $userModel = null;

    public function __construct()
    {
        session();
        $this->userModel = new UserModel();
    }

    public function login()
    {
        if(isset($_POST['login'])){
            $credential = $this->request->getPost('user');
            $user = $this->userModel->where('username' , $credential)->orWhere('email' , $credential)->get()->getRowArray();
            if(!$user){
                $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									user tidak ditemukan!
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>';
				$flash = session()->setFlashdata('flash', $flash);
                return redirect()->back();
            }
            if(!password_verify($this->request->getPost('password') , $user['password'])){
                $flash = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									password salah!
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>';
				$flash = session()->setFlashdata('flash', $flash);
                return redirect()->back();
            }
            session()->set('log' , true);
            session()->set('nama' , $user['nama']);
            session()->set('username' , $user['username']);
            session()->set('email' , $user['email']);
            $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
									anda berhasil masuk!
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>';
			$flash = session()->setFlashdata('flash', $flash);
            return redirect()->to(base_url());
        }
        $data = [
            'title' => 'Login',
            'script' => 'login',
            'style' => 'login',
            'active' => 'login',
            'link' => '',
        ];
        return view('auth/login' , $data);
    }

    public function logout()
    {
        if(session()->log){
            session()->remove(['log' , 'nama' , 'username' , 'email']);
        }
        $flash = '<div class="alert alert-success alert-dismissible fade show" role="alert">
									anda berhasil keluar!
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>';
		$flash = session()->setFlashdata('flash', $flash);
        return redirect()->to(base_url());
    }

    // public function registrasi()
    // {
    //     $nama = 'admin';
    //     $username = 'admin';
    //     $password = 'admin';
    //     $this->userModel->save(['username' => $username , 'password' => password_hash($password , PASSWORD_DEFAULT) , 'nama' => $nama]);
    // }
}
