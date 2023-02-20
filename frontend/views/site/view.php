<?php
$this->title = 'Клиенты';
use yii\widgets\DetailView;
?>
<h2>Клиенты</h2>

<?php
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'fam',
        'im',
        'otch',
        'adress',
        'vozrast',
        'pol',
        'pasport',
        'nationality',
        'nomer',
    ],
]);
