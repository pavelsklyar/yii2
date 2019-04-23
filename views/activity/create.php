<?php
/**
 * @var $this \yii\web\View
 * @var $model \app\models\Activity
 */

$this->title = "Добавить событие в календарь " . Yii::$app->name;
?>

<div class="row">
    <div class="col-md-12">
        <h3>Добавление события</h3>
        <?php $form = \yii\bootstrap\ActiveForm::begin([]); ?>
            <?= $form->field($model, 'title')->textInput(['placeholder' => 'обязательно']); ?>
            <?= $form->field($model, 'description')->textarea(['placeholder' => 'необязательно']); ?>
            <?= $form->field($model, 'date_start')->input('date'); ?>
            <?= $form->field($model, 'date_finish')->input('date'); ?>
            <?= $form->field($model, 'repeated')->checkboxList([
                '1' => 'понедельникам',
                '2' => 'вторникам',
                '3' => 'средам',
                '4' => 'четвергам',
                '5' => 'пятницам',
                '6' => 'субботам',
                '7' => 'воскресеньям'
            ]) ?>
            <?= $form->field($model, 'is_blocked')->checkbox(); ?>

            <?= \yii\bootstrap\Html::submitButton("Создать", ['class' => 'btn btn-primary']) ?>
        <?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>