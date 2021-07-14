<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Mber2Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mber2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ert1') ?>

    <?= $form->field($model, 'ert2') ?>

    <?= $form->field($model, 'ert3') ?>

    <?= $form->field($model, 'ert4') ?>

    <?php // echo $form->field($model, 'ert5') ?>

    <?php // echo $form->field($model, 'ert6') ?>

    <?php // echo $form->field($model, 'ert7') ?>

    <?php // echo $form->field($model, 'ert8') ?>

    <?php // echo $form->field($model, 'ert9') ?>

    <?php // echo $form->field($model, 'ert10') ?>

    <?php // echo $form->field($model, 'ert11') ?>

    <?php // echo $form->field($model, 'ert12') ?>

    <?php // echo $form->field($model, 'ert13') ?>

    <?php // echo $form->field($model, 'ert14') ?>

    <?php // echo $form->field($model, 'ert15') ?>

    <?php // echo $form->field($model, 'ert16') ?>

    <?php // echo $form->field($model, 'ert17') ?>

    <?php // echo $form->field($model, 'ert18') ?>

    <?php // echo $form->field($model, 'ert19') ?>

    <?php // echo $form->field($model, 'ert20') ?>

    <?php // echo $form->field($model, 'ert21') ?>

    <?php // echo $form->field($model, 'ert22') ?>

    <?php // echo $form->field($model, 'ert23') ?>

    <?php // echo $form->field($model, 'ert24') ?>

    <?php // echo $form->field($model, 'ert25') ?>

    <?php // echo $form->field($model, 'ert26') ?>

    <?php // echo $form->field($model, 'ert27') ?>

    <?php // echo $form->field($model, 'ert28') ?>

    <?php // echo $form->field($model, 'ert29') ?>

    <?php // echo $form->field($model, 'ert30') ?>

    <?php // echo $form->field($model, 'ert31') ?>

    <?php // echo $form->field($model, 'ert32') ?>

    <?php // echo $form->field($model, 'ert33') ?>

    <?php // echo $form->field($model, 'ert34') ?>

    <?php // echo $form->field($model, 'ert35') ?>

    <?php // echo $form->field($model, 'ert36') ?>

    <?php // echo $form->field($model, 'ert37') ?>

    <?php // echo $form->field($model, 'ert38') ?>

    <?php // echo $form->field($model, 'ert39') ?>

    <?php // echo $form->field($model, 'ert40') ?>

    <?php // echo $form->field($model, 'ert41') ?>

    <?php // echo $form->field($model, 'ert42') ?>

    <?php // echo $form->field($model, 'ert43') ?>

    <?php // echo $form->field($model, 'ert44') ?>

    <?php // echo $form->field($model, 'ert45') ?>

    <?php // echo $form->field($model, 'ert46') ?>

    <?php // echo $form->field($model, 'ert47') ?>

    <?php // echo $form->field($model, 'ert48') ?>

    <?php // echo $form->field($model, 'ert49') ?>

    <?php // echo $form->field($model, 'ert50') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
