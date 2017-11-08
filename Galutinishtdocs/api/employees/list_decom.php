<?php
  require_once("api/connection/connect.php");

  $stmt = $conn->prepare("SELECT eid, first_name, last_name, position FROM employees");

    $stmt->execute();

    $result = $stmt->get_result();

    while ($myrow = $result->fetch_assoc()) {
		echo '<tr id='.$myrow['eid'].'>';
		echo '<td>'.$myrow['first_name'].'</td>';
    echo '<td>'.$myrow['last_name'].'</td>';
    echo '<td>'.$myrow['position'].'</td>';
		echo '</tr>';
    }

  require_once("api/connection/disconnect.php");

 ?>
