<?php

namespace frontend\models;

use Yii;
use yii\base\Model;


/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $password;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username','password'],'required','message'=> 'Заполните поле'],
            ['username','unique', 'targetClass' => User::className(),'message' => 'Этот логин уже занят'],
        ];
}

public function attributeLabels() {
    return [
        'username' => 'Логин',
        'password' => 'Пароль',
    ];
}

}