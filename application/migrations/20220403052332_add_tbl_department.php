<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tbl_department extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'department_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'department_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'created_user' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'default' => 'SYSTEM',
                        )
                ));
                $this->dbforge->add_key('department_id', TRUE);
                $this->dbforge->create_table('tbl_department');
        }

        public function down()
        {
                $this->dbforge->drop_table('tbl_department');
        }
}