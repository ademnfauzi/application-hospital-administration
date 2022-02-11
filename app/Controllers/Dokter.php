<?php

namespace App\Controllers;

use App\Models\DokterModel;
use CodeIgniter\Session\Session;

class Dokter extends BaseController
{
    protected $UserModel;
    public function __construct()
    {
        $this->DokterModel = new DokterModel();
        helper(['form', 'url']);
        $this->form_validation = \Config\Services::validation();
    }
	public function index()
	{
        $data = [
            'title' => 'Data Dokter',
            'dokter' => $this->DokterModel->getDokter(),
        ];
        // dd($data);
		return view('Dokter/index', $data);
	}
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Dokter',
            'validation' => \Config\Services::validation(),
        ];
        return view('Dokter/tambah', $data);
    }
    public function detail($id_dokter, $kode_dokter)
	{
        $data = [
            'title' => 'Data Detail Dokter',
            'detailDokter' => $this->DokterModel->getDokter($id_dokter)
        ];
		return view('Dokter/detail', $data);
	}
    public function save()
    {
        // validasi
        $validate = [
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'divisi' => $this->request->getVar('divisi'),
            'status' => $this->request->getVar('status'),
        ];
        if($this->form_validation->run($validate, 'dokter') == FALSE){
            // mengembalikan nilai input yang sudah dimasukan sebelumnya
            session()->setFlashdata('inputs', $this->request->getPost());
            // memberikan pesan error pada saat input data
            session()->setFlashdata('errors', $this->form_validation->getErrors());
            // kembali ke halaman form
            return redirect()->to('/Dokter/tambah')->withInput();
        } else {
            // dd('berhasil');
            $fileGambar = $this->request->getFile('image');
            // dd($fileGambar);
            if ($fileGambar->getError() == 4) {
                # code...
                $gambar = 'default.png';
            } else {
                $gambar = $fileGambar->getRandomName();
                $fileGambar->move('Assets/img/profile/', $gambar);
            }
            $data = [
                'kode_dokter' => random_int(1000, 10000000),
                'nama' => $this->request->getVar('nama'),
                'email' => $this->request->getVar('email'),
                'phone' => $this->request->getVar('phone'),
                'divisi' => $this->request->getVar('divisi'),
                'image' => $gambar,
                'status' => $this->request->getVar('status'),
                'created_by_id' => Session()->get('id_user')
            ];
            $this->DokterModel->save($data);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->to('/Dokter/index');
        }
    }
    public function edit($id_dokter, $kode_dokter)
    {
        $data = [
            'title' => 'Edit Dokter',
            'validation' => \Config\Services::validation(),
            'dokter' => $this->DokterModel->getDokter($id_dokter),
        ];
        return view('Dokter/edit', $data);
    }
    public function update($id_dokter, $kode_dokter) {
        $validate = [
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'divisi' => $this->request->getVar('divisi'),
            'status' => $this->request->getVar('status'),
        ];
        if($this->form_validation->run($validate, 'dokter_edit') == FALSE){
            // mengembalikan nilai input yang sudah dimasukan sebelumnya
            session()->setFlashdata('inputs', $this->request->getPost());
            // memberikan pesan error pada saat input data
            session()->setFlashdata('errors', $this->form_validation->getErrors());
            // kembali ke halaman form
            return redirect()->to('/Dokter/edit' .'/'. $id_dokter .'/'. $kode_dokter)->withInput();

        } else {
            $fileGambar = $this->request->getFile('image');
            // dd($fileGambar);
            if ($fileGambar->getError() == 4) {
                # code...
                $gambar = $this->request->getVar('gambarLama');
            } else {
                if ($fileGambar !== 'default.png') {
                    # code...
                    unlink('Assets/img/profile/' . $this->request->getVar('gambarLama'));
                }
                $gambar = $fileGambar->getRandomName();
                $fileGambar->move('Assets/img/profile', $gambar);
            }
            $data = [
                'nama' => $this->request->getVar('nama'),
                'email' => $this->request->getVar('email'),
                'phone' => $this->request->getVar('phone'),
                'divisi' => $this->request->getVar('divisi'),
                'image' => $gambar,
                'status' => $this->request->getVar('status'),
                'updated_by_id' => Session()->get('id_user'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
            // dd($data);
            $this->DokterModel->getEdit($id_dokter, $data);
            session()->setFlashdata('pesan', 'Data berhasil diupdate');
            return redirect()->to('/Dokter/index');
        }
    }
    public function delete($id_dokter, $kode_dokter)
    {
        $this->DokterModel->del($id_dokter);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Dokter');
    }
}
