<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\Mber2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mber2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mber2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mber2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ert1:ntext',
            'ert2:ntext',
            'ert3:ntext',
            'ert4:ntext',
            //'ert5:ntext',
            //'ert6:ntext',
            //'ert7:ntext',
            //'ert8:ntext',
            //'ert9:ntext',
            //'ert10:ntext',
            //'ert11:ntext',
            //'ert12:ntext',
            //'ert13:ntext',
            //'ert14:ntext',
            //'ert15:ntext',
            //'ert16:ntext',
            //'ert17:ntext',
            //'ert18:ntext',
            //'ert19:ntext',
            //'ert20:ntext',
            //'ert21:ntext',
            //'ert22:ntext',
            //'ert23:ntext',
            //'ert24:ntext',
            //'ert25:ntext',
            //'ert26:ntext',
            //'ert27:ntext',
            //'ert28:ntext',
            //'ert29:ntext',
            //'ert30:ntext',
            //'ert31:ntext',
            //'ert32:ntext',
            //'ert33:ntext',
            //'ert34:ntext',
            //'ert35:ntext',
            //'ert36:ntext',
            //'ert37:ntext',
            //'ert38:ntext',
            //'ert39:ntext',
            //'ert40:ntext',
            //'ert41:ntext',
            //'ert42:ntext',
            //'ert43:ntext',
            //'ert44:ntext',
            //'ert45:ntext',
            //'ert46:ntext',
            //'ert47:ntext',
            //'ert48:ntext',
            //'ert49:ntext',
            //'ert50:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
