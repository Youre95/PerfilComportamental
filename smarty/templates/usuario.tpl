<!DOCTYPE html>
<html lang="pt">

<head>
      {include file="header.tpl"}
      
          
   <link href="datepicker/css/datepicker.css" rel="stylesheet">
      <script src="datepicker/js/bootstrap-datepicker.js"></script>
      
      
      <script type="text/javascript">
            $(document).ready(function() {
             	$('#birthday1').datepicker({
            	    format: 'dd/mm/yyyy',                
            	    language: 'pt-BR'
            	}); 
            });

            
        
			 </script>
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
    
  
  <script >
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


<body class="nav-md">

  <div class="container body">
    <div class="main_container">
	{include file="menu_horizontal.tpl"}

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
		
		

          <div class="page-title">
            <div class="title_left">
              <h3>Cadastro de Usuários
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
                  <h2>Novo usuário <small></small></h2>
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
				  
                  <form method="post" action="usuario.php" class="form-horizontal form-label-left">
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Perfil no Sistema:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select required name="perfil" class="form-control">
                          <option>Selecione...</option>
                          <option value="1" >Administrador</option>
                          <option value="2" >Estudante</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="nome" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail: </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="email" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">CPD:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="cpd" class="form-control" required>
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Senha:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="password" id="txtNewPassword" name="senha" class="form-control" required>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Repita a senha:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="password" id="txtConfirmPassword" name="senha2" class="form-control" required>
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Data de Nascimento:<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday1" name="dataNasc" required class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                      </div>
                    </div>
					  
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Endereço: <span class="required">*</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <textarea class="form-control" required name="endereco" rows="3" ></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                         <select name=estado class="form-control">
							{html_options options=$estados }
						</select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Faculdade:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="faculdade" required class="form-control col-md-10" style="float: left;" />
                      </div>
                    </div> 
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Curso:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" name="curso" required id="autocomplete-custom-append" class="form-control col-md-10" style="float: left;" />
                        <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Semestre:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
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
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select  required name="sexo" class="form-control">
                          <option>Selecione...</option>
                          <option>Feminino</option>
                          <option>Masculino</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Renda:</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select required name="salario" class="form-control">
                          <option>Selecione...</option>
                          <option>De 1 a 3 salários mínimos</option>
						  <option>De 4 a 6 salários mínimos</option>
						  <option>De 7 a 9 salários mínimos</option>
						  <option>Acima de 10 salários mínimos</option>
                        </select>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-md-3 col-sm-3 col-xs-12 control-label">Bolsista:</label>
                      <div class="col-md-9 col-xs-12">
                        <div class="radio">
                          <label>
                            <input required type="radio" class="flat" value="1" name="bolsista"> Sim
                          </label>
                          <label>
                            <input type="radio" required  class="flat" value="0" name="bolsista"> Não
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">
                        <span class="btn-label"> 
                        	<i class="glyphicon glyphicon-thumbs-up fa fa-save"></i>
                       	</span>
                        Gravar</button>
                       
						<a href="listaUsuarios.php" class="btn btn-default submit" style="float: right;" >
							 <span class="btn-label"> 
								<i class="glyphicon glyphicon-thumbs-up fa fa-arrow-left"></i>
							</span>		Voltar
						</a>
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

   

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- tags -->
  <script src="js/tags/jquery.tagsinput.min.js"></script>
  <!-- switchery -->
  <script src="js/switchery/switchery.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="js/moment/moment.min.js"></script>
  <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
  <!-- richtext editor -->
  <script src="js/editor/bootstrap-wysiwyg.js"></script>
  <script src="js/editor/external/jquery.hotkeys.js"></script>
  <script src="js/editor/external/google-code-prettify/prettify.js"></script>
  <!-- select2 -->
  <script src="js/select/select2.full.js"></script>
  <!-- form validation -->
  <script type="text/javascript" src="js/parsley/parsley.min.js"></script>
  <!-- textarea resize -->
  <script src="js/textarea/autosize.min.js"></script>
  <script>
    autosize($('.resizable_textarea'));
  </script>
  <!-- Autocomplete -->
  <script type="text/javascript" src="js/autocomplete/countries.js"></script>
  <script src="js/autocomplete/jquery.autocomplete.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script type="text/javascript">
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
  </script>
  <script src="js/custom.js"></script>


  <!-- select2 -->
  <script>
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
  </script>
  <!-- /select2 -->
  
  
</body>

</html>
