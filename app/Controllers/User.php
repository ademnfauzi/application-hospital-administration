<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Session\Session;

class User extends BaseController
{
    protected $UserModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
        helper(['form', 'url']);
        $this->form_validation = \Config\Services::validation();
    }
	public function index()
	{
        $data = [
            'title' => 'Data User',
            'user' => $this->UserModel->getUser(),
        ];
		return view('User/index', $data);
	}
    public function detail($id_user, $kode_user)
	{
        $data = [
            'title' => 'Data Detail User',
            'detailUser' => $this->UserModel->getUser($id_user)
        ];
		return view('User/detail', $data);
	}
    public function tambah()
    {
        $data = [
            'title' => 'Tambah User',
            'validation' => \Config\Services::validation()
        ];
        return view('User/tambah', $data);
    }
    public function save()
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'level' => $this->request->getVar('level'),
            'status' => $this->request->getVar('status'),
        ];
        if($this->form_validation->run($data, 'user') == FALSE){
            // mengembalikan nilai input yang sudah dimasukan sebelumnya
            session()->setFlashdata('inputs', $this->request->getPost());
            // memberikan pesan error pada saat input data
            session()->setFlashdata('errors', $this->form_validation->getErrors());
            // kembali ke halaman form
            return redirect()->to('/User/tambah')->withInput();
        } else {
            $insert = [
                'kode_user' => random_int(1000, 10000000),
                'nama' => $this->request->getVar('nama'),
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'email' => $this->request->getVar('email'),
                'level' => $this->request->getVar('level'),
                'status' => $this->request->getVar('status'),
                'created_by_id' => Session()->get('id_user')
            ];
            $this->UserModel->save($insert);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->to('/User/index');
        }
    }
    
    public function edit($id_user, $kode_user)
    {
        $data = [
            'title' => 'Edit User',
            'validation' => \Config\Services::validation(),
            'user' => $this->UserModel->getUser($id_user)
        ];
        return view('User/edit', $data);
    }
    public function update($id_user,$kode_user)
    {
        $validate = [
            'kode_user' => $this->request->getVar('kode_user'),
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'level' => $this->request->getVar('level'),
            'status' => $this->request->getVar('status'),
        ];
        if($this->form_validation->run($validate, 'user_edit') == FALSE){
            // mengembalikan nilai input yang sudah dimasukan sebelumnya
            session()->setFlashdata('inputs', $this->request->getPost());
            // memberikan pesan error pada saat input data
            session()->setFlashdata('errors', $this->form_validation->getErrors());
            // kembali ke halaman form
            return redirect()->to('/User/edit' .'/'. $id_user .'/'. $kode_user)->withInput();
        } else { 
            $data = [
                'id_user' => $id_user,
                'kode_user' => $this->request->getVar('kode_user'),
                'nama' => $this->request->getVar('nama'),
                'username' => $this->request->getVar('username'),
                // 'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'email' => $this->request->getVar('email'),
                'level' => $this->request->getVar('level'),
                'status' => $this->request->getVar('status'),
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by_id' => Session()->get('id_user'),
            ];

            $this->UserModel->getEdit($id_user, $data);
            session()->setFlashdata('pesan', 'Data berhasil diupdate');
            return redirect()->to('/User');
        }
    }
    public function delete($id_user, $kode_user)
    {
        $this->UserModel->del($id_user);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/User');
    }
}
