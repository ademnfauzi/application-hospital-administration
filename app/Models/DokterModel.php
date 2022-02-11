<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table = 'dokter';
    protected $allowedFields = ['id_dokter','kode_dokter', 'nama', 'email', 'phone','divisi','image','status', 'created_by_id','created_at','updated_at','updated_by_id'];
    protected $useTimestamps = true;

    public function getDokter($id_dokter = false)
    {
        if ($id_dokter == false) {
            # code...
            return $this->findAll();
        }
        return $this->where(['id_dokter' => $id_dokter])->first();
    }
    public function del($id_dokter)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('dokter');
        $builder->delete(['id_dokter' => $id_dokter]);
    }
    public function getEdit($id_dokter, $data)
    {
        $query = $this->db->table('dokter')->update($data, array('id_dokter' => $id_dokter));
        return $query;
    }
    public function getCount()
    {
        $query = $this->db->table('dokter')->countAllResults();
        return $query;
    }
}