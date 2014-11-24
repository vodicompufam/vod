<?php

/**
 * This is the model class for table "vod_tb_usuarios_tipos".
 *
 * The followings are the available columns in table 'vod_tb_usuarios_tipos':
 * @property integer $usuatipo_id
 * @property string $usuatipo_nome
 * @property string $usuatipo_descricao
 *
 * The followings are the available model relations:
 * @property VodTbUsuarios[] $vodTbUsuarioses
 */
class UsuarioTipo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vod_tb_usuarios_tipos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuatipo_nome', 'required'),
			array('usuatipo_nome', 'length', 'max'=>45),
			array('usuatipo_descricao', 'length', 'max'=>90),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('usuatipo_id, usuatipo_nome, usuatipo_descricao', 'safe', 'on'=>'search'),
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
			'vodTbUsuarioses' => array(self::HAS_MANY, 'VodTbUsuarios', 'usua_tipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usuatipo_id' => 'Usuatipo',
			'usuatipo_nome' => 'Usuatipo Nome',
			'usuatipo_descricao' => 'Usuatipo Descricao',
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

		$criteria->compare('usuatipo_id',$this->usuatipo_id);
		$criteria->compare('usuatipo_nome',$this->usuatipo_nome,true);
		$criteria->compare('usuatipo_descricao',$this->usuatipo_descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsuarioTipo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
