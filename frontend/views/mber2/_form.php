<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Mber2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mber2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ert1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert5')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert6')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert7')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert8')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert9')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert10')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert11')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert12')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert14')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert15')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ert16')->textarea(['rows' => 6]) ?>




    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
