<?php
class CategoriaMongoDB extends EMongoDocument
{
      public $cate_nome;
 
      // This has to be defined in every model, this is same as with standard Yii ActiveRecord
      public static function model($className=__CLASS__)
      {
        return parent::model($className);
      }
 
      // This method is required!
      public function getCollectionName()
      {
        return 'vod_col_categorias';
      }
 
      public function rules()
      {
        return array(
          array('cate_nome', 'required'),
          array('cate_nome', 'length', 'max' => 20),
          array('cate_nome', 'length', 'max' => 255),
        );
      }
 
      public function attributeLabels()
      {
        return array(
          'cate_nome'  => 'Nome da Categoria',
        );
      }
}
?>