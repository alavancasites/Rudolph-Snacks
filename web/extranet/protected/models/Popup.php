<?php

Yii::import('application.models._base.BasePopup');

class Popup extends BasePopup
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
    
    
    public function init(){
		$this->data_saida = date('d/m/Y');
  
    }
    
    public function beforeSave(){
		if($this->data_saida != "")
			$this->data_saida = Util::formataDataBanco($this->data_saida);
		//{{beforeSave}}
		return parent::beforeSave();
	}
	
	public function afterFind(){
		if($this->data_saida != "")
			$this->data_saida = Util::formataDataApp($this->data_saida);
		//{{afterFind}}
		return parent::afterFind();
	}
    
    public function behaviors(){
    	return array(
        	//{{behaviors}}
        );
    }
    
        
}