<?php

namespace app\controllers;
use app\models\User;
use app\models\LoginForm;
use Yii;

class UserController extends \yii\web\Controller
{
    public function actionRegister() {
        $model = new User();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
           $model->setPassword($model->password);
           if ($model->save()) {
             return $this->redirect(['site/index']); 
           }
        }
        return $this->render('register', ['model' => $model]);
      }
      
      public function actionLogin() {
        if (!\Yii::$app->user->isGuest) {
           return $this->goHome();
        }
        
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
           return $this->goBack();
        }
        return $this->render('login', ['model' => $model]);
      }

    public function actionIndex()
    {
        return $this->render('index');
    }

}
