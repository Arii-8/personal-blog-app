<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Posting extends Migration
{
    // menyambungkan ke database db_post
    protected $DBGroup = 'db_post';

    public function up()
    {
        // Membuat kolom/field untuk tabel blog
        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'author'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
				'default'        => 'John Doe',
			],
			'content' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'status'      => [
				'type'           => 'ENUM',
				'constraint'     => ['published', 'draft'],
				'default'        => 'draft',
			],
            'image' => [
                'type'      =>  'VARCHAR',
                'constraint'     => 255,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'slug VARCHAR(100) UNIQUE'
        ]);

        // Membuat primary keys
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('posting', TRUE);
    }

    public function down()
    {
        //
    }
}
