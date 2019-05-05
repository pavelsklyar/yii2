<?php

/**
 * @var $this \yii\web\View
 * @var $model \app\models\Activity
 */

$this->title = "Данные из post-запроса";

?>

<div class="container">
    <div class="row">
        <h4>Название события:</h4>
        <p><?= $model->title; ?></p>
    </div>
    <div class="row">
        <h4>Описание события:</h4>
        <p><?= ($model->description) ? $model->description : 'null' ?></p>
    </div>
    <div class="row">
        <h4>Дата начала:</h4>
        <p><?= $model->date_start; ?></p>
    </div>
    <div class="row">
        <h4>Дата окончания:</h4>
        <p><?= $model->date_finish; ?></p>
    </div>
    <div class="row">
        <h4>Повторение:</h4>
        <p><?= $model->is_repeated; ?></p>
    </div>

    <?php if ($model->is_repeated == 'weekday') : ?>
    <div class="row">
        <h4>Дни повторения:</h4>
        <p>
            <ul>
            <?php foreach ($model->repeated_by as $day) : ?>
                <li><?= $day; ?></li>
            <?php endforeach; ?>
            </ul>
        </p>
    </div>
    <?php endif; ?>

    <?php if (!empty($model->file_array)) : ?>
    <div class="row">
        <h4>Файлы:</h4>
        <p><?= $model->file_array; ?></p>
    </div>
    <?php endif; ?>
</div>