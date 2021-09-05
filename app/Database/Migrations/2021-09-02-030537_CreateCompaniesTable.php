<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCompaniesTable extends Migration
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
			'cnpj'       => [
				'type'       => 'VARCHAR',
				'constraint' => 100,
			],
			'addresses_id' => [
				'type' => 'INT',
				'constraint' => 200,
				'unsigned' => TRUE
			],
		], generateTimestamps()));

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('addresses_id', 'addresses', 'id');
		$this->forge->createTable('companies');
	}

	public function down()
	{
		$this->forge->dropForeignKey('companies','addresses_id');
		$this->forge->dropTable('companies');
	}
}
