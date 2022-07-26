<header>
  <div class="row-fluid">
    <nav class="nav-icons">
      <div class="logo_cliente"><a href="<?php echo Yii::app()->request->baseUrl; ?>/site"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo_menu.png" alt=""/></a></div>
      <div class="menu_pop">
        <?
          if ( Yii::app()->user->obj->group->temPermissaoAction( 'banner', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('banner/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Banner</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'popup', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('popup/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Pop-up</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'bannerProduto', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('bannerProduto/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Banner secundário</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'destaque', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('destaque/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Destaque</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'destaqueProduto', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('destaqueProduto/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Destaque produto</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'personalizado', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('personalizado/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Produto personalizado</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'produto', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('produto/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Produtos</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'snack', 'index' ) ) {
        ?>
          <a href="<?=$this->createUrl('snack/index');?>"><i class="fa fa-lg fa-caret-right"></i><span>Snacks</span></a>
        <?
          } if ( Yii::app()->user->obj->group->temPermissaoAction( 'contato', 'index' ) ) {
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
