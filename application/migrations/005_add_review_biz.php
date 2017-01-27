<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_review_biz extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'review_biz_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'business_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                         'country' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),
                        'address' => array(
                                'type' => 'timestamp',
                        ),
                        'city' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),
                        'phone' => array(
                                'type' => 'INT',
                                'constraint' => '10',
                        ),
                        'description' => array(
                                'type' => 'text',
                                'null' => TRUE,
                        ),
                        'website' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),
                        'category_id' => array(
                                'type' => 'INT',
                                'constraint' => '10',
                        ),

                ));
                $this->dbforge->add_key('review_biz_id', TRUE);
                $this->dbforge->create_table('review_biz');
        }

        public function down()
        {
                $this->dbforge->drop_table('review_biz');
        }
}