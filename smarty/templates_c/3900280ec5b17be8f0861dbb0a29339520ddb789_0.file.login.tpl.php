<?php
/* Smarty version 3.1.29, created on 2016-10-28 20:42:26
  from "/opt/lampp/htdocs/perfilcomportamental/smarty/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58139c12012613_94583695',
  'file_dependency' => 
  array (
    '3900280ec5b17be8f0861dbb0a29339520ddb789' => 
    array (
      0 => '/opt/lampp/htdocs/perfilcomportamental/smarty/templates/login.tpl',
      1 => 1477680142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58139c12012613_94583695 ($_smarty_tpl) {
echo '<?php
';
echo '?>';?>

<html lang="pt">

<head>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
  
  <?php echo '<script'; ?>
>

	function esqueceuSenha(){
		$('#esqueci-modal').modal('show');
	}

  
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

	 $(document).ready( function() {
		
			$("#btnSubmit").on('click', function(){
		
				var emailSenha = $("#emailSenha").val();
		
			 	var data = new FormData();
			 	data.append( "email", emailSenha );
				
				$.ajax({
					url: "sendMail.php?esqueceu",
					type: 'POST',
					processData: false,
					contentType: false,
					cache: false,
					data: data,
			       	success: function(data) {
			       		$("#divErro").css("display", "block");
			       		$("#divErro").html(data);
		          	}         
				});		

				$('#esqueci-modal').modal('hide');
				
			});

	 });
	
  <?php echo '</script'; ?>
>
  
</head>

<body style="background:#F7F7F7;">

    <div class="modal fade" id="esqueci-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
		    <div class="modal-dialog" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
		                <h4 class="modal-title" id="modalLabel">Redefinir Senha</h4>
		            </div>
		            <div class="modal-body">Informe seu email para redefinir sua senha </div>
		            <div class="modal-footer">
		            	<div>
			              <input type="text" name="emailSenha"  id="emailSenha" class="form-control" placeholder="Email" required="true" />
			            </div>
			            <br>
		            	<button id="btnSubmit" class="btn btn-success">
		                	Enviar
		            	</button>    
		            </div>
		        </div>
		    </div>
		</div>

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form  action="login.php" method="post"  >
            <h1>SCP <br/> Sistema de Caracteriza&#231;&#227;o dos Perfis Comportamentais</h1>
            <div>
              <input type="text" name="email" class="form-control" placeholder="Email" required="true" />
            </div>
            <div>
              <input type="password" name="password" class="form-control" placeholder="Senha" required="true" />
            </div>
            <div>
              
			 <button type="submit" class="btn btn-default">Log in</button>
            <a type="button" class="reset_pass"  onclick= "esqueceuSenha()">Esqueceu a senha ?</a>
              
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">Novo no site ? 
                <a href="#toregister" class="to_register">Criar uma conta </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-pie-chart" style="font-size: 26px;"></i> Perfil Comportamental</h1>

				<p>&#169; 2016 All Rights Reserved. Privacy and Terms</p>
              </div>
            </div>
          </form>
          
          	<div id="divErro" style="display: none" ></div>
          
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
      <div id="register" class="animate form">
        <section class="login_content">
          <form action="usuario.php?externo" method="post" >
            <h1>Criar uma conta</h1>
            <div>
              <input type="text" name="nome" class="form-control" placeholder="Nome Completo" required="" />
            </div>
            <div>
              <input type="email" name="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input type="password" name="senha" id="txtNewPassword"  class="form-control" placeholder="Password" required="" />
            </div>
			<div>
              <input type="password" id="txtConfirmPassword" class="form-control" placeholder="Re Password" required="" />
            </div>
            <div>
               
			   <button type="submit" class="btn btn-default">Submeter</button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <p class="change_link">J&#225; &#233; membro ?
                <a href="#tologin" class="to_register"> Log in </a>
              </p>
              <div class="clearfix"></div>
              <br />
              <div>
                 <h1><i class="fa fa-pie-chart" style="font-size: 26px;"></i> Perfil Comportamental</h1>

                <p>&#169; 2016 All Rights Reserved. Privacy and Terms</p>
              </div>
            </div>
          </form>
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
