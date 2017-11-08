<?php
require_once("../connection/connect.php");

$failovardas=basename( $_FILES["fileToUpload"]["name"]);//pilnas failo vardas (pvz: logo.jpg)
$target_dir = "../../images/employees/";
$target_file = $target_dir . $failovardas;
echo $target_file;
$uploadOk = 1;
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
//(pagal failo dydi nusprendzia ar tai paveiksliukas)
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
    echo "Failas yra pavaiksliukas";// . $check["mime"] . "."
    $uploadOk = 1;
} else {
    echo "Failas yra <b style='color:red;'>Ne</b> paveiksliukas";
    $uploadOk = 0;
}
// patikrina ar jau egzistuoja toks failas
if (file_exists($target_file)) {
    echo "<br>Tokiu pavadinimu failas jau egzistuoja. ";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br>Failas <b style='color:red;'>Ne</b>buvo įkeltas. ";
// if everything is ok, try to upload file
//jei viskas ok ikelia faila
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

      $stmt= $conn->prepare(
          "INSERT INTO employees
          (first_name, last_name, position, email, image)
            VALUES
            (?, ?, ?, ?, ?)"
      );

      $stmt->bind_param("sssss", $DBusername, $DBsurname, $DBposition, $DBemail, $DBimage);

        $DBusername=$_POST["name"];   //is ivesto vardo perdave i Duomenu baze
        $DBsurname=$_POST["surname"];
        $DBposition=$_POST["position"];
        $DBemail=$_POST["email"];
        $DBimage=$failovardas;


        if($stmt->execute()){

        }else{
          echo $stmt->error;
        }
        echo "<br>Failas ". basename( $_FILES["fileToUpload"]["name"]). " buvo sėkmingai įkeltas.";
    } else {
        echo "<br>Įvyko klaida įkeliant failą.";
    }
}
header("Refresh:3; ../../employeesRegisterForm.php");
require_once("../connection/disconnect.php");

?>
