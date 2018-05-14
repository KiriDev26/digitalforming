<?php

use yii\db\Migration;

/**
 * Class m180514_221451_table_user
 */
class m180514_221451_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            'password' => $this->string(),
            'photo' => $this->string()->defaultValue(null),
            'is_admin' => $this->integer()->defaultValue(0),
            'activated' => $this->integer()->defaultValue(0)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180514_221451_table_user cannot be reverted.\n";

        return false;
    }
    */
}
