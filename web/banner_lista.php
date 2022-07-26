<section class="banner">
  <?php
    $criteria = new CDbCriteria();
    $criteria->order = 'idbanner desc';
    $criteria->addCondition("ativo = 1");
    $banners = Banner::model()->findAll($criteria);
    foreach($banners as $banner) {
      if ($banner->externo==1){
        $target = "target='_blank' rel='noopener'";
      }else{ 
        $target = '';
      }
  ?>
    <div>
      <picture>
      <? 
        if ($banner->imagem_responsiva1 != NULL){
      ?>
        <source media="(max-width: 1000px)" srcset="extranet/uploads/Banner/<?=$banner->imagem_responsiva2?>">
      <? 
        } if ($banner->imagem_responsiva1 != NULL){
      ?>
        <source media="(min-width: 1800px)" srcset="extranet/uploads/Banner/<?=$banner->imagem_responsiva1?>">
      <? 
        }
      ?>        
        <img src="extranet/uploads/Banner/<?=$banner->imagem?>" class="img-responsive center-block" alt="<?=$banner->titulo?>">
      </picture>
      <div class="infos"><?=$banner->titulo?></h2>
        <a href="<?=$banner->link?>" <?=$target?> class="btn-primary"><?=$banner->botao?></a>
      </div>
    </div>
  <?php
    }
  ?>
</section>
