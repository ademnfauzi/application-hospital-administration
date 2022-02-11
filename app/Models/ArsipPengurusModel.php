<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class ArsipPengurusModel extends Model
{
    protected $table = 'arsip_pengurus';
    protected $allowedFields = ['id_arsip_anggota','nama', 'npm', 'email', 'phone','jabatan','id_divisi','image','periode','status', 'created_by_id','created_at','updated_at','updated_by_id'];
    protected $useTimestamps = true;

    public function getPengurus($nama = false)
    {
        if ($nama == false) {
            # code...
            return $this->findAll();
        }

        return $this->where(['nama' => $nama])->first();
    }
    public function del($id_arsip_anggota)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('arsip_pengurus');
        $builder->delete(['id_arsip_anggota' => $id_arsip_anggota]);
    }
    public function getEdit($npm, $data)
    {
        $query = $this->db->table('arsip_pengurus')->update($data, array('npm' => $npm));
        return $query;
    }
    public function getCount()
    {
        $query = $this->db->table('arsip_pengurus')->countAllResults();
        return $query;
    }
    public function count($id_divisi)
    {
        $query = $this->db->table('arsip_pengurus')->where(['id_divisi' => $id_divisi])->countAllResults();
        return $query;
    }
    public function get($npm = false)
    {
        if ($npm) {
            # code...
            $this->join('divisi', 'divisi.id_divisi = arsip_pengurus.id_divisi', 'LEFT');
            $this->select('divisi.nama as nama_divisi');
            $this->select('arsip_pengurus.*');
            $result = $this->where('npm', $npm)->first();
            return $result;
        } else {
            $this->join('divisi', 'divisi.id_divisi = arsip_pengurus.id_divisi', 'LEFT');
            $this->select('divisi.nama as nama_divisi');
            $this->select('arsip_pengurus.*');
            $result = $this->findAll();
            return $result;
        }
    }
}