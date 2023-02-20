<?php
$this->title = 'Таблица услуг';
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
?>

<h2>Таблица услуг</h2>

<?php
$form = ActiveForm::begin(['layout' => 'horizontal']) ?>
<?= $form->field($model, 'fam') ?>
<?= $form->field($model, 'im') ?>
<?= $form->field($model, 'otch') ?>
<?= $form->field($model, 'naimenovanie') ?>
<?= $form->field($model, 'pochta') ?>
<?= $form->field($model, 'nomer') ?>
<?= $form->field($model, 'pasport') ?>
<?= $form->field($model, 'data') ?>
<?= $form->field($model, 'adress') ?>
<div class="form-group">
    <div class="col-lg-offset-5 col-lg-5">
<?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
</div>
</div>
<?php ActiveForm::end() ?>
