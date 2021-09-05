<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePermissionsTable extends Migration
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
			'permission'       => [
				'type'       => 'VARCHAR',
				'constraint' => 200,
			],
		], generateTimestamps()));

		$this->forge->addKey('id', true);
		$this->forge->createTable('permissions');
	}

	public function down()
	{
		$this->forge->dropTable('permissions');
	}
}
