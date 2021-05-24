<?php
include 'auth.php';
if (!checkAuth()) {
	header('Location: home.php');
	exit;
}

$sql = "SELECT ORARIO, SPECIALITA FROM GARE";
$result = $conn->query($sql);
$orarioArray = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $orarioArray[] = array('orario' => $row['ORARIO'],'specialita' => $row['SPECIALITA']);
  }
  echo json_encode($orarioArray);
} else {
  $orarioArray[] = array('ok' => false);
  echo json_encode($orarioArray);
}
$conn->close();

?>