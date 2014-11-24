<?php

/**
 * This is the model class for table "vod_tb_usuarios".
 *
 * The followings are the available columns in table 'vod_tb_usuarios':
 * @property integer $usua_id
 * @property string $usua_nome
 * @property string $usua_data_nascimento
 * @property string $usua_login
 * @property string $usua_senha
 * @property integer $usua_tipo
 *
 * The followings are the available model relations:
 * @property VodTbUsuariosTipos $usuaTipo
 * @property VodTbVideos[] $vodTbVideoses
 * @property VodTbVizualizacoes[] $vodTbVizualizacoes
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vod_tb_usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usua_id, usua_nome, usua_data_nascimento, usua_login, usua_senha, usua_tipo', 'required'),
			array('usua_id, usua_tipo', 'numerical', 'integerOnly'=>true),
			array('usua_nome', 'length', 'max'=>45),
			array('usua_login', 'length', 'max'=>20),
			array('usua_senha', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('usua_id, usua_nome, usua_data_nascimento, usua_login, usua_senha, usua_tipo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'usuaTipo' => array(self::BELONGS_TO, 'VodTbUsuariosTipos', 'usua_tipo'),
			'vodTbVideoses' => array(self::HAS_MANY, 'VodTbVideos', 'video_autor'),
			'vodTbVizualizacoes' => array(self::HAS_MANY, 'VodTbVizualizacoes', 'vizua_usua'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usua_id' => 'Usua',
			'usua_nome' => 'Usua Nome',
			'usua_data_nascimento' => 'Usua Data Nascimento',
			'usua_login' => 'Usua Login',
			'usua_senha' => 'Usua Senha',
			'usua_tipo' => 'Usua Tipo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('usua_id',$this->usua_id);
		$criteria->compare('usua_nome',$this->usua_nome,true);
		$criteria->compare('usua_data_nascimento',$this->usua_data_nascimento,true);
		$criteria->compare('usua_login',$this->usua_login,true);
		$criteria->compare('usua_senha',$this->usua_senha,true);
		$criteria->compare('usua_tipo',$this->usua_tipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
