<?php

namespace App\Controllers;
use App\Models\PasienModel;
use CodeIgniter\Session\Session;

class Pasien extends BaseController
{
    protected $PasienModel;
    public function __construct()
    {
        $this->PasienModel = new PasienModel();
        helper(['form', 'url']);
        $this->form_validation = \Config\Services::validation();
    }
	public function index()
	{
        $data = [
            'title' => 'Data Pasien',
            'pasien' => $this->PasienModel->getPasien(),
        ];
		return view('Pasien/index', $data);
	}
    public function detail($id_pasien, $kode_pasien)
	{
        $data = [
            'title' => 'Data Detail User',
            'detailPasien' => $this->PasienModel->getPasien($id_pasien)
        ];
		return view('Pasien/detail', $data);
	}
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Pasien',
            'validation' => \Config\Services::validation()
        ];
        return view('Pasien/tambah', $data);
    }
    public function save()
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'phone' => $this->request->getVar('phone'),
            'status' => $this->request->getVar('status'),
        ];
        if($this->form_validation->run($data, 'pasien') == FALSE){
            // mengembalikan nilai input yang sudah dimasukan sebelumnya
            session()->setFlashdata('inputs', $this->request->getPost());
            // memberikan pesan error pada saat input data
            session()->setFlashdata('errors', $this->form_validation->getErrors());
            // kembali ke halaman form
            return redirect()->to('/Pasien/tambah')->withInput();
        } else {
            $insert = [
                'kode_pasien' => random_int(1000, 10000000),
                'nama' => $this->request->getVar('nama'),
                'nik' => $this->request->getVar('nik'),
                'phone' => $this->request->getVar('phone'),
                'status' => $this->request->getVar('status'),
                'created_by_id' => Session()->get('id_user')
            ];
            $this->PasienModel->save($insert);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->to('/Pasien/index');
        }
    }
    
    public function edit($id_pasien, $kode_pasien)
    {
        $data = [
            'title' => 'Edit Pasien',
            'validation' => \Config\Services::validation(),
            'pasien' => $this->PasienModel->getPasien($id_pasien)
        ];
        return view('Pasien/edit', $data);
    }
    public function update($id_pasien, $kode_pasien)
    {
        $validate = [
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'phone' => $this->request->getVar('phone'),
            'status' => $this->request->getVar('status'),
        ];
        if($this->form_validation->run($validate, 'pasien_edit') == FALSE){
            // mengembalikan nilai input yang sudah dimasukan sebelumnya
            session()->setFlashdata('inputs', $this->request->getPost());
            // memberikan pesan error pada saat input data
            session()->setFlashdata('errors', $this->form_validation->getErrors());
            // kembali ke halaman form
            return redirect()->to('/Pasien/edit' .'/'. $id_pasien .'/'. $kode_pasien)->withInput();
        } else { 
            $data = [
                'id_pasien' => $id_pasien,
                'kode_pasien' => $this->request->getVar('kode_pasien'),
                'nama' => $this->request->getVar('nama'),
                'nik' => $this->request->getVar('nik'),
                'phone' => $this->request->getVar('phone'),
                'status' => $this->request->getVar('status'),
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by_id' => Session()->get('id_user'),
            ];

            $this->PasienModel->getEdit($id_pasien, $data);
            session()->setFlashdata('pesan', 'Data berhasil diupdate');
            return redirect()->to('/Pasien');
        }
    }
    public function delete($id_pasien, $kode_pasien)
    {
        $this->PasienModel->del($id_pasien);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/Pasien');
    }
}
