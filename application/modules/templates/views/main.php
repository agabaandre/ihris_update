
<?php
date_default_timezone_set('Africa/Kampala');	
require_once("includes/header.php");
require_once("includes/sidenav.php"); 
require_once("includes/navtop.php");
?>
<div class="page has-sidebar-left height-full">
    <div class="container-fluid relative animatedParent animateOnce p-lg-5">
<?php
    $this->load->view($module."/".$view);
?>
  </div>
</div>
<?php
require_once("includes/footer.php");
?>