<?php
require '../Shared/Template.php';
Template::renderHeader();

?>

<div class="container-fluid">
   <div class="row">
      <div class="col-xl-12">
         <div class="card">
            <div class="card-header border-0 pb-0">
               <h4 class="heading mb-5">Voltage (V)</h4>
            </div>
            <div class="card-body">
               <div class="position-relative" id="">
                  <canvas id="LineChart1" style="width: 100%; height:200px;"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-xl-12">
         <div class="card">
            <div class="card-header border-0 pb-0">
               <h4 class="heading mb-5">Current (A)</h4>
            </div>
            <div class="card-body">
               <div class="position-relative" id="">
                  <canvas id="LineChart2" style="width: 100%; height:200px;"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-xl-12">
         <div class="card">
            <div class="card-header border-0 pb-0">
               <h4 class="heading mb-5">L/t</h4>
            </div>
            <div class="card-body">
               <div class="position-relative" id="">
                  <canvas id="LineChart3" style="width: 100%; height:200px;"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script src="<?php echo GlobalPath('/View/TrendingDetail/Script/Index.js') ?>"></script>


<?php
Template::renderFooter();
?>