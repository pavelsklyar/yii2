<?php

namespace app\models;

use yii\base\Model;

class Activity extends Model
{
    public $title;
    public $description;
    public $date_start;
    public $date_finish;
    public $repeated;
    public $is_blocked;

    public function rules()
    {
        return [
            ['title', 'required'],
            ['description', 'string'],
            ['date_start', 'required'],
            ['date_start', 'string'],
            ['date_finish', 'required'],
            ['date_finish', 'string'],
            ['repeated', 'number'],
            ['is_blocked', 'boolean']
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Название события',
            'description' => 'Описание',
            'date_start' => 'Дата начала',
            'date_finish' => 'Дата окончания',
            'repeated' => 'Повторять по',
            'is_blocked' => 'Блокирующее событие',
        ];
    }
}