<?php

use yii\db\Migration;

/**
 * Class m190428_150645_CreateFilesActivityLink
 */
class m190428_150645_CreateFilesActivityLink extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('files_activity_id_FK', 'files', 'activity_id', 'activity', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('files_activity_id_FK', 'files');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190428_150645_CreateFilesActivityLink cannot be reverted.\n";

        return false;
    }
    */
}
