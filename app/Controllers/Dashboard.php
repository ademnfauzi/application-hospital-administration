<?php

namespace App\Controllers;

use App\Models\DokterModel;
use App\Models\PasienModel;
use App\Models\PendaftaranModel;
use CodeIgniter\Session\Session;

class Dashboard extends BaseController
{
	public function __construct()
	{
		$this->PasienModel = new PasienModel();
		$this->DokterModel = new DokterModel();
		$this->PendaftaranModel = new PendaftaranModel();
	}
	public function index()
	{
        $data = [
            'title' => 'Dashboard',
			'PasienCount' => $this->PasienModel->getCount(),
			'DokterCount' => $this->DokterModel->getCount(),
			'PendaftaranCount' => $this->PendaftaranModel->getCount(),
         ];
		return view('Dashboard/index', $data);
	}
}
