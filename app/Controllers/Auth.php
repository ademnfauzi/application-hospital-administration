<?php

namespace App\Controllers;

use CodeIgniter\Session\Session;
use App\Models\UserModel;

class Auth extends BaseController
{
	protected $UserModel;
	public function __construct()
	{
		
	}
	public function index()
	{
		$data =[
			'title' => 'Login',
			'validation' => \Config\Services::validation()
		];
		return view('/Auth/index',$data);
	}
	public function login() {
		$post = $this->request->getVar();
		if (!$this->validate([
            'username' => 'required',
			'password' => 'required',
        ])) {
            # code...
            return redirect()->to('/Auth')->withInput();
        };
		$UserModel = new UserModel();
		$user = $UserModel->where('username', $post['username'])->first();
		if($user){
			if ($user['status'] === 'Aktif') {
				# code...
				if (password_verify($post['password'], $user['password'])) {
					# code...
					$sessData = [
						'id_user' => $user['id_user'],
						'username' => $user['username'],
						'nama' => $user['nama'],
						'email' => $user['email'],
						'password' => $user['password'],
						'level' => $user['level'],
						'status' => $user['status'],
						'isLoggedIn' => true
					];
					session()->set($sessData);
	
					if ($user['level'] == 'Admin'){
						return redirect()->to('/dashboard');
					}else if ($user['level'] == 'User'){
						return redirect()->to('/dashboard');
					}else{
						session()->setFlashdata('pesan','Hak Akses Anda Tidak Sesuai !');
						return redirect()->to('/Auth/index')->withInput();
					}
				}
				session()->setFlashdata('pesan','Password yang Anda masukkan salah ! ');
				return redirect()->to('/Auth/index')->withInput();
			}
			session()->setFlashdata('pesan','Akun Anda sedang tidak aktif !');
			return redirect()->to('/Auth/index')->withInput();
		}
		session()->setFlashdata('pesan','Username atau Password yang Anda masukkan salah !');
		return redirect()->to('/Auth/index')->withInput();
	}
	public function logout()
    {
        session()->remove('id_user');
        session()->remove('username');
		session()->remove('nama');
		session()->remove('email');
        session()->remove('password');
        session()->remove('level');
		session()->remove('status');
        session()->remove('created_by_id');
		session()->remove('created_at');
		session()->remove('updated_at');
		session()->remove('updated_by_id');
        session()->destroy();

        return redirect()->to('/Auth/login');
    }
}