<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Divisi extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_divisi'          => [
                                'type'           => 'BIGINT',
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nama'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '100',
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
                $this->forge->addKey('id_divisi', true);
                $this->forge->createTable('divisi');
        }

        public function down()
        {
                $this->forge->dropTable('divisi');
        }
}
