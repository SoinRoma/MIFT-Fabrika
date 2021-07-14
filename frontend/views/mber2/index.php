<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\Mber2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки предпринимателей';

?>

<?php Pjax::begin(); ?>

<?=

GridView::widget([
    'dataProvider'=>$dataProvider,
    'filterModel' => $searchModel,
    'autoXlFormat'=>true,
    'toggleDataContainer' => ['class' => 'btn-group mr-2'],
    'export'=>[
        'showConfirmAlert'=>false,
        'target'=>GridView::TARGET_BLANK
    ],
    'columns'=>[
        'id',

        'ert1:ntext',
        'ert2:ntext',
        'ert3:ntext',
        /*[
            'label' => 'Конец договора',
            'attribute' => 'ert12',

        ],*/
        //'data_update',
        [
            'attribute' => 'ert19',
            'vAlign' => 'middle',
            'width' => '180px',
            'filter' => ["Новая заявка"=>"Новая заявка",
                "Заявка принята"=>"Заявка принята",
                "Заявка в обработке"=>"Заявка в обработке",
                "Решен"=>"Решен",
                "Не решен"=>"Не решен",],
            /*'value' => function ($data) {
                if($data->ert1 == 1){$dis ='погащен'; }elseif ($data->ert1 == 2){$dis ='Автосписаний'; }elseif ($data->ert1 == 3){$dis ='не Автосписаний';}elseif ($data->ert1 == 4){$dis ='срок законче';}
                return 'tst';//$dis;
            }*/

        ],
        'ert4:ntext',
        'ert49:ntext',
        'ert50:ntext',
        /*[
            'class'=>'kartik\grid\FormulaColumn',
            'label'=>'Amount',
            'format' => ['decimal', 2],
            'value'=>function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                return $widget->col(1, $p) + $widget->col(2, $p) ;
            },
            'hAlign'=>'right',
            'width'=>'120px',
            'pageSummary'=>true
        ],*/
        [
            'class' => 'kartik\grid\ActionColumn',
            'dropdownOptions' => ['class' => 'float-right'],

            'viewOptions' => ['title' => 'Детальный просмотр!', 'data-toggle' => 'tooltip'],

        ],
    ],
    'pjax'=>true,
    'showPageSummary'=>true,
    'panel'=>[
        'type'=>'primary',
        'heading'=>'Все заявки'
    ]
]);
?>

<?php Pjax::end(); ?>

