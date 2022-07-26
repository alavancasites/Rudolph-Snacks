<header>
  <div class="row-fluid">
    <nav class="nav-icons">
      <div class="logo_cliente"><a href="<?php echo Yii::app()->request->baseUrl; ?>/site"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo_menu.png" alt=""/></a></div>
      <div class="menu_pop">
        <div class="submenu accordion-group">
          <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"><i class="fa"></i><span>Página inicial</span></a> </div>
          <div id="collapseOne1" class="accordion-body collapse" style="height: 0px;">
            <?
              if ( Yii::app()->user->obj->group->temPermissaoAction( 'banner', 'index' ) ) {
            ?>
              <a class="fa fa-lg fa-caret-right" href="<?=$this->createUrl('banner/index');?>"><span>Banner</span></a>
            <?
              }if ( Yii::app()->user->obj->group->temPermissaoAction( 'popup', 'index' ) ) {
            ?>
              <a class="fa fa-lg fa-caret-right" href="<?=$this->createUrl('popup/index');?>"><span>Pop-up</span></a>
            <?
              }if ( Yii::app()->user->obj->group->temPermissaoAction( 'destaque', 'index' ) ) {
            ?>
              <a class="fa fa-lg fa-caret-right" href="<?=$this->createUrl('destaque/index');?>"><span>Destaque</span></a>
            <?
              }
            ?>
          </div>
        </div>
        <div class="submenu accordion-group">
          <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne2"><i class="fa"></i><span>Produtos</span></a> </div>
          <div id="collapseOne2" class="accordion-body collapse" style="height: 0px;">
            <?
              if ( Yii::app()->user->obj->group->temPermissaoAction( 'bannerProduto', 'index' ) ) {
            ?>
              <a class="fa fa-lg fa-caret-right" href="<?=$this->createUrl('bannerProduto/index');?>"><span>Banner</span></a>
            <?
              }if ( Yii::app()->user->obj->group->temPermissaoAction( 'personalizado', 'index' ) ) {
            ?>
              <a class="fa fa-lg fa-caret-right" href="<?=$this->createUrl('personalizado/index');?>"><span>Personalizados</span></a>
            <?
              }if ( Yii::app()->user->obj->group->temPermissaoAction( 'produto', 'index' ) ) {
            ?>
              <a class="fa fa-lg fa-caret-right" href="<?=$this->createUrl('produto/index');?>"><span>Produtos</span></a>
            <?
              }if ( Yii::app()->user->obj->group->temPermissaoAction( 'destaque', 'index' ) ) {
            ?>
              <a class="fa fa-lg fa-caret-right" href="<?=$this->createUrl('destaque/index');?>"><span>Snacks</span></a>
            <?
              }
            ?>
          </div>
        </div>
        <?
          if ( Yii::app()->user->obj->group->temPermissaoAction( 'destaqueProduto', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('destaqueProduto/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Destaque produto</span></a>
        <?
          }
        ?>

        <?
           if ( Yii::app()->user->obj->group->temPermissaoAction( 'contato', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('contato/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Contato</span></a>
        <?
          }
        ?>
      </div>
      <div class="menu_suporte"> D&uacute;vidas ou suporte <a href="mailto:atendimento@alavanca.digital">atendimento@alavanca.digital</a> <a href="http://www.alavanca.digital" target="_blank">www.alavanca.digital</a> </div>
    </nav>
  </div>
</header>
