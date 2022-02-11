<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class DivisiModel extends Model
{
    protected $table = 'divisi';
    protected $allowedFields = ['id_divisi', 'nama','status', 'created_by_id','created_at','updated_at','updated_by_id'];
    protected $useTimestamps = true;

   
    public function getDivisi($id_divisi = false)
    {
        if ($id_divisi == false) {
            # code...
            return $this->findAll();
        }

        return $this->where(['id_divisi' => $id_divisi])->first();
    }
    public function del($id_divisi)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('divisi');
        $builder->delete(['id_divisi' => $id_divisi]);
    }

    public function getEdit($id_divisi, $data)
    {
        $query = $this->db->table('divisi')->update($data, array('id_divisi' => $id_divisi));
        return $query;
    }
    public function get($id_divisi = false)
    {
        if ($id_divisi) {
            # code...
            $this->select('divisi.nama as nama_divisi');
            $this->select('divisi.*');
            $result = $this->where('id_divisi', $id_divisi)->first();
            return $result;
        } else {
            $this->select('divisi.nama as nama_divisi');
            $this->select('divisi.*');
            $result = $this->findAll();
            return $result;
        }
    }
}