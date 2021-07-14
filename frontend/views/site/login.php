<?php


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>




<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>


            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Phone') ?>


            <?= $form->field($model, 'password')->passwordInput() ?>



            <?= Html::submitButton('Login', ['class' => 'btn btn-primary glow w-100 position-relative', 'name' => 'login-button']) ?>

<?php ActiveForm::end(); ?>