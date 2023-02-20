<?php
$this->title = 'Заказы';
use yii\widgets\DetailView;
?>
<h2>Заказы</h2>

<?php
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'fam',
        'im',
        'otch',
        'kolich',
        'price',
        'summa',
        'nalog',
        'adress',
        'nomer',
    ],
]);
