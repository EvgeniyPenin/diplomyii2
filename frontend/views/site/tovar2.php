<?php
$this->title = 'Таблица товаров';
use yii\grid\GridView;
use yii\helpers\Html;
?>

<h2>Таблица товаров</h2>
<?php
echo Html::a("Добавить",["add3"],['class' => 'btn btn-info']);

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns'=>[
        'id',
        'fam',
        'im',
        'otch',
        'tovar',
        //'data',
        //'kol_tovara',
        //'kol_opl_tovara',
        //'price',
        //'summa',
        ['class' => 'yii\grid\ActionColumn']
    ]
]);