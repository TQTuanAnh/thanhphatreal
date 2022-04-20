<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tbl_user extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'employee_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                        ),
                        'user_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'role' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                        ),
                        'is_delete' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'null' => TRUE,
                        ),
                        'created_user' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'default' => 'SYSTEM',
                        )
                ));
                $this->dbforge->add_key('user_id', TRUE);
                $this->dbforge->create_table('tbl_user');
        }

        public function down()
        {
                $this->dbforge->drop_table('tbl_user');
        }
}