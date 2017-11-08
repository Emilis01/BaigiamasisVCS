<?php
  session_start();

  require_once("../connection/connect.php");//prisijungiam prie office_db

  if ($stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ?")) {
    $stmt->bind_param(
      "s",
      $username
    );

    $username = $_POST["username"];

    $stmt->execute();

    $stmt->bind_result($DBusername, $DBpassword);
    $stmt->fetch();

    // if (password_verify($_POST["password"], $DBpassword)) {
      if ($_POST["password"]== $DBpassword) {//bet taip nesaugu
      $_SESSION["username"] = $DBusername;
      echo $DBusername;
      header("Location: /index.php");
    }else {
      echo '<script type="text/javascript">';
      echo 'alert("Pasitikrink įvestus duolmenis");';
      echo 'window.location.href = "../../login.php";';
      echo '</script>';

    }
    require_once("../connection/disconnect.php");







  }






 ?>
