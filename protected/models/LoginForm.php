<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel {

    public $usua_id;
    public $usua_nome;
    public $usua_tipo;
    public $usuario;
    public $senha;
    public $_identity;

    public function rules() {
        return array(
            array('usuario, senha', 'required', 'message' => '{attribute} é obrigatório.'),
        );
    }

    public function attributeLabels() {
        return array(
            'usuario' => 'Usuário',
            'senha'   => 'Senha',
        );
    }

    public function authenticate() {

        $criteria = new CDbCriteria();

        $criteria->addCondition("usua_login = '" . $this->usuario . "'");
        $criteria->addCondition("usua_senha = '" . $this->senha . "'");

        $modelUsuario = Usuario::model()->find($criteria);

        if ($this->usuario == '' || $this->senha == '') {
            Yii::app()->user->setFlash('error', 'Usuário e senha são obrigatórios.');
            return false;
        }
        else if (empty($modelUsuario)) {
            Yii::app()->user->setFlash('error', 'Usuário ou senha inválidos');
            return false;
        }
        else {
            $this->usua_id   = $modelUsuario->usua_id;
            $this->usua_nome   = $modelUsuario->usua_nome;
            $this->usua_tipo   = $modelUsuario->usua_tipo;
            $this->_identity = new UserIdentity($this->usuario, $this->senha);
            return true;
        }
    }

    public function login() {

        if ($this->authenticate() == true) {
            $duration = 3600 * 24 * 30;
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        }
        else {
            return false;
        }
    }

}
