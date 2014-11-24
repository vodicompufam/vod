<?php

/**
 * This is the model class for table "vod_tb_visualizacoes".
 *
 * The followings are the available columns in table 'vod_tb_visualizacoes':
 * @property integer $visua_id
 * @property integer $visua_usua
 * @property integer $visua_video
 * @property string $visua_data
 *
 * The followings are the available model relations:
 * @property VodTbUsuarios $visuaUsua
 * @property VodTbVideos $visuaVideo
 */
class Visualizacao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vod_tb_visualizacoes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('visua_usua, visua_video, visua_data', 'required'),
			array('visua_usua, visua_video', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('visua_id, visua_usua, visua_video, visua_data', 'safe', 'on'=>'search'),
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
			'visuaUsua' => array(self::BELONGS_TO, 'VodTbUsuarios', 'visua_usua'),
			'visuaVideo' => array(self::BELONGS_TO, 'VodTbVideos', 'visua_video'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'visua_id' => 'Visua',
			'visua_usua' => 'Visua Usua',
			'visua_video' => 'Visua Video',
			'visua_data' => 'Visua Data',
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

		$criteria->compare('visua_id',$this->visua_id);
		$criteria->compare('visua_usua',$this->visua_usua);
		$criteria->compare('visua_video',$this->visua_video);
		$criteria->compare('visua_data',$this->visua_data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Visualizacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
