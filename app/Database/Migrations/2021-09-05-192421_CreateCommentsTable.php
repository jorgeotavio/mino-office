<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCommentsTable extends Migration
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
			'comment'       => [
				'type'       => 'VARCHAR',
				'constraint' => 200,
			],
			'companies_id' => [
				'type' => 'INT',
				'unsigned' => true
			],
			'users_id' => [
				'type' => 'INT',
				'unsigned' => true
			],
			'events_id' => [
				'type' => 'INT',
				'unsigned' => true
			]
		], generateTimestamps()));

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('users_id', 'users', 'id');
		$this->forge->addForeignKey('companies_id', 'companies', 'id');
		$this->forge->addForeignKey('events_id', 'users', 'id');
		$this->forge->createTable('comments');
	}

	public function down()
	{
		$this->forge->dropForeignKey('comments','users_id');
		$this->forge->dropForeignKey('comments','companies_id');
		$this->forge->dropForeignKey('comments','events_id');
		$this->forge->dropTable('comments');
	}
}
