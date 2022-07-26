<?php

/**
 * This is the model base class for the table "gallery".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Gallery".
 *
 * Columns in table "gallery" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $habilitar
 * @property string $excluido
 * @property string $versions_data
 * @property integer $name
 * @property integer $description
 *
 */
abstract class BaseGallery extends GxActiveRecord {
	
    
        
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'gallery';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Gallery|Galleries', $n);
	}

	public static function representingColumn() {
		return array('habilitar');
	}

	public function rules() {
		return array(
			array('versions_data', 'required'),
			array('name, description', 'numerical', 'integerOnly'=>true),
			array('habilitar, excluido', 'length', 'max'=>1),
			array('habilitar, excluido, name, description', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, habilitar, excluido, versions_data, name, description', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'habilitar' => Yii::t('app', 'Habilitar'),
			'excluido' => Yii::t('app', 'Excluido'),
			'versions_data' => Yii::t('app', 'Versions Data'),
			'name' => Yii::t('app', 'Name'),
			'description' => Yii::t('app', 'Description'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('habilitar', $this->habilitar, true);
		$criteria->compare('excluido', $this->excluido, true);
		$criteria->compare('versions_data', $this->versions_data, true);
		$criteria->compare('name', $this->name);
		$criteria->compare('description', $this->description);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}