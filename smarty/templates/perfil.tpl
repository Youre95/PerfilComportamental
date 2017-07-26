<!DOCTYPE html>
<html lang="en">

<head>
{include file="header.tpl"}


  <script type="text/javascript">
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
     </script>

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
</head>


<body class="nav-md">

<div class="container body">
    <div class="main_container">
    
    {include file="menu_horizontal.tpl"}


      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left" style="width:inherit; ">
              <h3>Domin&#226;ncia Cerebral</h3>
			</div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
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
                                
					<form action="perfil.php" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data"  runat="server">
					 
					  <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <a href="#" style="margin-left: 51.3%" class="btn btn-success">
                            	<span class="btn-label"> 
                            		<i class="glyphicon glyphicon-thumbs-up fa fa-plus"></i>
                            	</span>	
                            NOVO PERFIL</a>
                          </div>
                      </div> 
					 
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome: <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="txtNome" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>                        
                        <div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pontos Fortes:<span class="required">*</span>
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" name="txtForte" rows="3" ></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Imagem do perfil:<span class="required">*</span>
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
						       <img id="blah" src="#"  alt="Perfil.png" />
							  <span class="btn btn-default btn-file">
									Arquivo <input  id="imgInp" type="file" name="txtImagem">
								</span>
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pontos de Melhoria:<span class="required">*</span>
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" name="txtMelhor" rows="3"></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Valores:<span class="required">*</span>
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" name="txtValor" rows="3"></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Descrição:<span class="required">*</span>
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
							<textarea class="form-control" name="txtDescricao" rows="3"></textarea>
						  </div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12" style="float:right; width:300px">
							<button class="btn btn-success" name="bt_perfil_cadasrtro" type="submit" value="cadastrar">
								<span class="btn-label"> 
                        			<i class="glyphicon glyphicon-thumbs-up fa fa-save"></i>
                       			</span>
                       			Gravar
							</button>
							<a href="listaPerfil.php" class="btn btn-default submit"   >
							 <span class="btn-label"> 
								<i class="glyphicon glyphicon-thumbs-up fa fa-arrow-left"></i>
							</span>		Voltar
							</a>
						</div>
						
                      </form>
                  </div>
               </div>
               </div>

          </div>
        </div>

      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>
  {include file="footer.tpl"}
  </body>
  </html>