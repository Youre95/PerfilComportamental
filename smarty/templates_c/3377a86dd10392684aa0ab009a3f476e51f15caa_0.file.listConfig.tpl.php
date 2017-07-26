<?php
/* Smarty version 3.1.29, created on 2016-10-28 21:33:41
  from "/opt/lampp/htdocs/perfilcomportamental/smarty/templates/listConfig.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5813a81553c875_18606717',
  'file_dependency' => 
  array (
    '3377a86dd10392684aa0ab009a3f476e51f15caa' => 
    array (
      0 => '/opt/lampp/htdocs/perfilcomportamental/smarty/templates/listConfig.tpl',
      1 => 1477682956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu_horizontal.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5813a81553c875_18606717 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt">

<head>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <link rel="stylesheet" type="text/css" media="screen"
	href="css/datatables/css/demo_page.css">
<link rel="stylesheet" type="text/css" media="screen"
	href="css/datatables/css/demo_table.css">
<?php echo '<script'; ?>
 type="text/javascript" src="js/datatables/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript"
	src="js/datatables/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
	
<?php echo '<script'; ?>
 type="text/javascript">
	function excluir(id){
		addhref(id);
		$('#delete-modal').modal('show');
	}
  	$(document).ready(function() {
		$('#table-tela-lista').dataTable({
			 "bFilter": false
		});
		
   	});
	
	
	function addhref(id){
		
		var a, texto;
		
		texto = 'apagar_configuracao.php?Id=' + id;
		
		
		a = document.getElementById('tagExcluir');
		a.href = texto;
	
	}
	
  <?php echo '</script'; ?>
>

</style>

</head>


<body class="nav-md">

	<div class="container body">
		<div class="main_container">
		
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


      <!-- page content -->
			<div class="right_col" role="main">
			
				<div class="">



					<div class="page-title">
						<div class="title_left">
							<h3>lista de Configurações
						
						</div>
						<div class="title_right">
							<div
								class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				 
					<div class="row">
						<div class="x_panel panel1">
							<div class="x_title">
								<h2>
									Filtro de Pesquisa <small></small>
								</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
									</li>
									<li class="dropdown"><a href="#" class="dropdown-toggle"
										data-toggle="dropdown" role="button" aria-expanded="false"><i
											class="fa fa-wrench"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Settings 1</a></li>
											<li><a href="#">Settings 2</a></li>
										</ul></li>
									<li><a class="close-link"><i class="fa fa-close"></i></a></li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<form action="listConfig.php" class="form-horizontal form-label-left" method="get">
									<div class="form-group">
										<div class="col-sm-4" >	
											<input type="text" name="nomePesquisa" class="form-control pesquisa" placeholder="Pesquisar por contexto" value="">
										</div>
										<button type="submit" class="btn btn-success" style="float: left">
											<span class="btn-label"><i class="glyphicon glyphicon-thumbs-up fa fa-search-plus"></i> Pesquisar</span>
										</button>
									</div>
								</form>
								
								<div id="lista">
								<a href="configuracao.php">
									<button class="btn btn-success" name="bt_teste_cadastro" type="submit" style="float:right;">
										<span class="btn-label"> 
                        					<i class="glyphicon glyphicon-thumbs-up fa fa-plus"></i>
                       					</span>
                       				Nova configuração
									</button>
								</a>
									<table border="" class="table table-striped responsive-utilities jambo_table"  id="table-tela-lista">
										<thead>
											<tr>
												<th style="text-align: center">Chave</th>
												<th style="text-align: center">Valor</th>
												<th style="text-align: center">Contexto</th>
												<th style="text-align: center">A&ccedil;&otilde;es</th>
											</tr>
										</thead>
										<tbody>
											<?php
$_from = $_smarty_tpl->tpl_vars['configArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_transaction_loop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_transaction_loop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_transaction_loop'] : false;
$__foreach_transaction_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['saida']) ? $_smarty_tpl->tpl_vars['saida'] : false;
$_smarty_tpl->tpl_vars['saida'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_transaction_loop'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['saida']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['saida']->value) {
$_smarty_tpl->tpl_vars['saida']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_transaction_loop']->value['index']++;
$__foreach_transaction_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['saida'];
?>
											<tr <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_transaction_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_transaction_loop']->value['index'] : null)%2) {?> class="odd pointer" <?php } else { ?> class="even pointer" <?php }?> >
												<td style="height: 30px" > <?php echo $_smarty_tpl->tpl_vars['saida']->value->getKeySystem();?>
</td>
												<td> <?php echo $_smarty_tpl->tpl_vars['saida']->value->getValueSystem();?>
 </td>
												<td> <?php echo $_smarty_tpl->tpl_vars['saida']->value->getContext();?>
 </td>
												<td style="text-align: center">
													<a href="atualizar_configuracao.php?Id=<?php echo $_smarty_tpl->tpl_vars['saida']->value->getConfiguracao();?>
">
														<button type="submit" class="btn btn-primary">
															<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>	
														</button>
													</a>
													<button type="button" class="btn btn-danger"  onclick= "excluir(<?php echo $_smarty_tpl->tpl_vars['saida']->value->getConfiguracao();?>
)">
														<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>	
													</button>
												</td>
											</tr>
											<?php
$_smarty_tpl->tpl_vars['saida'] = $__foreach_transaction_loop_0_saved_local_item;
}
if ($__foreach_transaction_loop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_transaction_loop'] = $__foreach_transaction_loop_0_saved;
}
if ($__foreach_transaction_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['saida'] = $__foreach_transaction_loop_0_saved_item;
}
?>	
										</tbody>
									</table>
								</div>
							</div>

						</div>

					 

					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background: #ec8d8d;color: white;">
						<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modalLabel">Excluir Configuração</h4>
					</div>
					<div class="modal-body">Deseja realmente excluir esta configuração? </div>
					<div class="modal-footer">
						<a id="tagExcluir"  >
							<button type="button" class="btn btn-primary">Sim</button>
						</a>    
						<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





</body>

</html>
<?php }
}
