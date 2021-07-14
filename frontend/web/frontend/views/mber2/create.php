<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mber2 */

$this->title = 'Create Mber2';
$this->params['breadcrumbs'][] = ['label' => 'Mber2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mber2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
