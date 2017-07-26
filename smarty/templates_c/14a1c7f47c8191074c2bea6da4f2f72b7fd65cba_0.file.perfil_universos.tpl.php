<?php
/* Smarty version 3.1.29, created on 2016-10-26 13:16:04
  from "/opt/lampp/htdocs/perfilcomportamental/smarty/templates/perfil_universos.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58109074818e96_12374551',
  'file_dependency' => 
  array (
    '14a1c7f47c8191074c2bea6da4f2f72b7fd65cba' => 
    array (
      0 => '/opt/lampp/htdocs/perfilcomportamental/smarty/templates/perfil_universos.tpl',
      1 => 1477480269,
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
function content_58109074818e96_12374551 ($_smarty_tpl) {
?>
<html lang="en">

<head>
   <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>


<body class="nav-md">

  <div class="container body">
    <div class="main_container">
    
   <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

       
      <!-- page content -->
      <div class="right_col" role="main" style="height: 100%">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Universos Incluídos
                    <small>
                        Veja os perfis globais segundo suas informações
                    </small>
                </h3>
            </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Faculdade<small>Reune todos os perfis da faculdade</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-print" ></i> Imprimir</a>
                        </li>
                       <li><a href="#"><i class="fa fa-download" ></i> Download</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <CENTER><h2><?php echo $_smarty_tpl->tpl_vars['faculdade']->value;?>
</h2></CENTER>
                  <canvas id="canvasDoughnut"></canvas>
                   <CENTER><label>Total de estudantes: </label> <span class="badge bg-green "><?php echo $_smarty_tpl->tpl_vars['totalPerfisPkFacul']->value;?>
</span></CENTER>
                </div>
              </div>
            </div>
             <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Curso<small>Reune todos os perfis do curso</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                       <li><a href="#"><i class="fa fa-print" ></i> Imprimir</a>
                        </li>
                       <li><a href="#"><i class="fa fa-download" ></i> Download</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <CENTER><h2><?php echo $_smarty_tpl->tpl_vars['curso']->value;?>
</h2></CENTER>
                  <canvas id="pieChart"></canvas>
                   <CENTER><label>Total de estudantes: </label> <span class="badge bg-green "><?php echo $_smarty_tpl->tpl_vars['totalPerfisPkCurso']->value;?>
</span></CENTER>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      <input type="hidden" id="gatoFacul" value="<?php echo $_smarty_tpl->tpl_vars['gatoPercentFacul']->value;?>
" /> 
      <input type="hidden" id="tubaraoFacul" value="<?php echo $_smarty_tpl->tpl_vars['tubaraoPercentFacul']->value;?>
" /> 
      <input type="hidden" id="loboFacul" value="<?php echo $_smarty_tpl->tpl_vars['loboPercentFacul']->value;?>
" /> 
      <input type="hidden" id="aguiaFacul" value="<?php echo $_smarty_tpl->tpl_vars['aguiaPercentFacul']->value;?>
" />
      
       <input type="hidden" id="gatoCurso" value="<?php echo $_smarty_tpl->tpl_vars['gatoPercentCurso']->value;?>
" /> 
      <input type="hidden" id="tubaraoCurso" value="<?php echo $_smarty_tpl->tpl_vars['tubaraoPercentCurso']->value;?>
" /> 
      <input type="hidden" id="loboCurso" value="<?php echo $_smarty_tpl->tpl_vars['loboPercentCurso']->value;?>
" /> 
      <input type="hidden" id="aguiaCurso" value="<?php echo $_smarty_tpl->tpl_vars['aguiaPercentCurso']->value;?>
" />
      
      <!-- /page content -->
      
    </div>
  </div>

  
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  

  <?php echo '<script'; ?>
>

	var loboFacul = document.getElementById("loboFacul").value;
    var aguiaFacul = document.getElementById("aguiaFacul").value;
    var tubaraoFacul = document.getElementById("tubaraoFacul").value;
    var gatoFacul = document.getElementById("gatoFacul").value;

	var loboCurso = document.getElementById("loboFacul").value;
    var aguiaCurso = document.getElementById("aguiaFacul").value;
    var tubaraoCurso = document.getElementById("tubaraoFacul").value;
    var gatoCurso = document.getElementById("gatoFacul").value;

 // Doughnut chart
    var ctx = document.getElementById("canvasDoughnut");
    var data = {
      labels: [
		"Direito / Intuitivo",
		"Posterior / Ação",
        "Esquerdo / Racional",
        "Anterior / Ideias",
      ],
      datasets: [{
        data: [gatoFacul, tubaraoFacul, loboFacul, aguiaFacul],
        backgroundColor: [
          "#455C73",
          "#9B59B6",
          "#BDC3C7",
          "#26B99A" 
        ],
        hoverBackgroundColor: [
          "#34495E",
          "#B370CF",
          "#CFD4D8",
          "#36CAAB" 
        ]

      }]
    };

    var canvasDoughnut = new Chart(ctx, {
      type: 'doughnut',
      tooltipFillColor: "rgba(51, 51, 51, 0.55)",
      data: data
    });

    // Pie chart
    var ctx = document.getElementById("pieChart");
    var data = {
      datasets: [{
        data: [gatoCurso, tubaraoCurso, loboCurso, aguiaCurso],
        backgroundColor: [
          "#455C73",
          "#9B59B6",
          "#BDC3C7",
          "#26B99A" 
        ],
        label: 'My dataset' // for legend
      }],
      labels: [
       		"Direito / Intuitivo",
    		"Posterior / Ação",
            "Esquerdo / Racional",
            "Anterior / Ideias",
      ]
    };

    var pieChart = new Chart(ctx, {
      data: data,
      type: 'pie',
      otpions: {
        legend: false
      }
    });

  <?php echo '</script'; ?>
>

</body>

</html><?php }
}
