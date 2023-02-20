<?php
$this->title = 'Вход';
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
?>
<h2>Вход</h2>
<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'username')->textInput()?>
<?= $form->field($model, 'password')->passwordInput() ?>
<?= $form->field($model, 'rememberMe')->checkbox() ?>
<div class="form-group">
    <div>
                    <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
</div>
<?php ActiveForm::end()?>