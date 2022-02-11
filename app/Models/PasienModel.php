<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = 'pasien';
    protected $allowedFields = ['id_pasien','kode_pasien', 'nama', 'nik', 'phone','status', 'created_by_id','created_at','updated_at','updated_by_id'];
    protected $useTimestamps = true;

    public function getPasien($id_pasien = false)
    {
        if ($id_pasien == false) {
            # code...
            return $this->findAll();
        }

        return $this->where(['id_pasien' => $id_pasien])->first();
    }
    public function del($id_pasien)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pasien');
        $builder->delete(['id_pasien' => $id_pasien]);
    }
    public function getEdit($id_pasien, $data)
    {
        $query = $this->db->table('pasien')->update($data, array('id_pasien' => $id_pasien));
        return $query;
    }
    public function getCount()
    {
        $query = $this->db->table('pasien')->countAllResults();
        return $query;
    }
    public function get($id_pasien = false, $npm = false)
    {
        if ($id_pasien) {
            # code...
            $this->join('divisi', 'divisi.id_divisi = anggota.id_divisi', 'LEFT');
            $this->select('divisi.nama as nama_divisi');
            $this->select('anggota.*');
            $result = $this->where('id_pasien', $id_pasien)->first();
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