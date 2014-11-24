<?php

/**
 * This is the model class for table "vod_tb_videos_has_tags".
 *
 * The followings are the available columns in table 'vod_tb_videos_has_tags':
 * @property integer $vod_tb_video_id
 * @property integer $vod_tb_tags_id
 */
class VideoTag extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vod_tb_videos_has_tags';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vod_tb_video_id, vod_tb_tags_id', 'required'),
			array('vod_tb_video_id, vod_tb_tags_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('vod_tb_video_id, vod_tb_tags_id', 'safe', 'on'=>'search'),
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
			'vod_tb_video_id' => 'Vod Tb Video',
			'vod_tb_tags_id' => 'Vod Tb Tags',
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

		$criteria->compare('vod_tb_video_id',$this->vod_tb_video_id);
		$criteria->compare('vod_tb_tags_id',$this->vod_tb_tags_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VideoTag the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
