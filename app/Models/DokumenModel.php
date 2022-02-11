<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class DokumenModel extends Model
{
    protected $table = 'dokumen';
    protected $allowedFields = ['id_dokumen','kode_dokumen','nama_dokumen', 'id_proker', 'id_divisi','periode', 'status_dokumen', 'keterangan', 'file','created_by_id','created_at','updated_at','updated_by_id'];
    protected $useTimestamps = true;

    public function getDokumen($id_dokumen = false)
    {
        if ($id_dokumen == false) {
            # code...
            return $this->findAll();
        }

        return $this->where(['id_dokumen' => $id_dokumen])->first();
    }
    public function del($id_dokumen)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('dokumen');
        $builder->delete(['id_dokumen' => $id_dokumen]);
    }
    public function getEditDokumen($id_dokumen, $data)
    {
        $query = $this->db->table('dokumen')->update($data, array('id_dokumen' => $id_dokumen));
        return $query;
    }
    public function laporan($status)
    {   
        $query = $this->db->table('dokumen')->where(['status_dokumen' => $status])->countAllResults();
        return $query;
    }
    public function get($id_dokumen = false, $kode_kegiatan = false)
    {
        if ($id_dokumen) {
            # code...
            $this->join('divisi', 'divisi.id_divisi = dokumen.id_divisi', 'LEFT');
            $this->join('proker', 'proker.id_proker = dokumen.id_proker', 'LEFT');
            $this->select('divisi.nama as nama_divisi');
            $this->select('proker.nama_kegiatan as nama_proker');
            $this->select('dokumen.*');
            $result = $this->where('id_dokumen', $id_dokumen)->first();
            return $result;
        } else {
            $this->join('divisi', 'divisi.id_divisi = dokumen.id_divisi', 'LEFT');
            $this->join('proker', 'proker.id_proker = dokumen.id_proker', 'LEFT');
            $this->select('divisi.nama as nama_divisi');
            $this->select('proker.nama_kegiatan as nama_proker');
            $this->select('dokumen.*');
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
}