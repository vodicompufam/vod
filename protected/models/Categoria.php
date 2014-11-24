<?php

/**
 * This is the model class for table "vod_tb_categorias".
 *
 * The followings are the available columns in table 'vod_tb_categorias':
 * @property integer $cate_id
 * @property string $cate_nome
 * @property string $cate_descricao
 */
class Categoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vod_tb_categorias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cate_nome', 'required'),
			array('cate_nome', 'length', 'max'=>55),
			array('cate_descricao', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cate_id, cate_nome, cate_descricao', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cate_id' => 'Cate',
			'cate_nome' => 'Cate Nome',
			'cate_descricao' => 'Cate Descricao',
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

		$criteria->compare('cate_id',$this->cate_id);
		$criteria->compare('cate_nome',$this->cate_nome,true);
		$criteria->compare('cate_descricao',$this->cate_descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Categoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
