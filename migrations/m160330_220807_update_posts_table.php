<?php

use yii\db\Migration;

class m160330_220807_update_posts_table extends Migration
{
    public function up()
    {
        $this->addColumn('posts', 'created_at', 'integer');
        $this->addColumn('posts', 'updated_at', 'integer');
    }

    public function down()
    {
        $this->dropColumn('posts', 'created_at');
        $this->dropColumn('posts', 'updated_at');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
