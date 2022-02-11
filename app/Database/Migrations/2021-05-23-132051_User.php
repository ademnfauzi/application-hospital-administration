<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_user'          => [
                                'type'           => 'BIGINT',
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'username'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '100',
                        ],
                        'nama' => [
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ],
                        'email' => [
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ],
                        'password' => [
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ],
                        'level' => [
							'type'           => 'ENUM',
							'constraint'     => ['Admin', 'BPH', 'User'],
                        ],
						'status' => [
							'type'           => 'ENUM',
							'constraint'     => ['Aktif', 'Tidak Aktif'],
						],
						'created_by_id' => [
							'type' => 'BIGINT',
							'null' => true
						],
						'created_at' => [
							'type' => 'DATETIME',
							'null' => true
						],
						'updated_at' => [
							'type' => 'DATETIME',
							'null' => true
						],
						'updated_by_id' => [
							'type' => 'BIGINT',
							'null' => true
						],
                ]);
                $this->forge->addKey('id_user', true);
                $this->forge->createTable('user');
        }

        public function down()
        {
                $this->forge->dropTable('user');
        }

}
