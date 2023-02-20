<?php

namespace frontend\models;
use yii\db\ActiveRecord;

class Tovar extends ActiveRecord {

    public function attributeLabels() {
        return [
            'id' =>'Ид',
            'fam' =>'Фамилия',
            'im' =>'Имя',
            'otch' =>'Отчество',
            'tovar' =>'Товар',
            'data' =>'Дата',
            'kol_tovara' =>'Количество_товара',
            'kol_opl_tovara' =>'Количество_оплаченного_товара',
            'price' =>'Цена',
            'summa' =>'Сумма',
        ];
    }
    public function rules() {
        return [
            [['fam','im','otch','tovar','data','kol_tovara','kol_opl_tovara','price','summa'],'required']
        ];
    }
}
