<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEventsTable extends Migration
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
			'description'       => [
				'type'       => 'TEXT',
			],
			'priority'       => [
				'type'       => 'ENUM',
				'constraint' => ['low', 'normal', 'hight'],
			],
			'status'       => [
				'type'       => 'ENUM',
				'constraint' => ['open', 'paused', 'canceled', 'finished'],
			],
			'date' => [
				'type' => 'DATETIME',
			],
			'date_repeat' => [
				'type' => 'DATETIME',
			],
			'companies_id' => [
				'type' => 'INT',
				'unsigned' => true
			]
		], generateTimestamps()));

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('companies_id', 'companies', 'id');
		$this->forge->createTable('events');
	}

	public function down()
	{
		$this->forge->dropTable('events');
	}
}
