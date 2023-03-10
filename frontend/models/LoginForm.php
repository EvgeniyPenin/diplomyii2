<?php

namespace frontend\models;

use Yii;
use yii\base\Model;


class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    public function rules()
    {
        return [
            [['username','password'],'required',],
            ['rememberMe', 'boolean'],
            ['password','validatePassword'],
        ];
}



public function validatePassword($attribute, $params)
{
    if (!$this->hasErrors ()) {
        $user = $this->getUser();

        if (!$user || !$user->validatePassword($this->password))
        $this->addError($attribute, 'Incorrect username or password');
    }
}


public function attributeLabels() {
    return [
        'username' => 'Логин',
        'password' => 'Пароль',
        'rememberMe' => 'Запомнить',
    ];
}
}
    

