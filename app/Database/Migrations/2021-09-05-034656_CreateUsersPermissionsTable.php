<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersPermissionsTable extends Migration
{
	public function up()
	{
		helper('migrations');
		$this->forge->addField(array_merge([
			'users_id' => [
				'type' => 'INT',
				'constraint' => 200,
				'unsigned' => TRUE
			],
			'permissions_id' => [
				'type' => 'INT',
				'constraint' => 200,
				'unsigned' => TRUE
			],
		], generateTimestamps()));

		$this->forge->addForeignKey('users_id', 'users', 'id');
		$this->forge->addForeignKey('permissions_id', 'permissions', 'id');
		$this->forge->createTable('users_permissions');
	}

	public function down()
	{
		$this->forge->dropForeignKey('users_permissions','users_id');
		$this->forge->dropForeignKey('users_permissions','permissions_id');
		$this->forge->dropTable('users_permissions');
	}
}
