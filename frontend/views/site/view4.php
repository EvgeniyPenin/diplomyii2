<?php
$this->title = 'Услуги';
use yii\widgets\DetailView;
?>
<h2>Услуги</h2>

<?php
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'fam',
        'im',
        'otch',
        'naimenovanie',
        'pochta',
        'nomer',
        'pasport',
        'data',
        'adress',
    ],
]);
