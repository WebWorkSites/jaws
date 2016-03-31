<?php

use yii\grid\GridView;
use yii\helpers\Html;
use himiklab\thumbnail\EasyThumbnailImage;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <p>
        <?= Html::a('New Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?php \yii\widgets\Pjax::begin(); ?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
//    'filterModel' => $searchModel,
    'tableOptions' => ['class' => 'table table-striped'],
    'columns' => [
        [
            'attribute' => 'title',
            'value' => function($model){
                return Html::a($model->title, ['view', 'id' => $model->id]);
            },
            'format' => 'html'
        ],
        [
            'attribute' => 'text_preview',
            'format' => 'html'
        ],
        [
            'attribute' => 'img',
            'value' => function($model){
                return Html::a(Html::img($model->img, ['style' => 'width:300px']), ['view', 'id' => $model->id]);
            },
            'format' => 'html'
        ],
        'created_at:datetime',
        'browser',
        'ip',
        'country'


    ]
]); ?>
<?php \yii\widgets\Pjax::end(); ?>

