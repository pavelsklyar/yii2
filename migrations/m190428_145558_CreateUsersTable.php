<?php

use yii\db\Migration;

/**
 * Class m190428_145558_CreateUsersTable
 */
class m190428_145558_CreateUsersTable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'login' => $this->string(50)->notNull()->unique(),
            'email' => $this->string(100)->notNull()->unique(),
            'password' => $this->string(64)->notNull(),
            'salt' => $this->string(25)->notNull(),
            'name' => $this->string(20),
            'surname' => $this->string(20),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190428_145558_CreateUsersTable cannot be reverted.\n";

        return false;
    }
    */
}
