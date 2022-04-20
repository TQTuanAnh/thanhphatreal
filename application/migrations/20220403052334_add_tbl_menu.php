<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tbl_menu extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'menu_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'menu_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'menu_type' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 10,
                        ),
                        'created_user' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'default' => 'SYSTEM',
                        )
                ));
                $this->dbforge->add_key('menu_id', TRUE);
                $this->dbforge->create_table('tbl_menu');
        }

        public function down()
        {
                $this->dbforge->drop_table('tbl_menu');
        }
}