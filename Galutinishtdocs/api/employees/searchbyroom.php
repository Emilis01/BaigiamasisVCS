<?php
  require_once("../connection/connect.php");

  if ($stmt = $conn->prepare(
    "SELECT eid, first_name, last_name, position
    FROM employees
    WHERE room = ?"
  )) {

  $stmt->bind_param(
    "s",
    $room
  );

  $room = $_POST["room"];

  $stmt->execute();

  $result = $stmt->get_result();

  $resultToReturn = array();

  while ($myrow = $result->fetch_assoc()) {
    $event = new stdClass();
    $event->eid = $myrow["eid"];
    $event->first_name = $myrow["first_name"];
    $event->last_name = $myrow["last_name"];
    $event->position = $myrow["position"];
    array_push($resultToReturn, $event);
  }

  $myJSON = json_encode($resultToReturn);
  echo $myJSON;
  $stmt->close();
  }
  require_once("../connection/disconnect.php");

 ?>
