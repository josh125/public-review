<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_review extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'review_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                         'comment' => array(
                                'type' => 'text',
                                'null' => TRUE,
                        ),
                        'date' => array(
                                'type' => 'timestamp',
                        ),
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => '10',
                        ),
                         'category_id' => array(
                                'type' => 'INT',
                                'constraint' => '10',
                        ),
                          'rate' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),

                ));
                $this->dbforge->add_key('review_id', TRUE);
                $this->dbforge->create_table('reviews');
        }

        public function down()
        {
                $this->dbforge->drop_table('reviews');
        }
}