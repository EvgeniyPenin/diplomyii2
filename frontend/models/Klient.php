<?php

namespace frontend\models;
use yii\db\ActiveRecord;

class Klient extends ActiveRecord {

    public function attributeLabels() {
        return [
            'id' =>'Ид',
            'fam' =>'Фамилия',
            'im' =>'Имя',
            'otch' =>'Отчество',
            'adress' =>'Адрес',
            'vozrast' =>'Возраст',
            'pol' =>'Пол',
            'pasport' =>'Паспорт',
            'nationality' =>'Национальность',
            'nomer' =>'Номер',
        ];
    }
    public function rules() {
        return [
            [['fam','im','otch','adress','vozrast','pol','pasport','nationality','nomer'],'required']
        ];
    }
}
