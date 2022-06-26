<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_Prodi extends CI_Migration {
    public function up() {
        $this->dbforge->add_field(array(
            'kode' => array(
                'type' => 'VARCHAR',
                'constraint' => 02,
//                'unsigned' => TRUE,
//                'auto_increment' => TRUE
            ),
			'nama' => array(
				'type' => 'VARCHAR',
				'constraint' => '20'
			),
			'kaprodi' => array(
                'type' => 'VARCHAR',
                'constraint' => '45',
            ),
        ));
        $this->dbforge->add_key('kode', TRUE);
        $this->dbforge->create_table('prodi');
    }
    public function down() {
        $this->dbforge->drop_table('prodi');
    }
}
