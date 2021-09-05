<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAddressesTable extends Migration
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
			'street'       => [
				'type'       => 'VARCHAR',
				'constraint' => 200,
			],
			'neighb'       => [
				'type'       => 'VARCHAR',
				'constraint' => 200,
			],
			'city' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'uf' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'number' => [
				'type' => 'VARCHAR',
				'constraint' => 20,
			],
		], generateTimestamps()));

		$this->forge->addKey('id', true);
		$this->forge->createTable('addresses');
	}

	public function down()
	{
		$this->forge->dropTable('addresses');
	}
}
