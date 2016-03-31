<?php

use yii\db\Migration;
use yii\db\Schema;

class m160330_195342_create_posts_table extends Migration
{
    public function up()
    {
        $this->createTable('posts', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING.' NOT NULL',
            'text' => Schema::TYPE_TEXT.' NOT NULL',
            'price' => Schema::TYPE_FLOAT.' NOT NULL',
            'text_preview' => Schema::TYPE_TEXT.' NOT NULL',
            'img' => Schema::TYPE_STRING.' NOT NULL',
            'user_id' => Schema::TYPE_SMALLINT.' NOT NULL'
        ]);
    }

    public function down()
    {
        $this->dropTable('posts_table');
    }
}
