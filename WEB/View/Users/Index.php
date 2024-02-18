<?php
require '../Shared/Template.php';
Template::renderHeader();

?>

<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12">
         <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
               <div class="photo-content">
                  <div class="cover-photo rounded"></div>
               </div>
               <div class="profile-info">
                  <div class="profile-photo">
                     <img src="<?php echo AssetPath('images/fukada.jpg') ?>" class="img-fluid rounded-circle" alt="">
                  </div>
                  <div class="profile-details">
                     <div class="profile-name px-3 pt-2">
                        <h4 class="text-primary mb-0">Mitchell C. Shay</h4>
                        <p>UX / UI Designer</p>
                     </div>
                     <div class="profile-email px-2 pt-2">
                        <h4 class="text-muted mb-0">info@example.com</h4>
                        <p>Email</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php
Template::renderFooter();
?>