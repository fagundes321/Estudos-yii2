<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>

<h1>consegui de primeira graças a Deus</h1>

<h2>teste formulario</h2>

<?php $form = ActiveForm::begin()?>

    <?= $form->field($dados, 'nome') ?>
    <?= $form->field($dados, 'email') ?>
    <?= $form->field($dados, 'idade') ?>
    <?= $form->field($dados, 'profissao') ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar Dados', ['class'=>'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end()?>