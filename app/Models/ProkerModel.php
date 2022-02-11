<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class ProkerModel extends Model
{
    protected $table = 'proker';
    protected $allowedFields = ['id_proker','kode_kegiatan','nama_kegiatan', 'id_divisi','periode', 'status', 'keterangan','created_by_id','created_at','updated_at','updated_by_id'];
    protected $useTimestamps = true;

    public function getProker($id_proker = false)
    {
        if ($id_proker == false) {
            # code...
            return $this->findAll();
        }

        return $this->where(['id_proker' => $id_proker])->first();
    }
    public function del($id_proker)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('proker');
        $builder->delete(['id_proker' => $id_proker]);
    }
    public function getEditProker($id_proker, $data)
    {
        $query = $this->db->table('proker')->update($data, array('id_proker' => $id_proker));
        return $query;
    }
    public function getCount()
    {
        $query = $this->db->table('proker')->countAllResults();
        return $query;
    }
    public function litbangCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('proker')->where(['id_divisi' => 2])->countAllResults();
        return $query;
    }
    public function mbCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('proker')->where(['id_divisi' => 3])->countAllResults();
        return $query;
    }
    public function mkCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('proker')->where(['id_divisi' => 4])->countAllResults();
        return $query;
    }
    public function hiCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('proker')->where(['id_divisi' => 5])->countAllResults();
        return $query;
    }
    public function heCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('proker')->where(['id_divisi' => 6])->countAllResults();
        return $query;
    }
    public function danusCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('proker')->where(['id_divisi' => 7])->countAllResults();
        return $query;
    }
    public function get($id_proker = false, $kode_kegiatan = false)
    {
        if ($id_proker) {
            # code...
            $this->join('divisi', 'divisi.id_divisi = proker.id_divisi', 'LEFT');
            $this->select('divisi.nama as nama_divisi');
            $this->select('proker.*');
            $result = $this->where('id_proker', $id_proker)->first();
            return $result;
        } else {
            $this->join('divisi', 'divisi.id_divisi = proker.id_divisi', 'LEFT');
            $this->select('divisi.nama as nama_divisi');
            $this->select('proker.*');
            $result = $this->findAll();
            return $result;
        }
    }
}