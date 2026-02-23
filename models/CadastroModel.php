<?php 

namespace app\models;

use yii\base\Model;

class CadastroModel extends Model{

    public $nome;
    public $email;
    public $idade;

    // nessa metodo eu configuro as regras
     public function rules()
     {
    
        return [
            [['nome', 'email', 'idade'], 'required'],
            ['email', 'email'],
            ['idade', 'number', 'integerOnly'=>true]
        ];
    }

    
     public function attributeLabels()
     {
    
        return [
            'nome' => 'Nome Completo',
            'email' => 'E-mail',
            'idade' => 'Idade'
        ];
    
    }
    
    

}