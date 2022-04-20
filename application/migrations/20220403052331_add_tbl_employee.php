<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tbl_employee extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'employee_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'employee_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'birthday' => array(
                                'type' => 'Date',
                                'null' => TRUE,
                        ),
                        'gender' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'null' => TRUE,
                        ),
                        'department_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                        ),
                        'employee_image' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'phone' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE,
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'is_delete' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                        ),
                        'created_user' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'default' => 'SYSTEM',
                        )
                ));
                $this->dbforge->add_key('employee_id', TRUE);
                $this->dbforge->create_table('tbl_employee');
        }

        public function down()
        {
                $this->dbforge->drop_table('tbl_employee');
        }
}