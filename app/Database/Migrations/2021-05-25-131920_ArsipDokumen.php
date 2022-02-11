<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArsipDokumen extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_arsip_dokumen'          => [
                                'type'           => 'BIGINT',
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nama_dokumen'       => [
                                'type'       => 'VARCHAR',
                                'constraint' => '100',
                        ],
						'id_proker' => [
							'type' => 'BIGINT',
							'null' => true
						],
						'id_divisi' => [
							'type' => 'BIGINT',
						],
						'periode' => [
								'type'       => 'VARCHAR',
                                'constraint' => '100',
						],
						'status_dokumen' => [
							'type'           => 'ENUM',
							'constraint'     => ['Terverifikasi', 'Tidak Terverifikasi'],
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
                $this->forge->addKey('id_dokumen', true);
                $this->forge->createTable('arsip_dokumen');
        }

        public function down()
        {
                $this->forge->dropTable('arsip_dokumen');
        }
}
