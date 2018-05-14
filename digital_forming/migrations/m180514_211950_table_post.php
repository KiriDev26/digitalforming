<?php

use yii\db\Migration;

/**
 * Class m180514_211950_table_post
 */
class m180514_211950_table_post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post',[
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'content' => $this->text(),
            'viewed' => $this->integer(),
            'likes' => $this->integer(),
            'date' => $this ->date(),
            'status' => $this->integer(),
            'category_id' => $this->integer(),
            'user_id' => $this->integer(),
            'image' => $this->string()
        ]);
        
        
        $this->createIndex(
            'idx-category_id',
            'post',
            'category_id'
            
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('post');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180514_211950_table_post cannot be reverted.\n";

        return false;
    }
    */
}
