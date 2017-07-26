<!DOCTYPE html>
<html lang="en">

<head>
{include file="header.tpl"}
<link rel="stylesheet" type="text/css" media="screen"
	href="css/datatables/css/demo_page.css">
<link rel="stylesheet" type="text/css" media="screen"
	href="css/datatables/css/demo_table.css">
<script type="text/javascript" src="js/datatables/js/jquery.js"></script>
<script type="text/javascript"
	src="js/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
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
		texto = 'apagar_usuario.php?Id=' + id;
		a = document.getElementById('tagExcluir');
		a.href = texto;
	}
</script>
 

</head>


<body class="nav-md">

	<div class="container body">
		<div class="main_container">
	{include file="menu_horizontal.tpl"}

      <!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Lista de Usu&#225rio
						
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
								 
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<br />
								<form action="listaUsuarios.php" class="form-horizontal form-label-left" method="get">
									<div class="form-group">
										<div class="col-sm-4" >	
											<input type="text" name="nomePesquisa" class="form-control pesquisa" placeholder="Pesquisar por nome" value="">
										</div>
										<button type="submit" class="btn btn-success" style="float: left">
											<span class="btn-label"><i class="glyphicon glyphicon-thumbs-up fa fa-search-plus"></i> Pesquisar</span>
										</button>
									</div>
								</form>
								<div id="lista">
									<a href="usuario.php">
										<button class="btn btn-success" name="bt_teste_cadasrtro" type="submit" style="float:right;">
										<span class="btn-label"> 
											<i class="glyphicon glyphicon-thumbs-up fa fa-plus"></i>
										</span>Novo Usuario </button>
									</a>

									<table border="" class="table table-striped responsive-utilities jambo_table"  id="table-tela-lista">
										<thead>
											<tr>
												<th style="text-align: center">Nome</th>
												<th style="text-align: center">Email</th>
												<th style="text-align: center">Curso</th>
												<th style="text-align: center">Perfil</th>
												<th style="text-align: center">Status</th>
												<th style="text-align: center">A&ccedil;&otilde;es</th>
											</tr>
										</thead>
										
										<tbody>
										{foreach from=$usuario item=saida name=transaction_loop}
											<tr {if $smarty.foreach.transaction_loop.index%2} class="odd pointer" {else} class="even pointer" {/if}>
												<td style="height: 30px">{$saida->getNome()}</td>
												<td style="widht: 70%">{$saida->getEmail()}</td>
												<td style="widht: 70%">{$saida->getCurso()}</td>   
												<td style="widht: 80%">{if $saida->getPerfilSistema() eq "1" }Administrador{else}Estudante{/if}</td>
												<td style="widht: 70%">{$saida->getStatus()}</td>   
												<td style="text-align: center">
												
												{if ( $saida->getStatus() != 'Ativo' )}
													<a href="atualizar_usuario.php?Id={$saida->getUsuario()}&ativar">
														<button type="submit" class="btn btn-success">
															<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>	
														</button>
													</a>
												{/if}
												
													<a href="atualizar_usuario.php?Id={$saida->getUsuario()}">
														<button type="submit" class="btn btn-primary">
															<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>	
														</button>
													</a>
													
													<button type="button" onclick='excluir({$saida->getUsuario()})' class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">
														<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>	
													</button>
													
													
												</td>
											</tr>
											{/foreach}
										</tbody>
										 
									</table>
								</div>
							</div>

						</div>
					<!-- /modals -->
				  <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
							    <div class="modal-dialog" role="document">
							        <div class="modal-content">
							            <div class="modal-header">
							                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
							                <h4 class="modal-title" id="modalLabel">Excluir Usu&#225;rio</h4>
							            </div>
							            <div class="modal-body">Deseja realmente excluir este Usu&#225;rio? </div>
							            <div class="modal-footer">
							            	<a id="tagExcluir">
							                	<button type="button" class="btn btn-primary">Sim</button>
							            	</a>    
							                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
							            </div>
							        </div>
							    </div>
							</div>
						<!-- /page content -->


					</div>
				</div>
			</div>
		</div>
		
{include file="footer.tpl"}
</body>

</html>
