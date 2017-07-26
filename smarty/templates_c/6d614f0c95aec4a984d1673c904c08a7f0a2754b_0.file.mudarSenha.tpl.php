<?php
/* Smarty version 3.1.29, created on 2016-10-27 21:44:50
  from "/opt/lampp/htdocs/perfilcomportamental/smarty/templates/mudarSenha.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5812593219d6b0_47986121',
  'file_dependency' => 
  array (
    '6d614f0c95aec4a984d1673c904c08a7f0a2754b' => 
    array (
      0 => '/opt/lampp/htdocs/perfilcomportamental/smarty/templates/mudarSenha.tpl',
      1 => 1477597488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5812593219d6b0_47986121 ($_smarty_tpl) {
?>
<html lang="pt">

<head>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
  
  <?php echo '<script'; ?>
>
  $(document).ready(function () {
		$("#txtConfirmPassword").blur(checkPasswordMatch);
	});
	
	function checkPasswordMatch() {
		var password = $("#txtNewPassword").val();
		var confirmPassword = $("#txtConfirmPassword").val();

		if (password != confirmPassword){
			$("#txtNewPassword").val("");
			$("#txtConfirmPassword").val("");
			alert("As senhas não coincidem");
		}
		
		 
	}
  <?php echo '</script'; ?>
>
  
</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form  action="mudarSenha.php?esqueceu=<?php echo $_smarty_tpl->tpl_vars['idUser']->value;?>
" method="post"  >
            <h1>SCP</h1> 
            <h2>Redefina sua senha <?php echo $_smarty_tpl->tpl_vars['nomeUser']->value;?>
</h2>
            <div>
              <input type="password" name="txtPassword" id="txtPassword"  class="form-control" placeholder="Senha Atual" required="" />
            </div>
            <div>
              <input type="password" name="txtNewPassword" id="txtNewPassword"  class="form-control" placeholder="Password" required="" />
            </div>
			<div>
              <input type="password" id="txtConfirmPassword"  class="form-control" placeholder="Re Password" required="" />
            </div>
            <div>
			  <button type="submit" class="btn btn-default">Redefinir</button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-pie-chart" style="font-size: 26px;"></i> Perfil Comportamental</h1>

				<p>&#169; 2016 All Rights Reserved. Privacy and Terms</p>
              </div>
            </div>
          </form>
		  
		  
		   <?php if (isset($_smarty_tpl->tpl_vars['erro']->value)) {?>
			<div class="alert alert-danger alert-dismissible fade in" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			  </button>
			  <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>

			</div>
		  <?php }?>
		  <?php if (isset($_smarty_tpl->tpl_vars['sucesso']->value)) {?>
			<div class="alert alert-success alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                 <?php echo $_smarty_tpl->tpl_vars['sucesso']->value;?>

            </div>
		  <?php }?>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}
