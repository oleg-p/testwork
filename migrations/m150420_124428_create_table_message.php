<?php

use yii\db\Schema;
use yii\db\Migration;

class m150420_124428_create_table_message extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('message', [
            'id' => Schema::TYPE_PK. ' COMMENT \'Ид\'',
            'name' => Schema::TYPE_STRING . ' COMMENT \'Имя\'',
            'email' => Schema::TYPE_STRING . ' COMMENT \'Эл.почта\'',
            'text' => Schema::TYPE_TEXT . ' COMMENT \'Текст\'',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL COMMENT \'Создано\'',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL COMMENT \'Обновлено\'',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('message');
    }
}
