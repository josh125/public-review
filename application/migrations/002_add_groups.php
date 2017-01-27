<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_groups extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'group_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'group_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),

                ));
                $this->dbforge->add_key('group_id', TRUE);
                $this->dbforge->create_table('groups');
        }

        public function down()
        {
                $this->dbforge->drop_table('groups');
        }
}