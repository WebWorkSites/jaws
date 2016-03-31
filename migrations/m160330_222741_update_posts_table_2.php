<?php

use yii\db\Migration;

class m160330_222741_update_posts_table_2 extends Migration
{
    public function up()
    {
        $this->addColumn('posts', 'ip', 'string');
        $this->addColumn('posts', 'browser', 'text');
        $this->addColumn('posts', 'country', 'string');
    }

    public function down()
    {
        $this->dropColumn('posts', 'ip');
        $this->dropColumn('posts', 'browser');
        $this->dropColumn('posts', 'country');
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
