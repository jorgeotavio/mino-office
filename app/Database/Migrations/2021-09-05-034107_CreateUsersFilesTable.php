<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersFilesTable extends Migration
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
			'files_id' => [
				'type' => 'INT',
				'constraint' => 200,
				'unsigned' => TRUE
			],
		], generateTimestamps()));

		$this->forge->addForeignKey('users_id', 'users', 'id');
		$this->forge->addForeignKey('files_id', 'files', 'id');
		$this->forge->createTable('users_files');
	}

	public function down()
	{
		$this->forge->dropForeignKey('users_files','users_id');
		$this->forge->dropForeignKey('users_files','files_id');
		$this->forge->dropTable('users_files');
	}
}
