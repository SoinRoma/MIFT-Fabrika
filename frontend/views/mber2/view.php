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

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'ert48:ntext',
            'ert49:ntext',
            'ert50:ntext',
        ],
    ]) ?>

</div>
