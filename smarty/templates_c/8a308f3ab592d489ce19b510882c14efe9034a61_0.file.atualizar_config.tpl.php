<?php
/* Smarty version 3.1.29, created on 2016-10-26 13:34:45
  from "/opt/lampp/htdocs/perfilcomportamental/smarty/templates/atualizar_config.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_581094d5600509_89144094',
  'file_dependency' => 
  array (
    '8a308f3ab592d489ce19b510882c14efe9034a61' => 
    array (
      0 => '/opt/lampp/htdocs/perfilcomportamental/smarty/templates/atualizar_config.tpl',
      1 => 1477315953,
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
function content_581094d5600509_89144094 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
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
    
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



      <!-- page content -->
      <div class="right_col" role="main">
      
        <div class="">
          <div class="page-title">
            <div class="title_left" style="width:inherit; ">
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
                 <div id="cadastroTeste">
                      <form action="atualizar_configuracao.php?atualizar&Id=<?php echo $_smarty_tpl->tpl_vars['configId']->value;?>
" class="form-horizontal form-label-left" method="post">
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Chave: <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                           <?php if (isset($_smarty_tpl->tpl_vars['config']->value)) {?>
                            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['config']->value->getKeySystem();?>
" name="keySystem" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            <?php } else { ?>
							<input type="text"  name="keySystem" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
						    <?php }?>
                          </div>
                        </div>                        
                        <div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Valor: <span class="required">*</span>
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
						  <?php if (isset($_smarty_tpl->tpl_vars['config']->value)) {?>
						  	<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['config']->value->getValueSystem();?>
"  class="form-control" name="valueSystem"  />
						  <?php } else { ?>
							<input type="text"  class="form-control" name="valueSystem"  />
						    <?php }?>
							
						  </div>
						  
						</div>
						 <div class="form-group">
						  <label class="control-label col-md-3 col-sm-3 col-xs-12">Contexto: <span class="required">*</span>
						  </label>
						  <div class="col-md-6 col-sm-6 col-xs-12">
						  <?php if (isset($_smarty_tpl->tpl_vars['config']->value)) {?>
						  	<input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['config']->value->getContext();?>
" class="form-control" name="contextSystem"  />
						   <?php } else { ?>
							<input type="text"  class="form-control" name="contextSystem"  />
						    <?php }?>
						  </div>
						  
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12" style="float:right; width:300px">
							<button class="btn btn-success" name="bt_teste_cadasrtro" type="submit" value="cadastrar">
								<span class="btn-label"> 
                        			<i class="glyphicon glyphicon-thumbs-up fa fa-save"></i>
                       			</span>
                       			Gravar
							</button>
							<a href="listConfig.php" class="btn btn-default submit"   >
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
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
</body>

</html><?php }
}
