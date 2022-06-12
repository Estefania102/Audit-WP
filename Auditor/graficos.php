<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" type="text/css" href="../lib/chart.js/Chart.css"></link>
<link rel="stylesheet" type="text/css" href="../lib/chart.js/Chart.min.css"></link>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php 
echo $idem
?>
  <div style="margin-bottom: 30px;"> 
    <section class="content">
      <div class="container-fluid">
      <h5 style="text-align:center;margin-bottom: 30px;">Resumen del estado de los elementos</h5>
        <div class="row" style="margin-left: 13%;">
          <div class="col-md-10">
            <!-- GRAFICO DE LINEA -->
            <div class="card card-info" style="text-align: center;margin: auto;width:auto;">
              <div class="card-header" style=" height: 50px;">
                <h3 class="card-title">Gráfico de Línea</h3>           
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              </div>
             
            </div>

        </div>

      </div>
    </section>
<div>
<script>
$(document).ready(function(){
 
//- GRAFICO DE LINEA
$.getJSON("procesos.ajax2.php?cod4=<?=$idem?>",function(data){
                var cantidad = [];
                var est = ['Bueno', 'Regular', 'Malo'];
                for(let index = 0;index < data.length;index++){
                    cantidad.push(data[index]["cantidad"]);
                    }

var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
var areaChartData = {
  labels  : est,
  datasets: [
    {
      label               : 'Cantidad segun el estado',
      backgroundColor     : 'rgba(60,141,188,0.9)',
      borderColor         : 'rgba(60,141,188,0.8)',
      pointRadius          : true,
      pointColor          : '#3b8bba',
      pointStrokeColor    : 'rgba(60,141,188,1)',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(60,141,188,1)',
      data                : cantidad
    },
    
  ]
}
var areaChartOptions = {

maintainAspectRatio: false,
  responsive : true,
  events: false,
  tooltips: {
      enabled: false
  },
  legend: {
    display: true
  },
  scales: {
    xAxes: [{
        ticks:{
            fontColor:'#000'
        },
      gridLines: {
        display: false,
        color:'#000',
        drawBorder:false
      }
    }],
    yAxes: [{
        ticks:{
            stepSize: 0,
            fontColor:'#FFF'
        },
      gridLines: {
        display: false,
        color:'#000',
        drawBorder:false
      }
    }]
  },
animation: {
duration: 1,
onComplete: function(){
    var chartInstance = this.chart,
    ctx = chartInstance.ctx;
    ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize,Chart.defaults.global.defaultFontStyle,Chart.defaults.global.defaultFontFamily);
    ctx.fillStyle = "#000";
    ctx.textAlign = 'center';
    ctx.textBaseline = 'bottom';

     this.data.datasets.forEach(function(dataset, i){
        var meta = chartInstance.controller.getDatasetMeta(i);
        meta.data.forEach(function (bar, index) {
            var data = dataset.data[index];
            ctx.fillText(data, bar._model.x,bar._model.y - 5);
        });
     });
}
  }
}

//- GRAFICO DE LINEA
    
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
 
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })
})
})
    </script>
