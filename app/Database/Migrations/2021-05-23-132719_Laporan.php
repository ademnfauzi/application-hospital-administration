<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laporan extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_laporan'          => [
                                'type'           => 'BIGINT',
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
						'id_dokumen' => [
							'type' => 'BIGINT',
						],
						'id_divisi' => [
							'type' => 'BIGINT',
						],
						'id_proker' => [
							'type' => 'BIGINT',
						],
						'status' => [
							'type'           => 'ENUM',
							'constraint'     => ['Aktif', 'Tidak Aktif'],
						],
						'keterangan' => [
							'type' => 'TEXT',
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
                $this->forge->addKey('id_laporan', true);
                $this->forge->createTable('laporan');
        }

        public function down()
        {
                $this->forge->dropTable('id_laporan');
        }
}
