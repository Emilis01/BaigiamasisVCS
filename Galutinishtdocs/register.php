<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/materialize.css">
	  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>

    <script>
      $(document).ready(function(){//apršiau index.php
        $(".button-collapse").sideNav();
      });
    </script>
  </head>
  <body>
    <div class="container">

      <!--Meniu *************************************************-->
<!--       <div class="row">
        <?php //require_once("includes/menu.php"); ?>
      </div> -->
      <!--*******************************************************-->

      <div class="row">
        <div class="col s12" >
          <div id="register" class="col s12">

            <!-- PRASIDEDA FORMA ************************************************************************************************* -->
            <form class="col s12" action="api/employees/create.php" method="POST">
              <div class="row">
                <div class="input-field col s6">

                  <!--inputas vardui*********************************************-->
                  <input name="name" id="name" type="text" class="validate">
                  <label for="name">First Name</label>
                </div>
                  <!--***********************************************************-->

                <!--inputas pavardei*********************************************-->
                <div class="input-field col s6">
                  <input name="surname" id="surname" type="text" class="validate">
                  <label for="surname">Last Name</label>
                </div>
              </div>
              <!--***********************************************************-->


              <!--inputas nickname ***********************************************************-->
<!--               <div class="row">
                <div class="input-field col s12">
                  <input name="username" id="username" type="text" class="validate">
                  <label for="username">Username</label>
                </div>
              </div> -->
              <!--***************************************************************************-->

              <!--inputas passwordui***********************************************************-->
<!--               <div class="row">
                <div class="input-field col s12">
                  <input name="password" id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
              </div> -->
              <!--***************************************************************************-->

              <!--inputas mailui***********************************************************-->
              <div class="row">
                <div class="input-field col s12">
                  <input name="email" id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <!--***********************************************************************-->

              <!--Mygtukas įrašymui***********************************************************-->
              <button class="btn waves-effect waves-light" type="submit" name="action">Išsaugoti !
                <!-- <i class="material-icons right">send</i> SITAS NEBUTINAS (tiesiog ikonele ant mygtuko)-->
              </button>
              <!--****************************************************************************-->


            </form>
            <!-- FORMOS PABAIGA *****************************************************************************************-->



          </div>
        </div>
      </div>



    </div>

  </body>
</html>
