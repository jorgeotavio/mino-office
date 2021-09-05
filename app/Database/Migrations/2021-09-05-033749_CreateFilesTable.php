<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFilesTable extends Migration
{
	public function up()
	{
		helper('migrations');
		$this->forge->addField(array_merge([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'       => 'VARCHAR',
				'constraint' => 200,
			],
			'type'       => [
				'type'       => 'VARCHAR',
				'constraint' => 200,
			],
			'path' => [
				'type' => 'VARCHAR',
				'constraint' => 200,
			],
		], generateTimestamps()));

		$this->forge->addKey('id', true);
		$this->forge->createTable('files');
	}

	public function down()
	{
		$this->forge->dropTable('files');
	}
}
