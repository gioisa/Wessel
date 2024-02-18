<?php
require '../Shared/Template.php';
Template::renderHeader();

?>

<div class="container-fluid">
   <div class="row">
     <div class="card">
       <div class="card-body">
       <div class="col-md-12">
         <table id="example" class="display table" style="min-width: 845px">
            <thead>
               <tr>
                  <th>Timestamp</th>
                  <th>Event</th>
                  <th>Warning</th>
                  <th>Alarm</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>12/01/2025</td>
                  <td>120 Volt</td>
                  <td>13.000.000</td>
                  <td>Active</td>
               </tr>
               <tr>
                  <td>12/02/2024</td>
                  <td>120 Volt</td>
                  <td>13.000.000</td>
                  <td>Active</td>
               </tr>
               <tr>
                  <td>12/05/2023</td>
                  <td>120 Volt</td>
                  <td>13.000.000</td>
                  <td>Active</td>
               </tr>
            </tbody>
         </table>
      </div>
       </div>
     </div>
   </div>
</div>

<script src="<?php echo GlobalPath('/View/DataLogger/Script/Index.js') ?>"></script>

<?php
Template::renderFooter();
