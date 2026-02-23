<?php 

namespace app\controllers;

use yii\web\Controller as WebController;

class HelloController extends WebController{

    
     public function actionSaySomething($message = 'hello'){
    
        return $this->render('say-something', [
            'message' => $message
        ]);
    
    }
    
}