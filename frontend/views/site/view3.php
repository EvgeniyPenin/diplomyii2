<?php
$this->title = 'Товары';
use yii\widgets\DetailView;
?>
<h2>Товары</h2>

<?php
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'fam',
        'im',
        'otch',
        'tovar',
        'data',
        'kol_tovara',
        'kol_opl_tovara',
        'price',
        'summa',
    ],
]);
