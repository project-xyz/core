<div class="accordion" id="accordion2">
       <div class="accordion-group">
         <div class="accordion-heading">
           <a class="btn btn-primary btn-large btn-block" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Login</a>
         </div>
         <div id="collapseOne" class="accordion-body collapse">
           <div class="accordion-inner">
                 <?php include('login.php'); ?>
           </div>
         </div>
       </div>

       <div class="accordion-group">
         <div class="accordion-heading">
             <a class="btn btn-success btn-large btn-block" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Sign up</a>
         </div>
         <div id="collapseTwo" class="accordion-body collapse">
           <div class="accordion-inner">
                 <?php include('sign_up.php'); ?>
           </div>
         </div>
       </div>
</div>