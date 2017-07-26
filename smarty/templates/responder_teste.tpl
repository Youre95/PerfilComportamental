<!DOCTYPE html>
<html lang="pt">

<head>

{include file="header.tpl"}

<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<script type="text/javascript">

 


</script>


<style type="text/css">

 
</style>

</head>


<body class="nav-md">
	<div class="container body">
		<div class="main_container">

			{include file="menu_horizontal.tpl"}

			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left" style="width: inherit;">

							{if ( isset($teste) )}
							<div>
								<h3>{$teste->getNome()}</h3>
								<p>{$teste->getDescricao()}</p>
							</div>
							{/if}

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
										{foreach from=$array0 item=pergunta }
										<div class="form-group">
											<label id="labelSou" class=" col-md-12 "
												style="font-size: 18px">{$pergunta->getTextoPergunta()}</label>
											{foreach from=$pergunta->getArrayEscolha() key=key
											item=escolha }
											<div class="col-md-3 col-sm-3">
												<label data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default">
														<input type="radio" class="flat required"    name="{$pergunta->getPergunta()}"
														value="{$key}" required="required">{$key} {$escolha}
												</label>
												
											</div>
											{/foreach}
										</div>
										{/foreach}
									</div>

									<div id="step-2">
										{foreach from=$array1 item=pergunta }
										<div class="form-group">
											<label id="labelSou" class=" col-md-12 "
												style="font-size: 18px">{$pergunta->getTextoPergunta()}</label>
											{foreach from=$pergunta->getArrayEscolha() key=key
											item=escolha }
											<div class="col-md-3 col-sm-3">
												<label data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default"> <input
													type="radio" class="flat required" name="{$pergunta->getPergunta()}"
													value="{$key}" required="required" >{$key} {$escolha}
												</label>
											</div>
											{/foreach}
										</div>
										{/foreach}
									</div>

									<div id="step-3">
										{foreach from=$array2 item=pergunta }
										<div class="form-group">
											<label id="labelSou" class=" col-md-12 "
												style="font-size: 18px">{$pergunta->getTextoPergunta()}</label>
											{foreach from=$pergunta->getArrayEscolha() key=key
											item=escolha}
											<div class="col-md-3 col-sm-3">
												<label data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default"> <input
													type="radio" class="flat required" name="{$pergunta->getPergunta()}"
													value="{$key}" required="required">{$key} {$escolha}
												</label>
											</div>
											{/foreach}
										</div>
										{/foreach}
									</div>

									<div id="step-4">
										{foreach from=$array3 item=pergunta }
										<div class="form-group">
											<label id="labelSou" class=" col-md-12 "
												style="font-size: 18px">{$pergunta->getTextoPergunta()}</label>
											{foreach from=$pergunta->getArrayEscolha() key=key
											item=escolha }
											<div class="col-md-3 col-sm-3">
												<label data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default"> <input
													type="radio" class="flat " name="{$pergunta->getPergunta()}"
													value="{$key}" required="required" >{$key} {$escolha}
												</label>
											</div>
											{/foreach}
										</div>
										{/foreach}
									</div>

									<div id="step-5">
										{foreach from=$array4 item=pergunta }
										<div class="form-group">
											<label id="labelSou" class=" col-md-12 "
												style="font-size: 18px">{$pergunta->getTextoPergunta()}</label>
											{foreach from=$pergunta->getArrayEscolha() key=key
											item=escolha }
											<div class="col-md-3 col-sm-3">
												<label data-toggle-class="btn-primary"
													data-toggle-passive-class="btn-default"> <input
													type="radio" class="flat required" name="{$pergunta->getPergunta()}"
													value="{$key}"  required="required"  >{$key} {$escolha}
												</label>
											</div>
											{/foreach}
										</div>
										{/foreach}
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

	{include file="footer.tpl"}



	<script type="text/javascript" src="js/wizard/jquery.smartWizard.js"></script>
	<!-- pace -->
	<script src="js/pace/pace.min.js"></script>
	<script type="text/javascript">
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
  </script>

</body>

</html>

