<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cliente}}`.
 */
class m260223_134749_create_cliente_table extends Migration
{
    /**
     * {@inheritdoc}
     */
   public function safeUp()
{
    $this->createTable('cliente', [
        'id' => $this->primaryKey(),
        'nome' => $this->string(100),
        'email' => $this->string(100),
    ]);
}

public function safeDown()
{
    $this->dropTable('cliente');
}
}
