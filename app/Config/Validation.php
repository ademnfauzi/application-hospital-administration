<?php

namespace Config;

use CodeIgniter\Session\Session;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------
	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];
	public $auth = [
		'username' => 'required',
        'password' => 'required',
	];
	public $user = [
		'nama' => 'required',
        'username' => 'required|is_unique[user.username]',
        'password' => 'required|min_length[3]',
        'email' => 'required|valid_email|is_unique[user.email]',
        'level' => 'required',
        'status' => 'required',
	];
	public $user_edit = [
		'nama' => 'required',
        'username' => 'required',
        'email' => 'required|valid_email',
        'level' => 'required',
        'status' => 'required',
	];
	public $pasien = [
		'nama' => 'required',
        'nik' => 'required|is_unique[pasien.nik]|integer',
        'phone' => 'required',
        'status' => 'required',
	];
	public $pasien_edit = [
		'nama' => 'required',
        'nik' => 'required|integer',
        'phone' => 'required',
        'status' => 'required',
	];
	public $dokter = [
		'nama' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'divisi' => 'required',
        'status' => 'required',
 	];
	public $dokter_edit = [
		'nama' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'divisi' => 'required',
        'status' => 'required',
 	];
	public $pendaftaran = [
		'id_pasien' => 'required',
        'id_dokter' => 'required',
        'waktu' => 'required',
        'status' => 'required',
 	];
	public $pendaftaran_edit = [
		'id_pasien' => 'required',
        'id_dokter' => 'required',
        'waktu' => 'required',
        'status' => 'required',
 	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
