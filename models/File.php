<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "files".
 *
 * @property int $id
 * @property string $filename
 * @property string $type
 * @property string $hash_name
 * @property int $activity_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Activity $activity
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['filename', 'type', 'hash_name', 'activity_id'], 'required'],
            [['activity_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['filename'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 10],
            [['hash_name'], 'string', 'max' => 64],
            [['activity_id'], 'exist', 'skipOnError' => true, 'targetClass' => Activity::className(), 'targetAttribute' => ['activity_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filename' => 'Filename',
            'type' => 'Type',
            'hash_name' => 'Hash Name',
            'activity_id' => 'Activity ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivity()
    {
        return $this->hasOne(Activity::className(), ['id' => 'activity_id']);
    }
}
