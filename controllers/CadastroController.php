<?php

namespace app\controllers;

use app\models\Formulario;
use app\models\Pessoas;
use Yii;
use yii\base\Controller;

class CadastroController extends Controller
{




    public function actionDados()
    {

        $dados = new Pessoas();
        // $post = Yii::$app->request->post();

        // if ($dados->load($post) && $dados->validate()) {
        //     return $this->render('view-cadastro-confirmacao', [
        //         'dados' => $dados
        //     ]);
        // }

        // return $this->render('view-cadastro', [
        //     'dados' => $dados
        // ]);

        var_dump($dados);
    }
}
