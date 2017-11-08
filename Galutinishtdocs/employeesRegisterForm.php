<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Darbuotojų registracija</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="js/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
</head>


<body>
  <div class="row">
    <?php require_once("includes/menu.php"); ?>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
          <!-- PRASIDEDA FORMA ****************************************************************************-->
          <form class="col s12" action="api/employees/create.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s6">

                <!--inputas vardui*************************************-->
                <input name="name" id="name" type="text" class="validate">
                <label for="name">First Name</label>
              </div>
                <!--*********************************************************-->

              <!--inputas pavardei*******************************************-->
              <div class="input-field col s6">
                <input name="surname" id="surname" type="text" class="validate">
                <label for="surname">Last Name</label>
              </div>
            </div>
            <!--***********************************************************-->
            <div class="row">
              <div class="input-field col s6">
                <input name="position" id="position" type="text" class="validate">
                <label for="surname">Position</label>
              </div>
            </div>

            <!--inputas mailui***********************************************************-->
            <div class="row">
              <div class="input-field col s12">
                <input name="email" id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <!--***********************************************************************-->
            <br><br>
            <!--mygtukas failo pasirinkimui ir mygtukas failo ikelimui*****************-->
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br><br>
            <input type="submit" class="btn" value="Išsaugoti!" name="ikeltif">

            <!--Mygtukas įrašymui i DB-->
            <!-- <button class="btn waves-effect waves-light" type="submit" name="action">Išsaugoti ! -->
              <!-- <i class="material-icons right">send</i> SITAS NEBUTINAS (tiesiog ikonele ant mygtuko)-->
            <!-- </button> -->

          </form>
          <!-- FORMOS PABAIGA *****************************************************************************************-->


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

  </body>
</html>
