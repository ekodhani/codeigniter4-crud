<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
	public function up()
	{
		// membuat kolom/field untuk tabel produk
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true
			],
			'nama_produk' =>[
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'harga' => [
				'type' => 'INT',
				'constraint' => 255
			],
		]);

		// membuat primary key
		$this->forge->addKey('id', TRUE);

		// membuat tabel produk
		$this->forge->createTable('produk', TRUE);
	}

	public function down()
	{
		// menghapus tabel karyawan
		$this->forge->dropTable('produk');
	}
}
