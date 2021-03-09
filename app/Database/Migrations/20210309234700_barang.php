<?php 

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration{
    public function Up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE,
            ],
            'nama'=>[
                'type'=>'TEXT',
            ],
            'harga'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'stock'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'gambar'=>[
                'type'=>'TEXT',
                'null'=>TRUE,
            ],
            'created_by'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'created_date'=>[
                'type'=>'DATETIME',
            ],
            'updated_by'=>[
                'type'=>'INT',
                'constraint'=>11,
                'null'=>TRUE,
            ],
            'updated_date'=>[
                'type'=>'DATETIME',
                'null'=>TRUE,
            ]

        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('barang');
    }
    public function Down(){
        $this->forge->dropTable('barang');
    }
}

?>