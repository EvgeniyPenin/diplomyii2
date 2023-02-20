<?php

namespace frontend\models;
use yii\db\ActiveRecord;

class Zakaz extends ActiveRecord {

    public function attributeLabels() {
        return [
            'id' =>'Ид',
            'fam' =>'Фамилия',
            'im' =>'Имя',
            'otch' =>'Отчество',
            'kolich' =>'Количество',
            'price' =>'Цена',
            'summa' =>'Сумма',
            'nalog' =>'Налог',
            'adress' =>'Адрес',
            'nomer' =>'Номер',
        ];
    }
    public function rules() {
        return [
            [['fam','im','otch','kolich','price','summa','nalog','adress','nomer'],'required']
        ];
    }
}
