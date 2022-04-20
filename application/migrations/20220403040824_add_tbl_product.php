<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tbl_product extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'product_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'description' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'price' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => TRUE,
                        ),
                        'acreage' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'image' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                        ),
                        'is_delete' => array(
                                'type' => 'INT',
                                'null' => TRUE,
                        ),
                        'created_user' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                            'default' => 'SYSTEM',
                        ),
                        'created_at' => array(
                                'type' => 'Timestamp',
                                'null' => TRUE,
                        )
                ));
                $this->dbforge->add_key('product_id', TRUE);
                $this->dbforge->create_table('tbl_product');
        }

        public function down()
        {
                $this->dbforge->drop_table('tbl_product');
        }
}