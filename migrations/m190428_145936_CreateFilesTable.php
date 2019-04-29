<?php

use yii\db\Migration;

/**
 * Class m190428_145936_CreateFilesTable
 */
class m190428_145936_CreateFilesTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('files', [
            'id' => $this->primaryKey(),
            'filename' => $this->string(100)->notNull(),
            'type' => $this->string(10)->notNull(),
            'hash_name' => $this->string(64)->notNull(),
            'activity_id' => $this->integer()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('files');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190428_145936_CreateFilesTable cannot be reverted.\n";

        return false;
    }
    */
}
