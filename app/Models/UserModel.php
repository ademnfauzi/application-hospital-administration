<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['id_user','kode_user', 'username', 'nama', 'email', 'password', 'level','status', 'created_by_id','created_at','updated_at','updated_by_id'];
    protected $useTimestamps = true;

    public function getUser($id_user = false)
    {
        if ($id_user == false) {
            # code...
            return $this->findAll();
        }

        return $this->where(['id_user' => $id_user])->first();
    }
    public function del($id_user)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('user');
        $builder->delete(['id_user' => $id_user]);
    }
    public function getEdit($id_user, $data)
    {
        $query = $this->db->table('user')->update($data, array('id_user' => $id_user));
        return $query;
    }
}