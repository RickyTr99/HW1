<?php
include 'auth.php';
if (!checkAuth()) {
	header('Location: home.php');
	exit;
}

$sql = "SELECT id,titolo,url,descrizione FROM specialita";
$result = $conn->query($sql);
$specArray = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $specArray[] = array('id' => $row['id'],'titolo' => $row['titolo'],'url' => $row['url'],'descrizione' => $row['descrizione']);
  }
  echo json_encode($specArray);
} else {
  $specArray[] = array('ok' => false);
  echo json_encode($specArray);
}
$conn->close();

?>