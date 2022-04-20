<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tbl_detail_product extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'detail_product_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'product_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'description' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'bed_room' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                        ),
                        'toilet_room' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                        ),
                        'floor' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                        ),
                ));
                $this->dbforge->add_key('detail_product_id', TRUE);
                $this->dbforge->add_field('CONSTRAINT fk_id FOREIGN KEY (product_id) REFERENCES tbl_product(product_id)');
                $this->dbforge->create_table('tbl_detail_product');
        }

        public function down()
        {
                $this->dbforge->drop_table('tbl_detail_product');
        }
}