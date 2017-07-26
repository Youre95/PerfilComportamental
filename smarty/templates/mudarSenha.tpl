<html lang="pt">

<head>
  {include file="header.tpl"}
  
  
  <script>
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
  </script>
  
</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form  action="mudarSenha.php?esqueceu={$idUser}" method="post"  >
            <h1>SCP</h1> 
            <h2>Redefina sua senha {$nomeUser}</h2>
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
		  
		  
		   {if isset($erro)}
			<div class="alert alert-danger alert-dismissible fade in" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			  </button>
			  {$erro}
			</div>
		  {/if}
		  {if isset($sucesso)}
			<div class="alert alert-success alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                 {$sucesso}
            </div>
		  {/if}
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>
{include file="footer.tpl"}
</body>

</html>
