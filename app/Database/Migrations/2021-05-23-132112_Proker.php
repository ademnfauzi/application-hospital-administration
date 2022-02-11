<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Proker extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_proker'          => [
                                'type'           => 'BIGINT',
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'kode_kegiatan'          => [
                                'type'           => 'BIGINT',
                        ],
                        'nama_kegiatan'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '100',
                        ],
						'id_divisi' => [
							'type' => 'BIGINT',
						],
						'periode' => [
							'type' => 'VARCHAR',
							'constraint' => '100',
						],
						'status' => [
							'type'           => 'ENUM',
							'constraint'     => ['Aktif', 'Tidak Aktif'],
						],
						'keterangan' => [
							'type' => 'TEXT',
							'null' => true
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
                $this->forge->addKey('id_proker', true);
                $this->forge->createTable('proker');
        }

        public function down()
        {
                $this->forge->dropTable('proker');
        }
}
