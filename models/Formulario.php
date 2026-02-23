<?php

namespace app\models;

use yii\base\Model;

class Formulario extends Model
{

    public $nome;
    public $email;
    public $idade;
    public $profissao;


    public function rules()
    {

        return [

            [['nome', 'email', 'idade', 'profissao'], 'required'],
            ['email', 'email'],
            ['idade', 'number', 'integerOnly' => true]

        ];
    }


    public function attributeLabels() {

        return [
            'nome'  => 'Nome Completo',
            'email' => 'E-mail',
            'idade' => 'Idade',
            'profissao' => 'Profissão'
            ];

    }
}
