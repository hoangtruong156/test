<?php
  @session_start();
  include("controllers/c_home.php");
  $c_home = new C_home();
  $c_home->Hien_thi_home();
  sad;
?>
