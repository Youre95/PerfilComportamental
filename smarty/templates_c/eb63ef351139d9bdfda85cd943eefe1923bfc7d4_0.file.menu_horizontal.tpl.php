<?php
/* Smarty version 3.1.29, created on 2016-10-28 21:30:55
  from "/opt/lampp/htdocs/perfilcomportamental/smarty/templates/menu_horizontal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5813a76f9220d0_41934331',
  'file_dependency' => 
  array (
    'eb63ef351139d9bdfda85cd943eefe1923bfc7d4' => 
    array (
      0 => '/opt/lampp/htdocs/perfilcomportamental/smarty/templates/menu_horizontal.tpl',
      1 => 1477683053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5813a76f9220d0_41934331 ($_smarty_tpl) {
?>
<html lang="pt">
<body>
	<div class="col-md-3 left_col">
		<div class="left_col scroll-view">
			<div class="navbar nav_title" style="border: 0;">
				<a href="index.php" class="site_title"><i class="fa fa-pie-chart"></i><span> Meu Perfil</span></a>
			</div>

			<div class="clearfix"></div>

			<!-- menu prile quick info -->
			<div class="profile">
				<div class="profile_pic">
					<img src="<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
" alt="..." class="img-circle profile_img">
				</div>
				<div class="profile_info">
					<span>Bem-vindo(a),</span>
					<h2><?php echo $_smarty_tpl->tpl_vars['nomeBemvindo']->value;?>
</h2>
				</div>
			</div>
			<!-- /menu prile quick info -->
			<div class="clearfix"></div>
			<br />

			<!-- sidebar menu -->
			<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

				<div class="menu_section">
					<h3>General</h3>
					<ul class="nav side-menu">
						<li><a href="index.php" ><i class="fa fa-home"  ></i> Home <span class="fa fa-chevron-down"></span></a></li>
						<li><a><i class="fa fa-info"></i> Informações <span	class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu" style="display: none">
								<li><a href="#">Ned Herrmann</a></li>
								<li><a href="#">IBC</a></li>
							</ul></li>
						<li><a><i   class="fa fa-question-circle" ></i> Quem Somos ? <span class="fa fa-chevron-down"></span></a>
						<ul class="nav child_menu" style="display: none">
								<li><a href="#">Desenvolvedores</a></li>
								<li><a href="#">Projeto de Iniciação Científica</a></li>
								<li><a href="#">TCC</a></li>
						</ul></li>
						<li><a><i class="fa fa-edit"></i> Formulário <span	class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu" style="display: none">
								<li><a href="responder_teste.php">Perfil Comportamental</a></li>
							</ul></li>
						<li><a><i class="fa fa-bar-chart-o"></i> Estatísticas <span	class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu" style="display: none">
								<li><a href="meu_perfil.php">Meu perfil</a></li>
								<li><a href="historico.php">Respostas anteirores</a></li>
								<li><a href="perfil_universos.php">Universos Incluídos</a></li>
							</ul></li>
							<li><a><i class="fa fa-commenting"></i> Contato <span	class="fa fa-chevron-down"></span></a>
							</li>
					</ul>
				</div>
				
				<?php if (($_smarty_tpl->tpl_vars['perfil']->value == 1)) {?>
				<div class="menu_section">
	              <h3>Administracao</h3>
	              <ul class="nav side-menu">
	                <li><a><i class="fa fa-laptop"></i> Testes <span class="fa fa-chevron-down"></span></a>
	                	<ul class="nav child_menu" style="display: none">
	                		<li><a href="listaTeste.php">Teste</a>
	                		</li>
	                		<li><a href="listaPergunta.php">Pergunta</a>
	                		</li>
	                		<li><a href="listaPerfil.php">Perfil</a>
	                		</li>
							<li><a href="listaUsuarios.php">Usuário</a>
	                		</li>
	                   </ul>
	                 </li>    			
	                <li><a><i style="font-size: 1.3em;" class="glyphicon glyphicon-cog"></i> Sistema <span class="fa fa-chevron-down"></span></a>
	                  <ul class="nav child_menu" style="display: none">
	                    <li><a href="listaLog.php">Log</a>
	                    </li>
	                    <li><a href="listConfig.php">Configuracoes</a>
	                    </li>
	                  </ul>
	                </li>
	              </ul>
	            </div>
	            <?php }?>
			</div>
			<!-- /sidebar menu -->
		</div>
	</div>
	
	 <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				  <img src="<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
" alt=""><?php echo $_smarty_tpl->tpl_vars['nomeBemvindo']->value;?>

                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li>
                  	<a href="atualizar_usuario.php?auto"> 
                  	<span class="badge bg-red pull-right"><?php echo $_smarty_tpl->tpl_vars['percentPerfil']->value;?>
%</span>
                  	<span>Perfil</span>
                  	</a>
                  </li>
                  <li>
                    <a href="mudarSenha.php">Mudar Senha</a>
                  </li>
                  <li>
                    <a href="javascript:;">Ajuda</a>
                  </li>
                  <li><a href="logoff.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->
</body>
</html><?php }
}
