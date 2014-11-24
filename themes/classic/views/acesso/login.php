<?php if (Yii::app()->user->hasFlash('error')) { ?>
<!--    <div class="alert alert-danger alert-error" role="alert">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong style="font-size: 16px"><?php // echo Yii::app()->user->getFlash('error', null, true); ?></strong>
        <button onclick="console.log($('.alert.alert-danger').slideUp())" type="button" class="close" data-dismiss="alert">&times;</button>
    </div>-->
<?php } ?>
<div class="container">

<form class="form-signin" role="form" method="post" action="/vod/acesso/login">
    <div class="form-group">
        <h2 class="form-signin-heading">VOD - Acesso</h2>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Email" name="LoginForm[usuario]" required autofocus>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" placeholder="Senha" name="LoginForm[senha]" required>
    </div>
    
    <?php if (Yii::app()->user->hasFlash('error')) { ?>
        <span class="control-label alerta-erro"><?php echo Yii::app()->user->getFlash('error', null, true); ?></span>
    <?php } ?>
        
    <div class="form-group">
        <button class="btn btn-lg btn-nav btn-block" type="submit">Login</button>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar Dados
          </label>
        </div>
    </div>
</form>

</div> <!-- /container -->