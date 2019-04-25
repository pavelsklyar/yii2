<?php

namespace app\models;

use yii\base\Model;

class Activity extends Model
{
    public $title;
    public $description;
    public $date_start;
    public $date_finish;
    public $is_repeated;
    public $repeated_by;
    public $is_blocked;
    public $file_array;

    public function rules()
    {
        return [
            ['title', 'required'],
            ['description', 'string'],
            ['date_start', 'required'],
            ['date_start', 'string'],
            ['date_finish', 'required'],
            ['date_finish', 'string'],
            ['is_repeated', 'string'],
            ['repeated_by', 'each', 'rule' => ['string']],
            ['is_blocked', 'boolean'],
            ['file_array', 'each', 'rule' => ['file', 'maxFiles' => 5]]
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Название события',
            'description' => 'Описание',
            'date_start' => 'Дата начала',
            'date_finish' => 'Дата окончания',
            'is_repeated' => 'Повторять',
            'repeated_by' => 'Выберите дни',
            'is_blocked' => 'Блокирующее событие',
            'file_array' => 'Немного файлов для красоты'
        ];
    }
}