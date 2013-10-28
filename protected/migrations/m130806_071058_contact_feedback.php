<?php

class m130806_071058_contact_feedback extends DTDbMigration {

    public function up() {
        $table = "contact_feedback";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'name' => 'varchar(150) NOT NULL',
            'email' => 'varchar(150) NOT NULL',
            'subject' => 'varchar(150) DEFAULT NULL',
            'body' => 'text DEFAULT NULL',
            'email_sent' => 'tinyint(1) DEFAULT 0',
            'create_time' => 'datetime NOT NULL',
            'create_user_id' => 'int(11) unsigned NOT NULL',
            'update_time' => 'datetime NOT NULL',
            'update_user_id' => 'int(11) unsigned NOT NULL',
            'activity_log' => 'text',
            'PRIMARY KEY (`id`)',
        );
        $this->createTable($table, $columns);
    }

    public function down() {
        $table = "contact_feedback";
        $this->dropTable($table);
    }

}