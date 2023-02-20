<?php
$this->title = 'Таблица клиентов';
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
?>

<h2>Таблица клиента</h2>

<?php
$form = ActiveForm::begin(['layout' => 'horizontal']) ?>
<?= $form->field($model, 'fam') ?>
<?= $form->field($model, 'im') ?>
<?= $form->field($model, 'otch') ?>
<?= $form->field($model, 'adress') ?>
<?= $form->field($model, 'vozrast') ?>
<?= $form->field($model, 'pol') ?>
<?= $form->field($model, 'pasport') ?>
<?= $form->field($model, 'nationality') ?>
<?= $form->field($model, 'nomer') ?>
<div class="form-group">
    <div class="col-lg-offset-5 col-lg-5">
<?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
</div>
</div>
<?php ActiveForm::end() ?>

