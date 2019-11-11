<?php 
ob_start();
require "libs/rb.php";
  R::setup( 'mysql:host=localhost;dbname=liza',
        'root', '' );
?>