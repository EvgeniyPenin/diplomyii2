<?php
$this->title = 'Регистрация';
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
?>
<h2>Регистрация</h2>

<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<div class="form-group">
    <div>
                    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-success']) ?>
                </div>
</div>
<?php ActiveForm::end()?>