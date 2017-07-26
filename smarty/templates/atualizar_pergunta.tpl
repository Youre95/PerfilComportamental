<!DOCTYPE html>
<html lang="en">

<head>
    {include file="header.tpl"}
	
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
			  <h4>Escolha a alternativa que corresponde com voc&#234;</h4>
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
                 <div id="cadastroPedrgunta">
                      <form action="atualizar_pergunta.php?atualizar&Id={$perguntaId}" class="form-horizontal form-label-left" method="post">

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Teste: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<select name="selectTeste" class="form-control col-md-7 col-xs-12" required>
							   {html_options options=$testes selected=$teste_id }
							</select>      
             			</div>
             			</div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Texto: <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {if isset($pergunta)}
                            <input type="text" id="first-name" name="txtTexto" required="required" class="form-control col-md-7 col-xs-12" value="{$pergunta->getTextoPergunta()}">
                          {else}
                          	<input type="text" id="first-name" name="txtTexto" required="required" class="form-control col-md-7 col-xs-12">
                          {/if}	
                          </div>
                        </div>                        
                        <div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Aternativas:<span class="required">*</span> <br> <small>separe por vírgulas</small> 
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
						  {if isset($pergunta)}
							<textarea class="form-control" rows="3" placeholder='Ex.: gosto de caminhar no parque, gosto de atividades radicais, gosto de assistir um file, gosto de balada' name="txtEscolha"> {$pergunta->getEscolha()}</textarea>
						  {else}
						  	<textarea class="form-control" rows="3" placeholder='Ex.: gosto de caminhar no parque, gosto de atividades radicais, gosto de assistir um file, gosto de balada' name="txtEscolha"></textarea>
						  {/if}	
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Valores:<span class="required">*</span> <br> <small>separe por vírgulas</small>
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
						  {if isset($pergunta)}
							<textarea class="form-control" name="txtValor" rows="3" placeholder='Ex.: A, I, L, C'>  {$pergunta->getValorEscolha()}</textarea>
						  {else}
						 	<textarea class="form-control" name="txtValor" rows="3" placeholder='Ex.: A, I, L, C'> </textarea>
						  {/if}
						  </div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12" style="float:right; width:300px">
							<button class="btn btn-success" name="bt_pergunta_cadasrtro" type="submit" value="atualizar">
								<span class="btn-label"> 
                        			<i class="glyphicon glyphicon-thumbs-up fa fa-save"></i>
                       			</span>
                       			Gravar
							</button>
							<a href="listaPergunta.php" class="btn btn-default submit"   >
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