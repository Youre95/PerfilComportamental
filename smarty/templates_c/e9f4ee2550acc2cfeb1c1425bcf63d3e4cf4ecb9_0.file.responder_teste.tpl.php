<?php
/* Smarty version 3.1.29, created on 2016-10-26 13:18:49
  from "/opt/lampp/htdocs/perfilcomportamental/smarty/templates/responder_teste.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58109119b8b0a3_87607334',
  'file_dependency' => 
  array (
    'e9f4ee2550acc2cfeb1c1425bcf63d3e4cf4ecb9' => 
    array (
      0 => '/opt/lampp/htdocs/perfilcomportamental/smarty/templates/responder_teste.tpl',
      1 => 1477480728,
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
function content_58109119b8b0a3_87607334 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt">

<head>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<?php echo '<script'; ?>
 type="text/javascript">

 


<?php echo '</script'; ?>
>


<style type="text/css">

 
</style>

</head>


<body class="nav-md">
	<div class="container body">
		<div class="main_container">

			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left" style="width: inherit;">

							<?php if ((isset($_smarty_tpl->tpl_vars['teste']->value))) {?>
							<div>
								<h3><?php echo $_smarty_tpl->tpl_vars['teste']->value->getNome();?>
</h3>
								<p><?php echo $_smarty_tpl->tpl_vars['teste']->value->getDescricao();?>
</p>
							</div>
							<?php }?>

						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<h2>Responda com sinceridade</h2>
								<!-- Smart Wizard -->


			<form class="form-horizontal" action="resposta.php" method="POST"   id="formPerg">

								<div id="wizard" class="form_wizard wizard_horizontal">
									<ul class="list-unstyled wizard_steps">
										<li><a href="#step-1"> <span class="step_no">1</span>
										</a></li>
										<li><a href="#step-2"> <span class="step_no">2</span>
										</a></li>
										<li><a href="#step-3"> <span class="step_no">3</span>
										</a></li>
										<li><a href="#step-4"> <span class="step_no">4</span>
										</a></li>
										<li><a href="#step-5"> <span class="step_no">5</span>
										</a></li>
									</ul>


									<div id="step-1">
										<?php
$_from = $_smarty_tpl->tpl_vars['array0']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pergunta_0_saved_item = isset($_smarty_tpl->tpl_vars['pergunta']) ? $_smarty_tpl->tpl_vars['pergunta'] : false;
$_smarty_tpl->tpl_vars['pergunta'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pergunta']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pergunta']->value) {
$_smarty_tpl->tpl_vars['pergunta']->_loop = true;
$__foreach_pergunta_0_saved_local_item = $_smarty_tpl->tpl_vars['pergunta'];
?>
										<div class="form-group">
											<label id="labelSou" class=" col-md-12 "
												style="font-size: 18px"><?php echo $_smarty_tpl->tpl_vars['pergunta']->value->getTextoPergunta();?>
</label>
											<?php
$_from = $_smarty_tpl->tpl_vars['pergunta']->value->getArrayEscolha();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_escolha_1_saved_item = isset($_smarty_tpl->tpl_vars['escolha']) ? $_smarty_tpl->tpl_vars['escolha'] : false;
$__foreach_escolha_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['escolha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['escolha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['escolha']->value) {
$_smarty_tpl->tpl_vars['escolha']->_loop = true;
$__foreach_escolha_1_saved_local_item = $_smarty_tpl->tpl_vars['escolha'];
?>
											<div class="col-md-3 col-sm-3">
												<label data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
														<input type="radio" class="flat required"    name="<?php echo $_smarty_tpl->tpl_vars['pergunta']->value->getPergunta();?>
"
														value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" required="required"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['escolha']->value;?>

												</label>
												
											</div>
											<?php
$_smarty_tpl->tpl_vars['escolha'] = $__foreach_escolha_1_saved_local_item;
}
if ($__foreach_escolha_1_saved_item) {
$_smarty_tpl->tpl_vars['escolha'] = $__foreach_escolha_1_saved_item;
}
if ($__foreach_escolha_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_escolha_1_saved_key;
}
?>
										</div>
										<?php
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_0_saved_local_item;
}
if ($__foreach_pergunta_0_saved_item) {
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_0_saved_item;
}
?>
									</div>

									<div id="step-2">
										<?php
$_from = $_smarty_tpl->tpl_vars['array1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pergunta_2_saved_item = isset($_smarty_tpl->tpl_vars['pergunta']) ? $_smarty_tpl->tpl_vars['pergunta'] : false;
$_smarty_tpl->tpl_vars['pergunta'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pergunta']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pergunta']->value) {
$_smarty_tpl->tpl_vars['pergunta']->_loop = true;
$__foreach_pergunta_2_saved_local_item = $_smarty_tpl->tpl_vars['pergunta'];
?>
										<div class="form-group">
											<label id="labelSou" class=" col-md-12 "
												style="font-size: 18px"><?php echo $_smarty_tpl->tpl_vars['pergunta']->value->getTextoPergunta();?>
</label>
											<?php
$_from = $_smarty_tpl->tpl_vars['pergunta']->value->getArrayEscolha();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_escolha_3_saved_item = isset($_smarty_tpl->tpl_vars['escolha']) ? $_smarty_tpl->tpl_vars['escolha'] : false;
$__foreach_escolha_3_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['escolha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['escolha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['escolha']->value) {
$_smarty_tpl->tpl_vars['escolha']->_loop = true;
$__foreach_escolha_3_saved_local_item = $_smarty_tpl->tpl_vars['escolha'];
?>
											<div class="col-md-3 col-sm-3">
												<label data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default"> <input
													type="radio" class="flat required" name="<?php echo $_smarty_tpl->tpl_vars['pergunta']->value->getPergunta();?>
"
													value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" required="required" ><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['escolha']->value;?>

												</label>
											</div>
											<?php
$_smarty_tpl->tpl_vars['escolha'] = $__foreach_escolha_3_saved_local_item;
}
if ($__foreach_escolha_3_saved_item) {
$_smarty_tpl->tpl_vars['escolha'] = $__foreach_escolha_3_saved_item;
}
if ($__foreach_escolha_3_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_escolha_3_saved_key;
}
?>
										</div>
										<?php
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_2_saved_local_item;
}
if ($__foreach_pergunta_2_saved_item) {
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_2_saved_item;
}
?>
									</div>

									<div id="step-3">
										<?php
$_from = $_smarty_tpl->tpl_vars['array2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pergunta_4_saved_item = isset($_smarty_tpl->tpl_vars['pergunta']) ? $_smarty_tpl->tpl_vars['pergunta'] : false;
$_smarty_tpl->tpl_vars['pergunta'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pergunta']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pergunta']->value) {
$_smarty_tpl->tpl_vars['pergunta']->_loop = true;
$__foreach_pergunta_4_saved_local_item = $_smarty_tpl->tpl_vars['pergunta'];
?>
										<div class="form-group">
											<label id="labelSou" class=" col-md-12 "
												style="font-size: 18px"><?php echo $_smarty_tpl->tpl_vars['pergunta']->value->getTextoPergunta();?>
</label>
											<?php
$_from = $_smarty_tpl->tpl_vars['pergunta']->value->getArrayEscolha();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_escolha_5_saved_item = isset($_smarty_tpl->tpl_vars['escolha']) ? $_smarty_tpl->tpl_vars['escolha'] : false;
$__foreach_escolha_5_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['escolha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['escolha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['escolha']->value) {
$_smarty_tpl->tpl_vars['escolha']->_loop = true;
$__foreach_escolha_5_saved_local_item = $_smarty_tpl->tpl_vars['escolha'];
?>
											<div class="col-md-3 col-sm-3">
												<label data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default"> <input
													type="radio" class="flat required" name="<?php echo $_smarty_tpl->tpl_vars['pergunta']->value->getPergunta();?>
"
													value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" required="required"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['escolha']->value;?>

												</label>
											</div>
											<?php
$_smarty_tpl->tpl_vars['escolha'] = $__foreach_escolha_5_saved_local_item;
}
if ($__foreach_escolha_5_saved_item) {
$_smarty_tpl->tpl_vars['escolha'] = $__foreach_escolha_5_saved_item;
}
if ($__foreach_escolha_5_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_escolha_5_saved_key;
}
?>
										</div>
										<?php
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_4_saved_local_item;
}
if ($__foreach_pergunta_4_saved_item) {
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_4_saved_item;
}
?>
									</div>

									<div id="step-4">
										<?php
$_from = $_smarty_tpl->tpl_vars['array3']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pergunta_6_saved_item = isset($_smarty_tpl->tpl_vars['pergunta']) ? $_smarty_tpl->tpl_vars['pergunta'] : false;
$_smarty_tpl->tpl_vars['pergunta'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pergunta']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pergunta']->value) {
$_smarty_tpl->tpl_vars['pergunta']->_loop = true;
$__foreach_pergunta_6_saved_local_item = $_smarty_tpl->tpl_vars['pergunta'];
?>
										<div class="form-group">
											<label id="labelSou" class=" col-md-12 "
												style="font-size: 18px"><?php echo $_smarty_tpl->tpl_vars['pergunta']->value->getTextoPergunta();?>
</label>
											<?php
$_from = $_smarty_tpl->tpl_vars['pergunta']->value->getArrayEscolha();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_escolha_7_saved_item = isset($_smarty_tpl->tpl_vars['escolha']) ? $_smarty_tpl->tpl_vars['escolha'] : false;
$__foreach_escolha_7_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['escolha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['escolha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['escolha']->value) {
$_smarty_tpl->tpl_vars['escolha']->_loop = true;
$__foreach_escolha_7_saved_local_item = $_smarty_tpl->tpl_vars['escolha'];
?>
											<div class="col-md-3 col-sm-3">
												<label data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default"> <input
													type="radio" class="flat " name="<?php echo $_smarty_tpl->tpl_vars['pergunta']->value->getPergunta();?>
"
													value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" required="required" ><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['escolha']->value;?>

												</label>
											</div>
											<?php
$_smarty_tpl->tpl_vars['escolha'] = $__foreach_escolha_7_saved_local_item;
}
if ($__foreach_escolha_7_saved_item) {
$_smarty_tpl->tpl_vars['escolha'] = $__foreach_escolha_7_saved_item;
}
if ($__foreach_escolha_7_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_escolha_7_saved_key;
}
?>
										</div>
										<?php
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_6_saved_local_item;
}
if ($__foreach_pergunta_6_saved_item) {
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_6_saved_item;
}
?>
									</div>

									<div id="step-5">
										<?php
$_from = $_smarty_tpl->tpl_vars['array4']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pergunta_8_saved_item = isset($_smarty_tpl->tpl_vars['pergunta']) ? $_smarty_tpl->tpl_vars['pergunta'] : false;
$_smarty_tpl->tpl_vars['pergunta'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pergunta']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pergunta']->value) {
$_smarty_tpl->tpl_vars['pergunta']->_loop = true;
$__foreach_pergunta_8_saved_local_item = $_smarty_tpl->tpl_vars['pergunta'];
?>
										<div class="form-group">
											<label id="labelSou" class=" col-md-12 "
												style="font-size: 18px"><?php echo $_smarty_tpl->tpl_vars['pergunta']->value->getTextoPergunta();?>
</label>
											<?php
$_from = $_smarty_tpl->tpl_vars['pergunta']->value->getArrayEscolha();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_escolha_9_saved_item = isset($_smarty_tpl->tpl_vars['escolha']) ? $_smarty_tpl->tpl_vars['escolha'] : false;
$__foreach_escolha_9_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['escolha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['escolha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['escolha']->value) {
$_smarty_tpl->tpl_vars['escolha']->_loop = true;
$__foreach_escolha_9_saved_local_item = $_smarty_tpl->tpl_vars['escolha'];
?>
											<div class="col-md-3 col-sm-3">
												<label data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default"> <input
													type="radio" class="flat required" name="<?php echo $_smarty_tpl->tpl_vars['pergunta']->value->getPergunta();?>
"
													value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"  required="required"  ><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['escolha']->value;?>

												</label>
											</div>
											<?php
$_smarty_tpl->tpl_vars['escolha'] = $__foreach_escolha_9_saved_local_item;
}
if ($__foreach_escolha_9_saved_item) {
$_smarty_tpl->tpl_vars['escolha'] = $__foreach_escolha_9_saved_item;
}
if ($__foreach_escolha_9_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_escolha_9_saved_key;
}
?>
										</div>
										<?php
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_8_saved_local_item;
}
if ($__foreach_pergunta_8_saved_item) {
$_smarty_tpl->tpl_vars['pergunta'] = $__foreach_pergunta_8_saved_item;
}
?>
									</div>


								</div>

								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




	<?php echo '<script'; ?>
 type="text/javascript" src="js/wizard/jquery.smartWizard.js"><?php echo '</script'; ?>
>
	<!-- pace -->
	<?php echo '<script'; ?>
 src="js/pace/pace.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      // Smart Wizard
      $('#wizard').smartWizard();

      function onFinishCallback() {
        $('#wizard').smartWizard('showMessage', 'Finish Clicked');
        //alert('Finish Clicked');
      }
    });

    $(document).ready(function() {
      // Smart Wizard
      $('#wizard_verticle').smartWizard({
        transitionEffect: 'slide'
      });

    });
  <?php echo '</script'; ?>
>

</body>

</html>

<?php }
}
