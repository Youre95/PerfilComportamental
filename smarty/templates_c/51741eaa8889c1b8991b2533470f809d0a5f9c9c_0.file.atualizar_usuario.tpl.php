<?php
/* Smarty version 3.1.29, created on 2016-10-25 22:27:27
  from "/opt/lampp/htdocs/perfilcomportamental/smarty/templates/atualizar_usuario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580fc02fbb6288_17507534',
  'file_dependency' => 
  array (
    '51741eaa8889c1b8991b2533470f809d0a5f9c9c' => 
    array (
      0 => '/opt/lampp/htdocs/perfilcomportamental/smarty/templates/atualizar_usuario.tpl',
      1 => 1477418543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu_horizontal.tpl' => 1,
  ),
),false)) {
function content_580fc02fbb6288_17507534 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/opt/lampp/htdocs/perfilcomportamental/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_radios')) require_once '/opt/lampp/htdocs/perfilcomportamental/smarty/libs/plugins/function.html_radios.php';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      
      
      <link href="datepicker/css/datepicker.css" rel="stylesheet">
      <?php echo '<script'; ?>
 src="datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
      
      
      <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function() {
             	$('#birthday1').datepicker({
            	    format: 'dd/mm/yyyy',                
            	    language: 'pt-BR'
            	}); 
            });
	 <?php echo '</script'; ?>
>
			 
			 
  <style>
  
  .panel1 {
	  style= margin-left: 50%;
  }
    	
	@media screen and (max-width: 650px)  {
		.panel1 {
			style= margin-left: 0%;	
		}
	
	}
	
  
  </style>
  
  	<style>
	.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
	</style>
    
  
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


	  //Código para fazer o previw da imagem 
		  var _URL = window.URL || window.webkitURL;
		   $( document ).ready(function() {
			  document.getElementById("imgInp").onchange = function () {

				  var file, img, widthImg, heightImg;
				  
				    if ((file = this.files[0])) {

					    
				    	if(file.type.indexOf("image") == -1) {
				    		alert('Extensão Inválida');
				            return false;
				        }

				    	img = new Image();
				        img.onload = function () {
				        	widthImg = this.width;
				        	heightImg = this.height;

				        	if( widthImg > 300) {
						  		document.getElementById('blah').width = 300; 	
						  	}

						  	if(heightImg > 300){
							  	document.getElementById('blah').height = 300; 
						  	} 

						  	 var reader = new FileReader();
						    	
							    reader.onload = function (e) {
						        	document.getElementById("blah").src = e.target.result;
							    };
							   
							    reader.readAsDataURL(file);
				        	
				        };
				        
				        img.src = _URL.createObjectURL(file);
				        
				    }
				}
			});

  
  <?php echo '</script'; ?>
>
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
              <h3>Continua&ccedil;&atilde;o do cadastro
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-6 col-xs-12" >
              <div class="x_panel panel1" >
                <div class="x_title">
                  <h2>Complete ou atualize suas informações <small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
				  
                  <form method="post" action="atualizar_usuario.php?atualizar&Id=<?php echo $_smarty_tpl->tpl_vars['usuarioId']->value;
if (isset($_smarty_tpl->tpl_vars['auto']->value)) {?>&auto<?php }?>" class="form-horizontal form-label-left" enctype="multipart/form-data">
					 <?php if (!isset($_smarty_tpl->tpl_vars['auto']->value)) {?>
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Perfil no Sistema:</label>
						<div class="col-md-9 col-sm-9 col-xs-12">
	                        <select required name="perfil" class="form-control">
	                        <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
	                          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['perfisSistemas']->value,'selected'=>$_smarty_tpl->tpl_vars['usuario']->value->getPerfilSistema()),$_smarty_tpl);?>

	                        <?php } else { ?>
	                      	  <option>Selecione...</option>
	                          <option value="1" >Administrador</option>
	                          <option value="2" >Estudante</option>
	                        <?php }?>
	                        </select>
	                      </div>
                      </div>
                      <?php }?>
                      
                      <div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Imagem do perfil:<span class="required">*</span>  </label>
						   <div class="col-md-9 col-sm-9 col-xs-12">
						   		<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
									<img id="blah" src="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getPerfilImg();?>
" width="300" height="300"  />								 							
								<?php }?>	
							  
							  <span class="btn btn-default btn-file">
									Arquivo <input  id="imgInp"  type="file" name="txtImagem" />
								</span>
							</div>
						</div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
					   <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
							<input type="text" name="nome" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNome();?>
" required>
						<?php } else { ?>
							<input type="text" name="nome" class="form-control" required>
						<?php }?>	
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail: </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
					  <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
							<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getEmail();?>
" class="form-control" required>
						<?php } else { ?>
							<input type="text" name="email" class="form-control" required>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['erroEmail']->value)) {?>
							<label style="color: red;" ><?php echo $_smarty_tpl->tpl_vars['erroEmail']->value;?>
</label>
						<?php }?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">CPD:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
					   <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
							<input type="text" name="cpd" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getCpd();?>
" required>
						<?php } else { ?>
							<input type="text" name="cpd" class="form-control" required>
						<?php }?>
                      </div>
                    </div>
					 
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Data de Nascimento:<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
							<input id="birthday1" name="dataNasc" required class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getDataNasc();?>
" required="required" type="text">
						<?php } else { ?>
							<input id="birthday1" name="dataNasc" required class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
						<?php }?>
                      </div>
                    </div>
					  
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Endereço: <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
					  <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                        <textarea class="form-control" required name="endereco" rows="3" ><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getEndereco();?>
</textarea>
					  <?php } else { ?>
						 <textarea class="form-control" required name="endereco" rows="3" ></textarea>
					  <?php }?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Faculdade:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
						<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
							<input type="text" name="faculdade" required class="form-control col-md-10" style="float: left;" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getFaculdade();?>
" />
						<?php } else { ?>
							<input type="text" name="faculdade" required class="form-control col-md-10" style="float: left;" />
						<?php }?>
                       </div>
                    </div> 
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
						<select name=estado class="form-control">
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['estados']->value,'selected'=>$_smarty_tpl->tpl_vars['usuario']->value->getEstado()),$_smarty_tpl);?>

						</select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Curso:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
						<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
							<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getCurso();?>
" name="curso" required id="autocomplete-custom-append" class="form-control col-md-10" style="float: left;" />
						<?php } else { ?>
							<input type="text" name="curso" required id="autocomplete-custom-append" class="form-control col-md-10" style="float: left;" />
						<?php }?>
                        <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Semestre:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
					  <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
						<select name="semestre" class="form-control col-md-7 col-xs-12" required>
							   <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['semestres']->value,'selected'=>$_smarty_tpl->tpl_vars['usuario']->value->getSemestre()),$_smarty_tpl);?>

						</select> 
					  <?php } else { ?>
                        <select name="semestre" required class="form-control">
                          <option>Selecione...</option>
                          <option>1°</option>
						  <option>2°</option>
						  <option>3°</option>
						  <option>4°</option>
						  <option>5°</option>
						  <option>6°</option>
						  <option>7°</option>
						  <option>8°</option>
						  <option>9°</option>
						  <option>10°</option>
                        </select>
						<?php }?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
					   <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
						<select name="sexo" class="form-control col-md-7 col-xs-12" required>
							   <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['sexos']->value,'selected'=>$_smarty_tpl->tpl_vars['usuario']->value->getSexo()),$_smarty_tpl);?>

						</select> 
					  <?php } else { ?>
                        <select  required name="sexo" class="form-control">
                          <option>Selecione...</option>
                          <option>Feminino</option>
                          <option>Masculino</option>
                        </select>
						
						<?php }?>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Renda:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
					 <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
						<select name="salario" class="form-control col-md-7 col-xs-12" required>
							   <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['salario']->value,'selected'=>$_smarty_tpl->tpl_vars['usuario']->value->getRenda()),$_smarty_tpl);?>

						</select> 
					  <?php } else { ?>
                        <select required name="salario" class="form-control">
                          <option>Selecione...</option>
                          <option>De 1 a 3 salários mínimos</option>
						  <option>De 4 a 6 salários mínimos</option>
						  <option>De 7 a 9 salários mínimos</option>
						  <option>Acima de 10 salários mínimos</option>
                        </select>
						<?php }?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 col-sm-3 col-xs-12 control-label">Bolsista:</label>
                      <div class="col-md-9 col-xs-12">
                        <div class="radio">
						<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
							<?php echo smarty_function_html_radios(array('name'=>"bolsista",'options'=>$_smarty_tpl->tpl_vars['bolsista']->value,'checked'=>$_smarty_tpl->tpl_vars['usuario']->value->getBolsa(),'class'=>"flat"),$_smarty_tpl);?>

						<?php } else { ?>
							<label>
								<input required type="radio" class="flat" value="1" name="bolsista"> Sim
							</label>
							<label>
								<input type="radio" required  class="flat" value="0" name="bolsista"> Não
							</label>
						 <?php }?>
                        </div>
                      </div>
                    </div>
                    
                    <?php if (!isset($_smarty_tpl->tpl_vars['auto']->value)) {?>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
					 <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
						<select name="status" class="form-control col-md-7 col-xs-12" required>
							   <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['status']->value,'selected'=>$_smarty_tpl->tpl_vars['usuario']->value->getStatus()),$_smarty_tpl);?>

						</select> 
					  <?php } else { ?>
                        <select required name="salario" class="form-control">
                          <option>Selecione...</option>
                          <option>Pendente</option>
						  <option>Ativo</option>
						  <option>Desligado</option>
                        </select>
						<?php }?>
                      </div>
                    </div>
                    <?php }?>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class=" ">
                        <button type="submit" class="btn btn-success">
                        <span class="btn-label"> 
                        	<i class="glyphicon glyphicon-thumbs-up fa fa-save"></i>
                       	</span>
                        Gravar</button>
						 <?php if (!isset($_smarty_tpl->tpl_vars['auto']->value)) {?>
						<a href="listaUsuarios.php" class="btn btn-default submit" style="float: right;" >
							 <span class="btn-label"> 
								<i class="glyphicon glyphicon-thumbs-up fa fa-arrow-left"></i>
							</span>		Voltar
						</a>
						<?php }?>
                      </div>
                    </div>

                  </form>
                </div>
              
          </div>
        </div>
        <!-- /page content -->
 

		  </div>
	  </div> 
    </div>
  </div>

   

  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

  <!-- bootstrap progress js -->
  <?php echo '<script'; ?>
 src="js/progressbar/bootstrap-progressbar.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/nicescroll/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
  <!-- icheck -->
  <?php echo '<script'; ?>
 src="js/icheck/icheck.min.js"><?php echo '</script'; ?>
>
  <!-- tags -->
  <?php echo '<script'; ?>
 src="js/tags/jquery.tagsinput.min.js"><?php echo '</script'; ?>
>
  <!-- switchery -->
  <?php echo '<script'; ?>
 src="js/switchery/switchery.min.js"><?php echo '</script'; ?>
>
  <!-- daterangepicker -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/moment/moment.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/datepicker/daterangepicker.js"><?php echo '</script'; ?>
>
  <!-- richtext editor -->
  <?php echo '<script'; ?>
 src="js/editor/bootstrap-wysiwyg.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/editor/external/jquery.hotkeys.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/editor/external/google-code-prettify/prettify.js"><?php echo '</script'; ?>
>
  <!-- select2 -->
  <?php echo '<script'; ?>
 src="js/select/select2.full.js"><?php echo '</script'; ?>
>
  <!-- form validation -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/parsley/parsley.min.js"><?php echo '</script'; ?>
>
  <!-- textarea resize -->
  <?php echo '<script'; ?>
 src="js/textarea/autosize.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    autosize($('.resizable_textarea'));
  <?php echo '</script'; ?>
>
  <!-- Autocomplete -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/autocomplete/countries.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/autocomplete/jquery.autocomplete.js"><?php echo '</script'; ?>
>
  <!-- pace -->
  <?php echo '<script'; ?>
 src="js/pace/pace.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
    $(function() {
      'use strict';
      var countriesArray = $.map(countries, function(value, key) {
        return {
          value: value,
          data: key
        };
      });
      // Initialize autocomplete with custom appendTo:
      $('#autocomplete-custom-append').autocomplete({
        lookup: countriesArray,
        appendTo: '#autocomplete-container'
      });
    });
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>


  <!-- select2 -->
  <?php echo '<script'; ?>
>
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Select a state",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 4,
        placeholder: "With Max Selection limit 4",
        allowClear: true
      });
    });
  <?php echo '</script'; ?>
>
  <!-- /select2 -->
  
  
</body>

</html>
<?php }
}
