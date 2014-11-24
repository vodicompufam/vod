<?php

class AcessoController extends Controller {

    public function init() {
        parent::init();
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/signin.css");
    }

    public function actionIndex() {
        if(!Yii::app()->user->isGuest){
            $this->redirect(Yii::app()->homeUrl);
        }
        $this->render('login');
    }

    public function actionError() {
        if($error = Yii::app()->errorHandler->error) {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    public function actionLogin() {
        $model = new LoginForm;
        if(isset($_POST['LoginForm'])) {

            $model->usuario = $_POST['LoginForm']['usuario'];
            $model->senha   = $_POST['LoginForm']['senha'];

            if($model->login()) {

                Yii::app()->user->setState("usua_id", $model->usua_id);
                Yii::app()->user->setState("usua_nome", $model->usua_nome);
                Yii::app()->user->setState("usua_tipo", $model->usua_tipo);
                $this->redirect('/vod/perfil');
            }
        }
        $this->render('login', array('model' => $model));
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}

?>
