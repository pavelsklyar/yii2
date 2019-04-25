<?php

/**
 * @var $this \yii\web\View
 * @var $id
 */

$this->title = "<ACTION NAME> - " . Yii::$app->name;
?>

<div class="row">
    <div class="col-md-6">
        <a href="/activity/main" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> К календарю</a>
    </div>
    <div class="col-md-6 t-right">
        <a href="/activity/edit?id=<?= $id ?>" class="btn btn-primary">Изменить</a>
        <a href="/activity/delete?id=<?= $id ?>" class="btn btn-danger">Удалить</a>
    </div>
</div>

<div class="container">
    <h1 class="h2">Название события</h1>
    <div class="row">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="row">
        <div class="col-md-2">
            <h4>Начало:</h4>
            <p>1 января 2001 в 00:01</p>
        </div>
        <div class="col-md-10">
            <h4>Завершение:</h4>
            <p>2 января 2001 в 00:01</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Повторение:</h4>
            <p>Не повторяется</p>
        </div>
    </div>
    <div class="row">
        <button type="submit" value="<?= $id ?>" class="close-action-btn btn btn-success">Завершить</button>
    </div>
</div>