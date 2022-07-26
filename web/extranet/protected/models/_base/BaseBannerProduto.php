<?php

/**
 * This is the model base class for the table "banner_produto".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "BannerProduto".
 *
 * Columns in table "banner_produto" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $idbanner_produto
 * @property string $titulo
 * @property string $imagem
 * @property string $link
 * @property string $externo
 * @property string $ativo
 *
 */
abstract class BaseBannerProduto extends GxActiveRecord {
	
    
        
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'banner_produto';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'BannerProduto|BannerProdutos', $n);
	}

	public static function representingColumn() {
		return array('titulo');
	}

	public function rules() {
		return array(
			array('titulo, link', 'length', 'max'=>100),
			array('imagem', 'length', 'max'=>140),
			array('externo, ativo', 'length', 'max'=>1),
			array('titulo, imagem, link, externo, ativo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('idbanner_produto, titulo, imagem, link, externo, ativo', 'safe', 'on'=>'search'),
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
			'idbanner_produto' => Yii::t('app', 'Idbanner Produto'),
			'titulo' => Yii::t('app', 'Titulo'),
			'imagem' => Yii::t('app', 'Imagem'),
			'link' => Yii::t('app', 'Link'),
			'externo' => Yii::t('app', 'Externo'),
			'ativo' => Yii::t('app', 'Ativo'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('idbanner_produto', $this->idbanner_produto);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('imagem', $this->imagem, true);
		$criteria->compare('link', $this->link, true);
		$criteria->compare('externo', $this->externo, true);
		$criteria->compare('ativo', $this->ativo, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}