<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tbl_image_product extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'image_product_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'detail_product_id' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                        ),
                        'image_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'image_path' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'image_size' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                ));
                $this->dbforge->add_key('image_product_id', TRUE);
                $this->dbforge->create_table('tbl_image_product');
        }

        public function down()
        {
                $this->dbforge->drop_table('tbl_image_product');
        }
}