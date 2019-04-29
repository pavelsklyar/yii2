<?php

use yii\db\Migration;

/**
 * Class m190428_150239_CreateActivityUsersLink
 */
class m190428_150239_CreateActivityUsersLink extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('activity_user_id_FK', 'activity', 'user_id', 'users', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('activity_user_id_FK', 'activity');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190428_150239_CreateActivityUsersLink cannot be reverted.\n";

        return false;
    }
    */
}
