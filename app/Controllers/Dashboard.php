<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\ArsipDokumenModel;
use App\Models\ArsipPengurusModel;
use App\Models\DokumenModel;
use App\Models\ProkerModel;
use CodeIgniter\Session\Session;

class Dashboard extends BaseController
{
	public function __construct()
	{
		$this->AnggotaModel = new AnggotaModel();
		$this->ProkerModel = new ProkerModel();
		$this->ArsipPengurusModel = new ArsipPengurusModel();
		$this->DokumenModel = new DokumenModel();
		$this->ArsipDokumenModel = new ArsipDokumenModel();
	}
	public function index()
	{
        $data = [
            'title' => 'Dashboard',
			'anggotaCount' => $this->AnggotaModel->getCount(),
			'prokerCount' => $this->ProkerModel->getCount(),
			'arsipPengurusCount' => $this->ArsipPengurusModel->getCount(),
			'laporanKeluar' => $this->DokumenModel->laporan('Terverifikasi'),
			'arsipDokumenCount' => $this->ArsipDokumenModel->getCount(),
			'laporanMasuk' => $this->DokumenModel->laporan('Tidak Terverifikasi'),
         ];
		return view('Dashboard/index', $data);
	}
}
