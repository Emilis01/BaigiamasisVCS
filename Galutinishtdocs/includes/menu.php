<?php
    session_start();
    if (isset($_SESSION["username"])) {
      require_once("includes\menuRegistered.php");

    }else {
      require_once("includes\menuNotRegistered.php");
    }
 ?>
