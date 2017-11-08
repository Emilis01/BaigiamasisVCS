<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Darbuotojai</title>

  <!-- CSS  -->
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
      <div class="row">
        <div class="col l8 s12">
          <form>
              <div class="col l8 s12">
                <input id="searchword" type="text" class="validate">
                <label for="searchword">Ieškoti darbuotojų</label>
              </div>
              <div class="col l2 s12">
                <button class="btn waves-effect waves-light btn-search-align" style="margin-top: 15px" id="searchbtn">Ieškoti</button>
              </div>
          </form>


          <table class='bordered highlight'>
            <thead>
              <tr>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Pareigos</th>
              </tr>
            </thead>
            <tbody id="employees">
            </tbody>
          </table>

          <div id="new-employee-button">
             <?php if(isset($_SESSION['username'])): ?>
               <a href="employeesRegisterForm.php" class="btn waves-effect waves-light btn-search-align" style="margin-top: 15px">Pridėti</a>
             <?php endif; ?>
          </div>
        </div>


        <div class="col l4 s12">
          <div class="card" id="card" tabindex="1">
          </div>
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
  <script src="js/employees.js"></script>

  <script type="text/javascript">
    //uzkraunam lentele
    $(document).ready(function(){
      GetEmployeesList("")
    })

    // paieskos mygtukas
    $(document).ready(function(){
      $("#searchbtn").on("click",function(event){
        event.preventDefault();
        GetEmployeesList($("#searchword").val())
      })
    })

    // eilutes eventas
    $(document).ready(function() {
      $('#employees').on('click', 'tr', function () {
        //alert($(this).attr("id"));
        GetEmployeeInfo($(this).attr("id"))
      });
    });

    </script>



  </body>
</html>
