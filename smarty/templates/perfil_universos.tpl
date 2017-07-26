<html lang="en">

<head>
   {include file="header.tpl"}
</head>


<body class="nav-md">

  <div class="container body">
    <div class="main_container">
    
   {include file="menu_horizontal.tpl"}
       
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
                <CENTER><h2>{$faculdade}</h2></CENTER>
                  <canvas id="canvasDoughnut"></canvas>
                   <CENTER><label>Total de estudantes: </label> <span class="badge bg-green ">{$totalPerfisPkFacul}</span></CENTER>
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
                  <CENTER><h2>{$curso}</h2></CENTER>
                  <canvas id="pieChart"></canvas>
                   <CENTER><label>Total de estudantes: </label> <span class="badge bg-green ">{$totalPerfisPkCurso}</span></CENTER>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      <input type="hidden" id="gatoFacul" value="{$gatoPercentFacul}" /> 
      <input type="hidden" id="tubaraoFacul" value="{$tubaraoPercentFacul}" /> 
      <input type="hidden" id="loboFacul" value="{$loboPercentFacul}" /> 
      <input type="hidden" id="aguiaFacul" value="{$aguiaPercentFacul}" />
      
       <input type="hidden" id="gatoCurso" value="{$gatoPercentCurso}" /> 
      <input type="hidden" id="tubaraoCurso" value="{$tubaraoPercentCurso}" /> 
      <input type="hidden" id="loboCurso" value="{$loboPercentCurso}" /> 
      <input type="hidden" id="aguiaCurso" value="{$aguiaPercentCurso}" />
      
      <!-- /page content -->
      
    </div>
  </div>

  
  {include file="footer.tpl"}
  

  <script>

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

  </script>

</body>

</html>