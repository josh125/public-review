<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'username' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                          'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                         'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),
                        'fullname' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),
                        'group_id' => array(
                                'type' => 'INT',
                                'constraint' => '10',
                        ),
                         'status' => array(
                                'type' => 'INT',
                                'constraint' => '10',
                        ),
                          'date_created' => array(
                                'type' => 'timestamp',
                        ),

                ));
                $this->dbforge->add_key('user_id', TRUE);
                $this->dbforge->create_table('users');
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}