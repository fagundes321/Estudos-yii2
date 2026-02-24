<?php

use yii\bootstrap5\LinkPager as Bootstrap5LinkPager;
use yii\widgets\LinkPager;

?>

<h1>Deu Certo graças a Deus</h1>

<h1>Pessoas</h1>
<hr>

<ul>
    <?php foreach($pessoas as $pessoa) :?>

        <li>
            <?= $pessoa->nome .' '. $pessoa->email ?> <br>
            <small><?= "Profissão: " . $pessoa->profissao . ' <br> Idade:' . $pessoa->idade ?></small>
        </li>
    <?php endforeach?>
</ul>

<?= Bootstrap5LinkPager::widget(['pagination'=>$pagination]) ?>