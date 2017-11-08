<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
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
      <div class="row">
        <div class="col s12" >
          <div id="login" class="col s12">
            <!--********************************************************************-->
            <form class="col s12" action="api/user/read.php" method="POST">
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input name="username" id="username" type="text" class="validate" required>
                  <label for="username">Username</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">security</i>
                  <input name="password" id="password" type="password" class="validate" required>
                  <label for="password">Password</label>
                </div>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
            </form>
            <!--********************************************************************-->
          </div>
        </div>
      </div>
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
