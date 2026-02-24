<?php 

namespace app\controllers;

use app\models\Pessoas;
use yii\base\Controller;
use yii\data\Pagination;

class PessoasController extends Controller{

    
     public function actionIndex(){
     
        // Busco todos os registro no banco, conde quero ordernar belo nome
        // $pessoas = Pessoas::find()->orderBy('nome')->all();

        // $pessoa = Pessoas::findOne(1);
        // $pessoa->nome  = 'Poliana';
        // $pessoa->save();

        // echo $pessoa->nome;
        // echo '<pre>'; 
        // var_dump($pessoas); 
        // echo '</pre>'; exit;

        


        // return $this->render('pessoa-index');

        $query = Pessoas::find();

        $pagination = new Pagination(
            [
                'defaultPageSize' => 3,
                'totalCount' => $query->count()
            ]
        );

        $pessoas = $query->orderBy('nome')->offset($pagination->offset)->limit($pagination->limit)->all();

        return $this->render('pessoa-index',[
            'pagination' => $pagination,
            'pessoas'    => $pessoas
        ]);
    
    }
    

}