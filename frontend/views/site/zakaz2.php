<?php
$this->title = 'Таблица заказы';
use yii\grid\GridView;
use yii\helpers\Html;
?>

<h2>Таблица заказы</h2>
<?php
echo Html::a("Добавить",["add2"],['class' => 'btn btn-info']);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns'=>[
        'id',
        'fam',
        'im',
        'otch',
        'kolich',
        //'price',
        //'summa',
        //'nalog',
        //'adress',
        //'nomer',
        ['class' => 'yii\grid\ActionColumn']
    ]
]);