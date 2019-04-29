<?php

use yii\db\Migration;

/**
 * Class m190428_142343_CreateActivityTable
 */
class m190428_142343_CreateActivityTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('activity', [
            'id' => $this->primaryKey(),
            'title' => $this->string(150)->notNull(),
            'description' => $this->text(),
            'start' => $this->dateTime(),
            'finish'=> $this->dateTime(),
            'repeated' => $this->string(15),
            'repeated_by' => $this->string(30),
            'is_blocked' => $this->tinyInteger()->defaultValue(0),
            'user_id' => $this->integer()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('activity');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190428_142343_CreateActivityTable cannot be reverted.\n";

        return false;
    }
    */
}
