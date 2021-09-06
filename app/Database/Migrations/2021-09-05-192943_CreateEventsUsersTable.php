<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEventsUsersTable extends Migration
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
			'events_id' => [
				'type' => 'INT',
				'constraint' => 200,
				'unsigned' => TRUE
			],
		], generateTimestamps()));

		$this->forge->addForeignKey('users_id', 'users', 'id');
		$this->forge->addForeignKey('events_id', 'files', 'id');
		$this->forge->createTable('events_users');
	}

	public function down()
	{
		$this->forge->dropForeignKey('events_users','users_id');
		$this->forge->dropForeignKey('events_users','events_id');
		$this->forge->dropTable('events_users');
	}
}
