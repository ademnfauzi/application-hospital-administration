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
	public $anggota = [
		'nama' => 'required',
        'npm' => 'required|is_unique[anggota.npm]|integer',
        // 'email' => 'valid_email|is_unique[anggota.email]',
        // 'phone' => 'required|integer',
        'jabatan' => 'required',
        'divisi' => 'required',
        'periode' => 'required',
        'status' => 'required',
        'image' => 'is_image[image]|ext_in[image,png,jpg,jpeg,gif]|max_size[image,4096]'
	];
	public $anggota_edit = [
		'nama' => 'required',
        'npm' => 'required|integer',
        // 'email' => 'valid_email',
        // 'phone' => 'required|integer',
        'jabatan' => 'required',
        'divisi' => 'required',
        'periode' => 'required',
        'status' => 'required',
        'image' => 'is_image[image]|ext_in[image,png,jpg,jpeg,gif]|max_size[image,4096]'
	];
	public $proker = [
		'nama' => 'required',
        'divisi' => 'required',
        'periode' => 'required',
        'status' => 'required',
 	];
	public $proker_edit = [
		'nama' => 'required',
        'divisi' => 'required',
        'periode' => 'required',
        'status' => 'required',
 	];
	public $dokumen = [
		'nama' => 'required',
        // 'keterangan' => 'required',
        'divisi' => 'required',
        'proker' => 'required',
        'periode' => 'required',
		'file' => 'required|ext_in[file,pdf,docx,xlsx,ppt,pptx,doc,xls,zip,rar]|max_size[file,4096]'
 	];
	public $dokumen_edit = [
		'nama' => 'required',
        // 'keterangan' => 'required',
        'divisi' => 'required',
        'proker' => 'required',
        'periode' => 'required',
        // 'status' => 'required',
		'file' => 'ext_in[file,pdf,docx,xlsx,ppt,pptx,doc,xls,zip,rar]|max_size[file,4096]'
 	];
	public $divisi = [
		'nama' => 'required',
		'status' => 'required'
 	];
	public $divisi_edit = [
		'nama' => 'required',
		'status' => 'required' 	
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
