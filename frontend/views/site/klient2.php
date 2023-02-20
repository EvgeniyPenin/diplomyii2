<?php
$this->title = 'Таблица клиенты';
use yii\grid\GridView;
use yii\helpers\Html;
?>

<h2>Таблица клиенты</h2>
<?php
echo Html::a("Добавить",["add"],['class' => 'btn btn-info']);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns'=>[
        'id',
        'fam',
        'im',
        'otch',
        'adress',
        //'vozrast',
        //'pol',
        //'pasport',
        //'nationality',
        //'nomer',
        ['class' => 'yii\grid\ActionColumn']
    ]
]);