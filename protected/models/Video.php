<?php

/**
 * This is the model class for table "vod_tb_videos".
 *
 * The followings are the available columns in table 'vod_tb_videos':
 * @property integer $video_id
 * @property string $video_nome
 * @property string $video_descricao
 * @property integer $video_autor
 * @property integer $video_duracao
 * @property string $video_tamanho
 * @property string $video_data_upload
 * @property string $video_total_visualizacoes
 * @property string $video_data_ultimo_acesso
 * @property string $video_extensao
 * @property string $video_diretorio
 * @property string $video_thumb
 * @property integer $video_status
 *
 * The followings are the available model relations:
 * @property VodTbUsuarios $videoAutor
 * @property VodTbVideoStatus $videoStatus
 * @property VodTbTags[] $vodTbTags
 * @property VodTbVisualizacoes[] $vodTbVisualizacoes
 */
class Video extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vod_tb_videos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('video_nome, video_autor, video_tamanho, video_data_upload, video_extensao, video_diretorio, video_status, video_categoria', 'required'),
			array('video_autor, video_duracao, video_status', 'numerical', 'integerOnly'=>true),
			array('video_nome', 'length', 'max'=>80),
			array('video_descricao', 'length', 'max'=>200),
			array('video_tamanho, video_total_visualizacoes', 'length', 'max'=>20),
			array('video_extensao', 'length', 'max'=>10),
			array('video_diretorio, video_thumb', 'length', 'max'=>60),
			array('video_data_ultimo_acesso', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('video_id, video_nome, video_descricao, video_autor, video_duracao, video_tamanho, video_data_upload, video_total_visualizacoes, video_data_ultimo_acesso, video_extensao, video_diretorio, video_thumb, video_status, video_categoria', 'safe', 'on'=>'search'),
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
			'videoAutor' => array(self::BELONGS_TO, 'VodTbUsuarios', 'video_autor'),
			'videoStatus' => array(self::BELONGS_TO, 'VodTbVideoStatus', 'video_status'),
			'vodTbTags' => array(self::MANY_MANY, 'VodTbTags', 'vod_tb_videos_has_tags(vod_tb_video_id, vod_tb_tags_id)'),
			'vodTbVisualizacoes' => array(self::HAS_MANY, 'VodTbVisualizacoes', 'visua_video'),
			'vodTbCategorias' => array(self::BELONGS_TO, 'VodTbCategorias', 'video_categoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'video_id' => 'Video',
			'video_nome' => 'Video Nome',
			'video_descricao' => 'Video Descricao',
			'video_autor' => 'Video Autor',
			'video_duracao' => 'Video Duracao',
			'video_tamanho' => 'Video Tamanho',
			'video_data_upload' => 'Video Data Upload',
			'video_total_visualizacoes' => 'Video Total Visualizacoes',
			'video_data_ultimo_acesso' => 'Video Data Ultimo Acesso',
			'video_extensao' => 'Video Extensao',
			'video_diretorio' => 'Video Diretorio',
			'video_thumb' => 'Video Thumb',
			'video_status' => 'Video Status',
                        'video_categoria' => 'Video Categoria'
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

		$criteria->compare('video_id',$this->video_id);
		$criteria->compare('video_nome',$this->video_nome,true);
		$criteria->compare('video_descricao',$this->video_descricao,true);
		$criteria->compare('video_autor',$this->video_autor);
		$criteria->compare('video_duracao',$this->video_duracao);
		$criteria->compare('video_tamanho',$this->video_tamanho,true);
		$criteria->compare('video_data_upload',$this->video_data_upload,true);
		$criteria->compare('video_total_visualizacoes',$this->video_total_visualizacoes,true);
		$criteria->compare('video_data_ultimo_acesso',$this->video_data_ultimo_acesso,true);
		$criteria->compare('video_extensao',$this->video_extensao,true);
		$criteria->compare('video_diretorio',$this->video_diretorio,true);
		$criteria->compare('video_thumb',$this->video_thumb,true);
		$criteria->compare('video_status',$this->video_status);
		$criteria->compare('video_categoria',$this->video_categoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Video the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
            public function uid() {
        $l = 11;
        $s = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $uid = null;

        while (strlen($uid) < $l) {
            $uid .= $s[mt_rand(0, (strlen($s) - 1))];
        }
        return $uid;
    }

    public function afterSave() {
        $this->addImages();
        parent::afterSave();
    }

    public function addImages() {
        //If we have pending images
        if (Yii::app()->user->hasState('images')) {
            $userImages = Yii::app()->user->getState('images');
            //Resolve the final path for our images
            
             foreach ($userImages as $image) { 
            $path = Yii::app()->getBasePath() . "/../images/uploads/{$this->codvideo}/";
            //$path_inicial = "/var/www/vod/images/uploads/{$image["path"]}";
            $novo_nome = "/var/www/vod/images/uploads/{$this->codvideo}"."{$image["extension"]}";
            $path_final = "/var/www/vod/images/uploads/{$this->codvideo}/{$this->codvideo}"."{$image["extension"]}";
            //Create the folder and give permissions if it doesnt exists
            if (!is_dir($path)) {
                mkdir($path);
                chmod($path, 0777);
            }
            rename($image["path"], $novo_nome);
//            rename($path_inicial, $novo_nome);
            //$origem = "/var/www/vod/images/uploads/{$image["filename"]}";
//            $destino = "/var/www/vod/images/uploads/{$image["filename"]}/{$image["filename"]}.jpg";
            copy($novo_nome, $path_final);
            unlink($novo_nome);
            
        }
//
////            Now lets create the corresponding models and move the files
////            foreach ($userImages as $image) {
////                if (is_file($image["path"])) {
////                    if (rename($image["path"], $path . $image["filename"])) {
////                        chmod($path . $image["filename"], 0777);
////                        Yii::import( "image.image.Image" );
////                        //$img = new Image($image);
////                        $imagem = Yii::app()->getBasePath() . "/../images/uploads/{$this->codvideo}/".$image["filename"];
////                        $img = new Image($imagem);
//////                        $cod = $this->codvideo;
////                        //$img->thumb = "/images/uploads/".$cod."/".$image["filename"];
//////                        $img->size = $image["size"];
//////                        $img->mime = $image["mime"];
//////                        $img->name = $image["name"];
////                        //$img->source = "/images/uploads/".$image["filename"];
////                        //$img->somemodel_id = $this->id;
//////                       $img->save();
////                        if (!$img->save()) {
//////                            Its always good to log something
////                            Yii::log("Could not save Image:\n" . CVarDumper::dumpAsString(
////                                            $img->getErrors()), CLogger::LEVEL_ERROR);
//////                            this exception will rollback the transaction
////                            throw new Exception('Could not save Image');
////                        }
////                    }
////                } else {
////                    //You can also throw an execption here to rollback the transaction
////                    Yii::log($image["path"] . " is not a file", CLogger::LEVEL_WARNING);
////                }
////            }
//            //Clear the user's session
//            Yii::app()->user->setState('images', null);
       }
    }
}
