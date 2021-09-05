<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
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
				'constraint' => 100,
			],
			'type'       => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 200,
				'unique' => true,
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 200,
			],
			'addresses_id' => [
				'type' => 'INT',
				'constraint' => 200,
				'unsigned' => TRUE
			],
			'companies_id' => [
				'type' => 'INT',
				'constraint' => 200,
				'unsigned' => TRUE
			],
		], generateTimestamps()));

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('addresses_id', 'addresses', 'id');
		$this->forge->addForeignKey('companies_id', 'companies', 'id');
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropForeignKey('users','addresses_id');
		$this->forge->dropTable('users');
	}
}
