<?php
$this->title = 'Таблица заказов';
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
?>

<h2>Таблица товаров</h2>

<?php
$form = ActiveForm::begin(['layout' => 'horizontal']) ?>
<?= $form->field($model, 'fam') ?>
<?= $form->field($model, 'im') ?>
<?= $form->field($model, 'otch') ?>
<?= $form->field($model, 'tovar') ?>
<?= $form->field($model, 'data') ?>
<?= $form->field($model, 'kol_tovara') ?>
<?= $form->field($model, 'kol_opl_tovara') ?>
<?= $form->field($model, 'price') ?>
<?= $form->field($model, 'summa') ?>
<div class="form-group">
    <div class="col-lg-offset-5 col-lg-5">
<?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
</div>
</div>
<?php ActiveForm::end() ?>
