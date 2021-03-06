<?php

/**
 * This is the model base class for the table "popup".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Popup".
 *
 * Columns in table "popup" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $idpopup
 * @property string $titulo
 * @property string $data_saida
 * @property string $imagem
 * @property string $link
 * @property string $video
 * @property string $ativo
 *
 */
abstract class BasePopup extends GxActiveRecord {
	
    
        
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'popup';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Popup|Popups', $n);
	}

	public static function representingColumn() {
		return array('titulo');
	}

	public function rules() {
		return array(
			array('titulo, link', 'length', 'max'=>100),
			array('imagem', 'length', 'max'=>140),
			array('video', 'length', 'max'=>200),
			array('ativo', 'length', 'max'=>1),
			array('data_saida', 'safe'),
			array('titulo, data_saida, imagem, link, video, ativo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idpopup, titulo, data_saida, imagem, link, video, ativo', 'safe', 'on'=>'search'),
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
			'idpopup' => Yii::t('app', 'Idpopup'),
			'titulo' => Yii::t('app', 'Titulo'),
			'data_saida' => Yii::t('app', 'Data Saida'),
			'imagem' => Yii::t('app', 'Imagem'),
			'link' => Yii::t('app', 'Link'),
			'video' => Yii::t('app', 'Video'),
			'ativo' => Yii::t('app', 'Ativo'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idpopup', $this->idpopup);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('data_saida', $this->data_saida, true);
		$criteria->compare('imagem', $this->imagem, true);
		$criteria->compare('link', $this->link, true);
		$criteria->compare('video', $this->video, true);
		$criteria->compare('ativo', $this->ativo, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}