<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mber2 */



?>
<div class="mber2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
