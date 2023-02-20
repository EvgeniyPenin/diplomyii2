<?php

namespace frontend\models;
use yii\db\ActiveRecord;

class Uslug extends ActiveRecord {

    public function attributeLabels() {
        return [
            'id' =>'Ид',
            'fam' =>'Фамилия',
            'im' =>'Имя',
            'otch' =>'Отчество',
            'naimenovanie' =>'Наименование',
            'pochta' =>'Почта',
            'nomer' =>'Номер',
            'pasport' =>'Паспорт',
            'data' =>'Дата',
            'adress' =>'Адрес',
        ];
    }
    public function rules() {
        return [
            [['fam','im','otch','naimenovanie','pochta','nomer','pasport','data','adress'],'required']
        ];
    }
}
