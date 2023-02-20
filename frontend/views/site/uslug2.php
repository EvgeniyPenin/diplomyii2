<?php
$this->title = 'Таблица услуг';
use yii\grid\GridView;
use yii\helpers\Html;
?>

<h2>Таблица услуг</h2>
<?php
echo Html::a("Добавить",["add4"],['class' => 'btn btn-info']);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns'=>[
        'id',
        'fam',
        'im',
        'otch',
        'naimenovanie',
        //'pochta',
        //'nomer',
        //'pasport',
        //'data',
        //'adress',
        ['class' => 'yii\grid\ActionColumn']
    ]
]);