<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';
    protected $allowedFields = ['id_anggota','nama', 'npm', 'email', 'phone','jabatan','id_divisi','image','periode','status', 'created_by_id','created_at','updated_at','updated_by_id'];
    protected $useTimestamps = true;

    public function getAnggota($id_anggota = false)
    {
        if ($id_anggota == false) {
            # code...
            return $this->findAll();
        }

        return $this->where(['id_anggota' => $id_anggota])->first();
    }
    public function del($id_anggota)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('anggota');
        $builder->delete(['id_anggota' => $id_anggota]);
    }
    public function getEdit($id_anggota, $data)
    {
        $query = $this->db->table('anggota')->update($data, array('id_anggota' => $id_anggota));
        return $query;
    }
    public function getCount()
    {
        $query = $this->db->table('anggota')->countAllResults();
        return $query;
    }
    public function litbangCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('anggota')->where(['id_divisi' => 2])->countAllResults();
        return $query;
    }
    public function mbCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('anggota')->where(['id_divisi' => 3])->countAllResults();
        return $query;
    }
    public function mkCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('anggota')->where(['id_divisi' => 4])->countAllResults();
        return $query;
    }
    public function hiCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('anggota')->where(['id_divisi' => 5])->countAllResults();
        return $query;
    }
    public function heCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('anggota')->where(['id_divisi' => 6])->countAllResults();
        return $query;
    }
    public function danusCount()
    {   
        // $query = $this->db->where(['id'=>2])->from("table name")->count_all_results();
        $query = $this->db->table('anggota')->where(['id_divisi' => 7])->countAllResults();
        return $query;
    }
    public function get($id_anggota = false, $npm = false)
    {
        if ($id_anggota) {
            # code...
            $this->join('divisi', 'divisi.id_divisi = anggota.id_divisi', 'LEFT');
            $this->select('divisi.nama as nama_divisi');
            $this->select('anggota.*');
            $result = $this->where('id_anggota', $id_anggota)->first();
            return $result;
        } else {
            $this->join('divisi', 'divisi.id_divisi = anggota.id_divisi', 'LEFT');
            $this->select('divisi.nama as nama_divisi');
            $this->select('anggota.*');
            $result = $this->findAll();
            return $result;
        }
    }
}