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
            <?= $form->field($model, 'is_repeated')->dropDownList([
                'no_repeat' => 'Не повторять',
                'every_day' => 'Каждый день',
                'by_two_day' => 'Каждые два дня',
                'by_three_days' => 'Каждые три дня',
                'weekday' => 'По дням'
            ], ['class' => 'form-control is_repeated_form']); ?>
            <?= $form->field($model, 'repeated_by')->checkboxList([
                '1' => 'понедельникам',
                '2' => 'вторникам',
                '3' => 'средам',
                '4' => 'четвергам',
                '5' => 'пятницам',
                '6' => 'субботам',
                '7' => 'воскресеньям'
            ]) ?>
            <?= $form->field($model, 'is_blocked')->checkbox(); ?>
            <?= $form->field($model, 'file_array')->fileInput(['multiple' => true]) ?>

            <?= \yii\bootstrap\Html::submitButton("Создать", ['class' => 'btn btn-primary']) ?>
        <?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>