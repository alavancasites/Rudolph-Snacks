<?php

/**
 * This is the model base class for the table "destaque_produto".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "DestaqueProduto".
 *
 * Columns in table "destaque_produto" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $iddestaque_produto
 * @property string $titulo
 * @property string $imagem
 * @property string $botao
 * @property string $link
 * @property string $externo
 * @property string $ativo
 *
 */
abstract class BaseDestaqueProduto extends GxActiveRecord {
	
    
        
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'destaque_produto';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'DestaqueProduto|DestaqueProdutos', $n);
	}

	public static function representingColumn() {
		return array('titulo');
	}

	public function rules() {
		return array(
			array('titulo, botao, link', 'length', 'max'=>100),
			array('imagem', 'length', 'max'=>140),
			array('externo, ativo', 'length', 'max'=>1),
			array('titulo, imagem, botao, link, externo, ativo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('iddestaque_produto, titulo, imagem, botao, link, externo, ativo', 'safe', 'on'=>'search'),
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
			'iddestaque_produto' => Yii::t('app', 'Iddestaque Produto'),
			'titulo' => Yii::t('app', 'Titulo'),
			'imagem' => Yii::t('app', 'Imagem'),
			'botao' => Yii::t('app', 'Botao'),
			'link' => Yii::t('app', 'Link'),
			'externo' => Yii::t('app', 'Externo'),
			'ativo' => Yii::t('app', 'Ativo'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('iddestaque_produto', $this->iddestaque_produto);
		$criteria->compare('titulo', $this->titulo, true);
		$criteria->compare('imagem', $this->imagem, true);
		$criteria->compare('botao', $this->botao, true);
		$criteria->compare('link', $this->link, true);
		$criteria->compare('externo', $this->externo, true);
		$criteria->compare('ativo', $this->ativo, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}