$(document).ready(function(){
   var LineChart1 = null;
   var LineChart2 = null;
   var LineChart3 = null;

   if (LineChart1 != null)
      LineChart1.destroy();

   if (LineChart2 != null)
      LineChart2.destroy();

   if (LineChart3 != null)
      LineChart3.destroy();

   var lineChart1Canvas = $('#LineChart1').get(0).getContext('2d');
   var lineChart2Canvas = $('#LineChart2').get(0).getContext('2d');
   var lineChart3Canvas = $('#LineChart3').get(0).getContext('2d');

   var lineChartData = {
      labels: ["10V", "20V", "30V", "40V", "50V"],
      datasets: [{
         data: [20, 30, 10, 40, 25],
         fill: false,
         borderColor: ['#0096FF'],
         backgroundColor: ['#0096FF'],
         tension: 0.1
      }]
   };

   var lineChartOptions = {
      responsive: true,
      legend: {
         display: false  // Menonaktifkan legenda
      },
   }

   LineChart1 = new Chart(lineChart1Canvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions,
   });

   LineChart2 = new Chart(lineChart2Canvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions,
   });

   LineChart3 = new Chart(lineChart3Canvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions,
   });

});