<!DOCTYPE html>
<html lang="pt">

<head>
{include file="header.tpl"}


<style type="text/css">

#user-region span, #clicked-region span {
	color: #26b99a;
	font-weight: bold;
	font-size: 18px;
}

#brazil-map {
	height: 345px;
	width: 500px;
}

@media screen and (max-width: 650px) {
	#brazil-map {
		margin-left: -20%
	}
}

</style>

</head>


<body class="nav-md">
	<div class="container body">
		<div class="main_container">


			{include file="menu_horizontal.tpl"}

			<!-- page content -->
			<div class="right_col" role="main">
				<!-- top tiles -->
				<div class="row tile_count">
					<div
						class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
						<div class="left"></div>
						<div class="right">
							<span class="count_top"><i class="fa fa-users"></i>Total de
								Usuários</span>
							<div class="count green">{$totalUsers}</div>
							<!-- <span class="count_bottom"><i class="green">4% </i>na Ãšltima Semana</span> -->
						</div>
					</div>
					<div
						class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
						<div class="left"></div>
						<div class="right">
							<span class="count_top"><i class="fa fa-file-text-o"></i>
								Formulários Respondidos</span>
							<div class="count green">{$totalRespostas}</div>
							<!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i>na Ãšltima Semana</span> -->
						</div>
					</div>
					<div
						class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
						<div class="left"></div>
						<div class="right">
							<span class="count_top"><i class="fa fa-institution"></i>
								Faculdades</span>
							<div class="count green">{$totalFacul}</div>
							<!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> na Ãšltima Semana</span> -->
						</div>
					</div>
					<div
						class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
						<div class="left"></div>
						<div class="right">
							<span class="count_top"><i class="fa fa-mortar-board"></i> Cursos</span>
							<div class="count green">{$totalCurso}</div>
							<!-- <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> na Ãšltima Semana</span> -->
						</div>
					</div>
				</div>
				<!-- /top tiles -->

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="dashboard_graph">
							<div class="row x_title">
								<div class="col-md-6">
									<h3>
										Perfil Comportamental <small>Respostas</small>
									</h3>
								</div>
							</div>

							<div class="col-md-10 col-sm-10 col-xs-12">
								<div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
								<div style="width: 100%;">
									<div id="canvas_dahs" class="demo-placeholder"	style="width: 100%; height: 300px;"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>

				</div>
				<br />

				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Perfis Gerais</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
									</li>
									<li class="dropdown"><a href="#" class="dropdown-toggle"
										data-toggle="dropdown" role="button" aria-expanded="false"><i
											class="fa fa-wrench"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Settings 1</a></li>
											<li><a href="#">Settings 2</a></li>
										</ul></li>
									<li><a class="close-link"><i class="fa fa-close"></i></a></li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<canvas id="canvas1" ></canvas>
								<CENTER><label>Total de respostas: </label> <span class="badge bg-green ">{$totalRespostas}</span></CENTER>
							</div>
						</div>
					</div>


					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="row">
							<div class=" ">
								<div class="x_panel">
									<div class="x_title">
										<h2>
											Local dos visitantes location <small>geo-apresentação</small>
										</h2>
										<ul class="nav navbar-right panel_toolbox">
											<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
											</li>
											<li class="dropdown"><a href="#" class="dropdown-toggle"
												data-toggle="dropdown" role="button" aria-expanded="false"><i
													class="fa fa-wrench"></i></a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Settings 1</a></li>
													<li><a href="#">Settings 2</a></li>
												</ul></li>
											<li><a class="close-link"><i class="fa fa-close"></i></a></li>
										</ul>
										<div class="clearfix"></div>
									</div>

									<div id="container" class="x_content">
										<div id="clicked-region">
											<h2>Região escolhida: <span></span></h2>
										</div>
										<div id="user-region">
											<h2 >Quantidade de Usuários: <span></span></h2>
										</div>
										<div id="brazil-map"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			 <input type="hidden" id="gato" value="{$gatoPercent}" /> 
		      <input type="hidden" id="tubarao" value="{$tubaraoPercent}" /> 
		      <input type="hidden" id="lobo" value="{$loboPercent}" /> 
		      <input type="hidden" id="aguia" value="{$aguiaPercent}" />
		      
		      <input type="hidden" id="resultadoGeral" value="{$resultadoGeral}" >
		      
      	<!-- /page content -->
		</div>
	</div>
	{include file="footer.tpl"}

	<script>
    $(document).ready(function() {
      // [17, 74, 6, 39, 20, 85, 7]
      //[82, 23, 66, 9, 99, 6, 2]
      
      
     var data = $("#resultadoGeral").val();

     var data2 = data.split(";");

     var data = [];
     for(var i = 0; i < data2.length; i++){
    	 	var array1 = data2[i].split(',');
    	 	var array2 = [parseInt(array1[0]), parseInt(array1[1])];
			data.push(array2);			
     }
      
      $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
        data
      ], {
        series: {
          lines: {
            show: false,
            fill: true,
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: "#d5d5d5",
          borderWidth: 1,
          color: '#fff'
        },
        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
        xaxis: {
          tickColor: "rgba(51, 51, 51, 0.06)",
          //mode: "time",
          tickSize: [1, "day"],
          //tickLength: 10,
          axisLabel: "Date",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: 'Verdana, Arial',
          axisLabelPadding: 10,
          mode: "time", 
          timeformat: "%m/%d/%y", 
          minTickSize: [1, "day"]
        },
        yaxis: {
          ticks: 8,
          tickColor: "rgba(51, 51, 51, 0.06)",
        },
        tooltip: false
      });

      function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
      }
    });
  </script>

	<!-- worldmap -->
	<script type="text/javascript"
		src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
	<!-- <script type="text/javascript"	src="js/maps/jquery-jvectormap-1.2.2.min.js"></script> -->
	<script type="text/javascript" src="js/maps/gdp-data.js"></script>
	<script type="text/javascript"
		src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
	<script type="text/javascript"
		src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
	<!-- pace -->
	<script src="js/pace/pace.min.js"></script>

	<script type="text/javascript" src="js/maps/brazil.js"></script>


	<script type="text/javascript">
      $(function() {
          $('#brazil-map').vectorMap({
        	  map: 'brazil',
              zoomButtons: false,
              zoomMax: 1,
              regionStyle: {
                  initial: {
                      'fill-opacity': 0.9,
                      stroke: '#000',
                      'stroke-width': 100,
                      'stroke-opacity': 1
                  },
                  hover: {
                      fill: 'white'
                  }
              },
              backgroundColor: 'transparent',
              series: {
                  regions: [{
                      values: {
                          // RegiÃ£o Norte
                          ac: '#26b99a',
                          am: '#26b99a',
                          ap: '#26b99a',
                          pa: '#26b99a',
                          ro: '#26b99a',
                          rr: '#26b99a',
                          to: '#26b99a',
                          // RegiÃ£o Nordeste
                          al: '#3498db',
                          ba: '#3498db',
                          ce: '#3498db',
                          ma: '#3498db',
                          pb: '#3498db',
                          pe: '#3498db',
                          pi: '#3498db',
                          rn: '#3498db',
                          se: '#3498db',
                          // RegiÃ£o Centro-Oeste
                          df: '#afbfcf',
                          go: '#afbfcf',
                          ms: '#afbfcf',
                          mt: '#afbfcf',
                          // RegiÃ£o Sudeste
                          es: '#9b59b6',
                          mg: '#9b59b6',
                          rj: '#9b59b6',
                          sp: '#9b59b6',
                          // RegiÃ£o Sul
                          pr: '#34495E',
                          rs: '#34495E',
                          sc: '#34495E'
                      },
                      attribute: 'fill'
                  }]
              },
              container: $('#brazil-map'),
              onRegionClick: function (event, code) {
                  $('#clicked-region span').text(code.toUpperCase());

                  $.ajax({
                	  url: 'index.php?code=' + code.toUpperCase(),
                	  complete: function(data) {
                		  $('#user-region span').text(data.responseText);
                	  }              	  
                	});
              }
          });
      });
    </script>


	<script>
    /* $(function() {
      $('#world-map-gdp').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        series: {
          regions: [{
            values: gdpData,
            scale: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionTipShow: function(e, el, code) {
          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    }); */
  </script>



	<script>

	var lobo = document.getElementById("lobo").value;
    var aguia = document.getElementById("aguia").value;
    var tubarao = document.getElementById("tubarao").value;
    var gato = document.getElementById("gato").value;

    var data = {
      labels: [
        "Direito / Intuitivo",
        "Esquerdo / Racional",
        "Anterior / Ideias",
        "Posterior / Ação"
      ],
      datasets: [{
        data: [gato, tubarao, lobo, aguia],
        backgroundColor: [
          "#BDC3C7",
          "#9B59B6",
          "#455C73",
          "#26B99A"
        ],
        hoverBackgroundColor: [
          "#CFD4D8",
          "#B370CF",
          "#34495E",
          "#36CAAB"
        ]

      }]
    };

    var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
      type: 'doughnut',
      tooltipFillColor: "rgba(51, 51, 51, 0.55)",
      data: data
    });
  </script>
</body>

</html>
