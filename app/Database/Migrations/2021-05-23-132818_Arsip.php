<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Arsip extends Migration
{
	public function up()
        {
                $this->forge->addField([
					'id_arsip_anggota'          => [
						'type'           => 'BIGINT',
						'unsigned'       => true,
						'auto_increment' => true,
					],
					'nama'       => [
						'type'       => 'VARCHAR',
						'constraint' => '100',
					],
					'npm'       => [
						'type'       => 'BIGINT',
					],
					'email'       => [
						'type'       => 'VARCHAR',
						'constraint' => '100',
					],
					'phone'       => [
						'type'       => 'VARCHAR',
						'constraint' => '100',
					],
					'jabatan' => [
						'type' => 'VARCHAR',
						'constraint' => '100',
					],
					'id_divisi' => [
						'type' => 'BIGINT',
					],
					'image' => [
						'type' => 'VARCHAR',
                        'constraint' => '100',
						'null' => true
					],
					'periode' => [
						'type' => 'VARCHAR',
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
                $this->forge->addKey('id_arsip', true);
                $this->forge->createTable('arsip_pengurus');
        }

        public function down()
        {
                $this->forge->dropTable('arsip_pengurus');
        }
}
