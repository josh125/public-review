<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_review_people extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'pep_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'pep_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                         'country' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),
                        'city' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),
                        'phone' => array(
                                'type' => 'INT',
                                'constraint' => '10',
                        ),
                        'profession' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),
                        'website' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),
                        'category_id' => array(
                                'type' => 'INT',
                                'constraint' => '10',
                        ),
                         'pep_date_created' => array(
                                'type' => 'TIMESTAMP',
                        ),

                ));
                $this->dbforge->add_key('pep_id', TRUE);
                $this->dbforge->create_table('people');
        }

        public function down()
        {
                $this->dbforge->drop_table('people');
        }
}