<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoas".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $email
 * @property int|null $idade
 * @property string|null $profissao
 */
class Pessoas extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pessoas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'idade', 'profissao'], 'default', 'value' => null],
            [['idade'], 'integer'],
            [['nome', 'profissao'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'email' => 'Email',
            'idade' => 'Idade',
            'profissao' => 'Profissao',
        ];
    }

}
