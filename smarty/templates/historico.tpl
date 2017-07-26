
<html lang="en">

<head>
  {include file="header.tpl"}
</head>


<body class="nav-md">

  <div class="container body">
    <div class="main_container">
    
    {include file="menu_horizontal.tpl"}
       
      <!-- page content -->
      <div class="right_col" style="height: 100%;" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Hist&#243;rico
                    <small>
                        Monitore a transforma&#231;&#227;o da sua personalidade
                    </small>
                </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Procurar por...">
                  <span class="input-group-btn">
                  	<button class="btn btn-default" type="button">
                    	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>	
                    </button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
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
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <h2>Gr&#225;fico de Linha<small>Compara o resultado de diferentes testes</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <canvas id="lineChart"></canvas>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Gr&#225;fico de Barras<small>Compara o resultado de diferentes testes</small></h2>
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
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <canvas id="mybarChart"></canvas>
                </div>
              </div>
            </div>
			
		  <input type="hidden" id="gato" value="{$gato}" /> 
	      <input type="hidden" id="tubarao" value="{$tubarao}" /> 
	      <input type="hidden" id="lobo" value="{$lobo}" /> 
	      <input type="hidden" id="aguia" value="{$aguia}" />
	      <input type="hidden" id="dataHora" value="{$dataHora}" />
			
          </div>
          
          
          <div class="clearfix"></div>
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

  <script>

  var lobo = document.getElementById("lobo").value.split(",");
  var aguia = document.getElementById("aguia").value.split(",");
  var tubarao = document.getElementById("tubarao").value.split(",");
  var gato = document.getElementById("gato").value.split(",");
  var dataHora = document.getElementById("dataHora").value.split(",");

  

    // Line chart
    var ctx = document.getElementById("lineChart");
    var lineChart = new Chart(ctx, {
      type: 'line',
      data: {
//         labels: ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho"],
		labels: dataHora,
        datasets: [{
          label: "Posterior/Ação",
          backgroundColor: "rgba(255, 128, 128, 0.31)",
          borderColor: "rgba(255, 128, 128, 0.7)",
          pointBorderColor: "rgba(255, 128, 128, 0.7)",
          pointBackgroundColor: "rgba(255, 128, 128, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
//           data: [31, 74, 6, 39, 20, 85, 7]
          data: tubarao
        }, {
          label: "Direito/Intuitivo",
          backgroundColor: "rgba(255, 204, 153, 0.3)",
          borderColor: "rgba(255, 204, 153, 0.70)",
          pointBorderColor: "rgba(255, 204, 153, 0.70)",
          pointBackgroundColor: "rgba(255, 204, 153, 0.70)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(151,187,205,1)",
          pointBorderWidth: 1,
//           data: [82, 23, 66, 9, 99, 4, 2]
          data: gato
        }, {
            label: "Anterior/Ideias",
            backgroundColor: "rgba(38, 185, 154, 0.31)",
            borderColor: "rgba(38, 185, 154, 0.7)",
            pointBorderColor: "rgba(38, 185, 154, 0.7)",
            pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointBorderWidth: 1,
//             data: [20, 55, 21, 88, 10, 52, 62]
            data: aguia
          },
          {
              label: "Esquerdo/Racional",
              backgroundColor: "rgba(102, 163, 255, 0.3)",
              borderColor: "rgba(102, 163, 255, 0.70)",
              pointBorderColor: "rgba(102, 163, 255, 0.70)",
              pointBackgroundColor: "rgba(102, 163, 255, 0.70)",
              pointHoverBackgroundColor: "#fff",
              pointHoverBorderColor: "rgba(151,187,205,1)",
              pointBorderWidth: 1,
              data: lobo
            }]
      },
    });

    // Bar chart
    var ctx = document.getElementById("mybarChart");
    var mybarChart = new Chart(ctx, {
      type: 'bar',
      data: {
//         labels: ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho"],
		labels: dataHora,
        datasets: [{
          label: 'Esquerdo/Racional',
          backgroundColor: "#66a3ff",
//           data: [31, 74, 6, 39, 20, 85, 7]
          data: lobo
        }, {
          label: 'Direito/Intuitivo',
          backgroundColor: "#ffcc99",
//           data: [82, 23, 66, 9, 99, 4, 2]
          data: gato
        }, {
          label: 'Anterior/Ideias',
          backgroundColor: "#009900",
//           data: [20, 55, 21, 88, 10, 52, 62]
          data: aguia
        }, {
           label: 'Direito/Intuitivo',
           backgroundColor: "#ff8080",
//            data: [40, 11, 24, 18, 42, 10, 70]
           data: tubarao
        }]
      },

      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

   

  </script>

</body>

</html>
