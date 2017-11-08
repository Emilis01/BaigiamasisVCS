<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Pagrindinis</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>




</head>
<body>
  <div class="row">
          <?php require_once("includes/menu.php"); ?>
  </div>



  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons"><a href="/map.php">map</a></i></h2>
            <h5 class="center">Žemėlapis</h5>
            <p class="light">Atidaryti ofiso žemėlapį, kurio pagalba matyti darbo vietas ir informaciją susijusią su darbuotojais.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons"><a href="/employees.php">group</a></i></h2>
            <h5 class="center">Darbuotojai</h5>
            <p class="light">Visų darbuotojų peržiūra ir paieška.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons"><a href="/index.php">settings</a></i></h2>
            <h5 class="center">TBD</h5>
            <p class="light">Čia galbūt bus dar kažkas....</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>




  <footer class="page-footer orange">
    <div class="container">

        <?php require_once("includes/footer.php"); ?>

    </div>
    <div class="footer-copyright">
      <div class="container">
      Sukurta VCS studentų.
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/jquery-3.2.1.js"></script>

  </body>
</html>
