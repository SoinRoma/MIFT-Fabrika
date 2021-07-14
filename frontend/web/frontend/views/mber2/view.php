<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mber2 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mber2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mber2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ert1:ntext',
            'ert2:ntext',
            'ert3:ntext',
            'ert4:ntext',
            'ert5:ntext',
            'ert6:ntext',
            'ert7:ntext',
            'ert8:ntext',
            'ert9:ntext',
            'ert10:ntext',
            'ert11:ntext',
            'ert12:ntext',
            'ert13:ntext',
            'ert14:ntext',
            'ert15:ntext',
            'ert16:ntext',
            'ert17:ntext',
            'ert18:ntext',
            'ert19:ntext',
            'ert20:ntext',
            'ert21:ntext',
            'ert22:ntext',
            'ert23:ntext',
            'ert24:ntext',
            'ert25:ntext',
            'ert26:ntext',
            'ert27:ntext',
            'ert28:ntext',
            'ert29:ntext',
            'ert30:ntext',
            'ert31:ntext',
            'ert32:ntext',
            'ert33:ntext',
            'ert34:ntext',
            'ert35:ntext',
            'ert36:ntext',
            'ert37:ntext',
            'ert38:ntext',
            'ert39:ntext',
            'ert40:ntext',
            'ert41:ntext',
            'ert42:ntext',
            'ert43:ntext',
            'ert44:ntext',
            'ert45:ntext',
            'ert46:ntext',
            'ert47:ntext',
            'ert48:ntext',
            'ert49:ntext',
            'ert50:ntext',
        ],
    ]) ?>

</div>
