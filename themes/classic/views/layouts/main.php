<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/classic/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/classic/css/style.css" />
        
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/jquery-1.11.1.min.js"); ?>     
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/vod.js",CClientScript::POS_END); ?>     
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/bootstrap.min.js",CClientScript::POS_END); ?>     
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . "/js/docs.min.js",CClientScript::POS_END); ?>     
        

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
</head>

<body>

<div class="container">

    <div id="header">
        <?php if(Yii::app()->controller->id == 'site' || Yii::app()->controller->id == 'acesso'){ ?>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <span class="navbar-brand">VOD-LOGO</span>
                <?php if(Yii::app()->user->getState('usua_tipo') == 1){ ?>
                    <span class="navbar-brand" style="color: black">ADMIN</span>
                <?php } ?>
                <?php if(Yii::app()->user->getState('usua_tipo') == 2){ ?>
                    <span class="navbar-brand" style="color: black">PUBLISHER</span>
                <?php } ?>
                    <a class="navbar-brand item-nav" href="/vod/">Home</a>
                </div>
            <?php if(Yii::app()->controller->id != 'acesso'){ ?>
            <div class="navbar-header navbar-right">
                <!--<div class="form-group">-->
                    <input type="text" placeholder="Encontre o video" class="navbar-input form-control" style="width: 300px;" />
                    <ul class="nav navbar-nav navbar-right">
                  <?php if(Yii::app()->user->isGuest){ ?>
                        <li><a class="btn btn-nav" id="btn-login">Login</a></li>
                  <?php } else { ?>
                      <!--<ul class="nav navbar-nav navbar-right">-->
                        <li>
                            <button class="btn btn-nav dropdown-toggle" type="button" data-toggle="dropdown">
                              <?php echo Yii::app()->user->getState('usua_nome'); ?>
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" id="dropdown_login" role="menu" aria-labelledby="dropdownMenuDivider">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="/vod/perfil">Perfil</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" class="item-nav">Ajuda</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="/vod/acesso/logout">Logout</a></li>
                            </ul>    
                        </li>
                          <!--<li><a href="/vod/perfil">Perfil</a></li>-->
                          <!--<li><a href="">Ajuda</a></li>-->
                          <!--<li><a href="/vod/acesso/logout">Logout</a></li>-->
                      <!--</ul>-->
                        
                    </ul>
<!--                        <button class="btn btn-nav dropdown-toggle" type="button" data-toggle="dropdown">
                            <?php // echo Yii::app()->user->getState('usua_nome'); ?>
                            <span class="caret"></span>
                        </button>-->
                    
                  <?php } ?>
                  <!--</div>-->
            </div>
            <?php } ?>
            </div>
        </nav>
        
        <?php } else { ?>
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <span class="navbar-brand">VOD LOGO</span>
                <?php if(Yii::app()->user->getState('usua_tipo') == 1){ ?>
                    <span class="navbar-brand" style="color: black">ADMIN</span>
                    <a class="navbar-brand" href="/vod/">Home</a>
                    <a class="navbar-brand" href="/vod/perfil">Dashboard</a>
                    <a class="navbar-brand" href="/vod/usuarios">Usuários</a>
                    <a class="navbar-brand" href="/vod/videos">Videos</a>
                    <a class="navbar-brand" href="/vod/categorias">Categorias</a>
                    <a class="navbar-brand" href="/vod/tags">Tags</a>
                <?php } ?>
                <?php if(Yii::app()->user->getState('usua_tipo') == 2){ ?>
                    <span class="navbar-brand" style="color: black">PUBLISHER</span>
                    <a class="navbar-brand" href="/vod/">Home</a>
                    <a class="navbar-brand" href="/vod/perfil">Dashboard</a>
                    <a class="navbar-brand" href="/vod/videos">Videos</a>
                    <a class="navbar-brand" href="/vod/videos/create">Upload</a>
                <?php } ?>
              </div>
              <div class="navbar-right" role="form">
                    <div class="form-group">
                        <?php if(Yii::app()->controller->id != 'acesso'){ ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <button class="btn btn-nav dropdown-toggle" type="button" data-toggle="dropdown">
                                  <?php echo Yii::app()->user->getState('usua_nome'); ?>
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" id="dropdown_login" role="menu" aria-labelledby="dropdownMenuDivider">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/vod/perfil">Perfil</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" class="item-nav">Ajuda</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="/vod/acesso/logout">Logout</a></li>
                                </ul>    
                            </li>
                          <!--<li><a href="/vod/perfil">Perfil</a></li>-->
                          <!--<li><a href="">Ajuda</a></li>-->
                          <!--<li><a href="/vod/acesso/logout">Logout</a></li>-->
                      <!--</ul>-->
                        
                    </ul>

<!--                        <ul class="dropdown-menu" id="dropdown_login" role="menu" aria-labelledby="dropdownMenuDivider">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="/vod/perfil">Perfil</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" class="item-nav">Ajuda</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="/vod/acesso/logout">Logout</a></li>
                        </ul>-->
                        <?php } ?>
                    </div>
<!--                    <button class="btn btn-info" type="button" id="btn-logout">
                        Logout
                    </button>-->
                </div>
            </div>
        </nav>
        <?php } ?>
    </div><!-- header -->

	<!--<div id="mainmenu">-->
		<?php /*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Videos', 'url'=>array('/videos')),
				array('label'=>'Usuários', 'url'=>array('/usuarios')),
				array('label'=>'Tags', 'url'=>array('/tags')),
//				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
//				array('label'=>'Contact', 'url'=>array('/site/contact')),
//				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); */?>
	<!--</div> mainmenu -->

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
