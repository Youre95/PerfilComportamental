<?php
/* Smarty version 3.1.29, created on 2016-10-25 22:22:36
  from "/opt/lampp/htdocs/perfilcomportamental/smarty/templates/resultado.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580fbf0c3bf062_52423743',
  'file_dependency' => 
  array (
    '50c262cb63986580d64217f5a00a5e43ca9bab24' => 
    array (
      0 => '/opt/lampp/htdocs/perfilcomportamental/smarty/templates/resultado.tpl',
      1 => 1477424117,
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
function content_580fbf0c3bf062_52423743 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
 src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" 
type="text/javascript"><?php echo '</script'; ?>
>

<style>

/* #canvasRadar {
 background: url('https://images-na.ssl-images-amazon.com/images/G/01/img15/pet-products/small-tiles/23695_pets_vertical_store_dogs_small_tile_8._CB312176604_.jpg');
     background-repeat: no-repeat;
 
} */
.canvas {
	width: 60%;
	margin-top: 10%;
}

.canvasRadio {
	width: 60%;
	margin-left: 50%
}

.divPerfil {
	margin-top: -38%;
}

.img {
	width: 300;
	height: 300;
	margin-left: 70%;
	margin-top: 20%;
}

.cerebro {
	width: 124;
	margin-left: 10%;
	margin-top: -30%;
}

.linea1 {
	width: 138px;
	height: 18px;
	/* margin-left: 9%; */
	margin-top: -25%;
	background-image: url('images/linea1.png');
}

.linea2 {
	width: 208px;
	height: 18px;
	margin-top: 10px;
	margin-left: 65%;
	background-image: url('images/linea2.png');
}

.label2 {
	width: 50%;
	margin-top: -30%
}

.label3 {
	width: 50%;
	margin-left: 65%;
}

@media screen and (max-width: 650px) {
	.resultado {
		width: 240px;
		height: 148px;
		margin-left: 7%;
		background-image: url('images/resultado_240.jpg');
	}
	.divPerfil {
		margin-top: 0%;
	}
	.cerebro {
		margin-left: 50%;
	}
	.label1 {
		width: 100%;
		margin-left: 0%;
	}
	.canvas {
		margin-top: 5px;
		width: 120%;
		margin-left: -9%;
	}
	.canvasRadio {
		width: 200%;
		margin-left: -50%;
		margin-bottom: 30%;
	}
	.img {
		width: 250;
		height: 250;
		margin-left: 0%;
		margin-top: 0%;
	}
	.linea2 {
		width: 208px;
		height: 18px;
		margin-top: 10px;
		margin-left: 0%;
		background-image: url('images/linea2.png');
	}
	.label2 {
		width: 100%;
		margin-left: 0%;
	}
	.label3 {
		width: 100%;
		margin-left: 0%;
	}
}
</style>
</head>


<body class="nav-md">
	

	<div class="container body">
		<div class="main_container">

			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



			<!-- page content -->
			<div id="content" class="right_col" role="main">
					<div class="x_panel">
						<div class="x_title">
							<h3>Preferência Cerebral</h3>
							<div class="clearfix"></div>
						</div>

						<div class="canvasRadio" >
							<canvas id="canvasRadar"></canvas>
						</div>


						<!-- <img alt="" class="cerebro"  src="images/cerebro2.png"> -->

						<!-- <div class="linea1"></div> -->
						<div class="label2">
							<h3>
								<strong><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</strong>
							</h3>
							<h2><?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>
</h2>
						</div>

						<div class="canvas " id="canvas">
							<canvas id="mybarChart"></canvas>
						</div>

						<br> <br>
						
						<div id="div1" ></div>
						
						<div class="divPerfil">
							<img src=<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
 class=img>
							<div class="linea2"></div>
							<div class="label3">
								<h3>
									<strong>Pontos Fortes:</strong>
								</h3>
								<h4><?php echo $_smarty_tpl->tpl_vars['pontosFortes']->value;?>
</h4>

								<h3>
									<strong>Pontos de Melhoria</strong>
								</h3>
								<h4><?php echo $_smarty_tpl->tpl_vars['pontosMelhoria']->value;?>
</h4>

								<h3>
									<strong>Valores</strong>
								</h3>
								<h4><?php echo $_smarty_tpl->tpl_vars['valores']->value;?>
</h4>
							</div>
						</div>
						<!-- <div class="resultado"></div> -->


						<br> <br>


						<div class="actionBar">
							<a onclick="PrintElementID();" class="btn btn-danger"> <i	class="fa fa-file-pdf-o">&#32;Download PDF</i></a>
								
								 <a  onclick="sendMail()" class="btn btn-success"><i class="fa fa-envelope-o">Enviar por email</i> </a>
								 
								  
								<div class="fb-share-button btn btn-primary"
									data-href="http://scp.16mb.com/" data-layout="button_count"
									data-size="small" data-mobile-iframe="true">
									<a class="fb-xfbml-parse-ignore" target="_blank"
										href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fscp.16mb.com%2F&amp;src=sdkpreparse">Compartilhar</a>
								</div>
								<div id="fb-root"></div> <?php echo '<script'; ?>
>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
 
								
						
						</div>

						<input type="hidden" id="gato" value="<?php echo $_smarty_tpl->tpl_vars['gatoPercent']->value;?>
" /> <input
							type="hidden" id="tubarao" value="<?php echo $_smarty_tpl->tpl_vars['tubaraoPercent']->value;?>
" /> <input
							type="hidden" id="lobo" value="<?php echo $_smarty_tpl->tpl_vars['loboPercent']->value;?>
" /> <input
							type="hidden" id="aguia" value="<?php echo $_smarty_tpl->tpl_vars['aguiaPercent']->value;?>
" />
							
							
							<input type="hidden" id="gatoPerfil" value="<?php echo $_smarty_tpl->tpl_vars['gatoPerfil']->value;?>
" /> <input
							type="hidden" id="tubaraoPerfil" value="<?php echo $_smarty_tpl->tpl_vars['tubaraoPerfil']->value;?>
" /> <input
							type="hidden" id="loboPerfil" value="<?php echo $_smarty_tpl->tpl_vars['loboPerfil']->value;?>
" /> <input
							type="hidden" id="aguiaPerfil" value="<?php echo $_smarty_tpl->tpl_vars['aguiaPerfil']->value;?>
" />

					</div>
			</div>

		</div>
		<!-- /page content -->
	</div>

	</div>

	<div id="custom_notifications" class="custom-notifications dsp_none">
		<ul class="list-unstyled notifications clearfix"
			data-tabbed_notifications="notif-group">
		</ul>
		<div class="clearfix"></div>
		<div id="notif-group" class="tabbed_notifications"></div>
	</div>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



	<?php echo '<script'; ?>
 type="text/javascript">

	function sendMail(){

		$.ajax({
			url: "sendMail.php",
			success: function(result){
	    	    $("#div1").html(result);
	    	}
    	});

	}

	
	function PrintElementID() {
		$(".nav_menu").css("display", "none");
		$(".actionBar").css("display", "none");
		
		$("#canvas").css("margin-bottom", "18%");
		$("#canvas").css("margin-top", "15%");

		$(".canvasRadio").css("margin-left", "30%");

		$(".label3").css("margin-left", "0");
		$(".label3").css("margin-top", "-20%");
		
		
		window.print();
		$(".nav_menu").css("display", "block");
		$(".actionBar").css("display", "block");
		
		$("#canvas").css("margin-bottom", "");
		$("#canvas").css("margin-top", "10%");

		$(".canvasRadio").css("margin-left", "50%");
		
		$(".label3").css("margin-left", "65%");
		$(".label3").css("margin-top", "0");

	}

	<?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript">
   // Bar chart
    var ctx = document.getElementById("mybarChart");


     
	var lobo = document.getElementById("lobo").value;
    var aguia = document.getElementById("aguia").value;
    var tubarao = document.getElementById("tubarao").value;
    var gato = document.getElementById("gato").value;


    var loboPerfil = document.getElementById("loboPerfil").value;
    var aguiaPerfil  = document.getElementById("aguiaPerfil").value;
    var tubaraoPerfil = document.getElementById("tubaraoPerfil").value;
    var gatoPerfil = document.getElementById("gatoPerfil").value;
	    
    
    var mybarChart = new Chart(ctx, {
      type: 'bar',
	  axisY:{
		maximum: 100
     },
      data: {
        labels: ["Perfil Comportamental"],
        datasets: [{
          label: 'Lobo',
          backgroundColor: "#66a3ff",
          data: [lobo]
        }, {
          label: 'Gato',
          backgroundColor: "#ffcc99",
          data: [gato]
        }, {
          label: 'Aguia',
          backgroundColor: "#009900",
          data: [aguia]
        }, {
           label: 'Tubarao',
           backgroundColor: "#ff8080",
           data: [tubarao]
        }]
      },

      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
			   max:100
            }
          }]
        }
      }
    });


 // Radar chart
    var ctx = document.getElementById("canvasRadar");
    var data = {
      labels: ["Analítico (Lobo + Tubarão)", "Experimental (Lobo + Águia)" , "Relacional (Águia + Gato)",  "Controlador (Gato + Tubarão)" ],
      datasets: [{
        label: "Porcentagem dos perfis",
        backgroundColor: "rgba(3, 88, 106, 0.2)",
        borderColor: "rgba(3, 88, 106, 0.80)",
        pointBorderColor: "rgba(3, 88, 106, 0.80)",
        pointBackgroundColor: "rgba(3, 88, 106, 0.80)",
        pointHoverBackgroundColor: "#fff",
        pointHoverBorderColor: "rgba(220,220,220,1)",
        data: [lobo ,aguia , gato ,   tubarao ]
      }]
    };

    var canvasRadar = new Chart(ctx, {
      type: 'radar',
      data: data
    });

    
  <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
