<?php

use yii\db\Migration;

/**
 * Class m180514_221204_table_tag
 */
class m180514_221204_table_tag extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tag', [
           'id' => $this->primaryKey(),
            'title' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tag');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180514_221204_table_tag cannot be reverted.\n";

        return false;
    }
    */
}
