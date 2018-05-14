<?php

use yii\db\Migration;

/**
 * Class m180514_222446_table_comment
 */
class m180514_222446_table_comment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'user_id' => $this->integer(),
            'post_id' => $this->integer(),
            'status' => $this->integer()->defaultValue(0),
            'date' => $this->date()
        ]);


        // create index for column `user_id`
        $this->createIndex(
            'idx-post-user_id',
            'comment',
            'user_id'
        );

        // add foreign key for table `post`
        $this->addForeignKey(
            'fk_post_id',
            'comment',
            'post_id',
            'post',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comment');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180514_222446_table_comment cannot be reverted.\n";

        return false;
    }
    */
}
