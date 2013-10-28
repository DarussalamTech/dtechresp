<?php

class m120719_182641_login_log extends DTDbMigration
{

    public function up()
    {

        $table = "login_logs";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'username' => 'varchar(50) NOT NULL',
            'email' => 'varchar(255) DEFAULT NULL',
            'ip_address' => 'varchar(255) NOT NULL',
            'password' => 'varchar(255) DEFAULT NULL',
            'type' => 'enum("admin","seller","buyer")',
            'success' => 'tinyint(1) DEFAULT 0',
            'is_active' => 'tinyint(1) NOT NULL DEFAULT 0',
            'create_time' => 'datetime NOT NULL',
            'create_user_id' => 'int(11) unsigned NOT NULL',
            'update_time' => 'datetime NOT NULL',
            'update_user_id' => 'int(11) unsigned NOT NULL',
            'activity_log' => 'text',
            'PRIMARY KEY (`id`)',
        );
        $options = "ENGINE=InnoDB";
        $this->createTable($table, $columns, $options);
    }

    public function down()
    {
        $table = "login_logs";
        $this->dropTable($table);
    }

}