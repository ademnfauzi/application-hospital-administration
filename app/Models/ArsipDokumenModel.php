<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class ArsipDokumenModel extends Model
{
    protected $table = 'arsip_dokumen';
    protected $allowedFields = ['id_arsip_dokumen','kode_dokumen','nama_dokumen', 'id_proker', 'id_divisi','periode', 'status_dokumen','file', 'keterangan', 'file','created_by_id','created_at','updated_at','updated_by_id'];
    protected $useTimestamps = true;

    public function getDokumen($id_arsip_dokumen = false)
    {
        if ($id_arsip_dokumen == false) {
            # code...
            return $this->findAll();
        }

        return $this->where(['id_arsip_dokumen' => $id_arsip_dokumen])->first();
    }
    public function del($id_arsip_dokumen)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('arsip_dokumen');
        $builder->delete(['id_arsip_dokumen' => $id_arsip_dokumen]);
    }
    public function getEditDokumen($kode_dokumen, $data)
    {
        $query = $this->db->table('arsip_dokumen')->update($data, array('kode_dokumen' => $kode_dokumen));
        return $query;
    }
    public function getEdit($id_arsip_dokumen, $data)
    {
        $query = $this->db->table('arsip_dokumen')->update($data, array('id_arsip_dokumen' => $id_arsip_dokumen));
        return $query;
    }
    public function laporan($status)
    {   
        $query = $this->db->table('dokumen')->where(['status_dokumen' => $status])->countAllResults();
        return $query;
    }
    public function get($id_arsip_dokumen = false, $kode_kegiatan = false)
    {
        if ($id_arsip_dokumen) {
            # code...
            $this->join('divisi', 'divisi.id_divisi = arsip_dokumen.id_divisi', 'LEFT');
            $this->join('proker', 'proker.id_proker = arsip_dokumen.id_proker', 'LEFT');
            $this->select('divisi.nama as nama_divisi');
            $this->select('proker.nama_kegiatan as nama_proker');
            $this->select('arsip_dokumen.*');
            $result = $this->where('id_arsip_dokumen', $id_arsip_dokumen)->first();
            return $result;
        } else {
            $this->join('divisi', 'divisi.id_divisi = arsip_dokumen.id_divisi', 'LEFT');
            $this->join('proker', 'proker.id_proker = arsip_dokumen.id_proker', 'LEFT');
            $this->select('divisi.nama as nama_divisi');
            $this->select('proker.nama_kegiatan as nama_proker');
            $this->select('arsip_dokumen.*');
            $result = $this->findAll();
            return $result;
        }
    }
    public function getLaporan($status)
    {
            $this->join('divisi', 'divisi.id_divisi = dokumen.id_divisi', 'LEFT');
            $this->join('proker', 'proker.id_proker = dokumen.id_proker', 'LEFT');
            $this->select('divisi.nama as nama_divisi', 'divisi.status as status_divisi');
            $this->select('proker.nama_kegiatan as nama_proker', 'proker.status as status_proker');
            $this->select('dokumen.*');
            $result = $this->where('status_dokumen', $status)->findAll();
            return $result;
    }
    public function getCount()
    {
        $query = $this->db->table('arsip_dokumen')->countAllResults();
        return $query;
    }
}