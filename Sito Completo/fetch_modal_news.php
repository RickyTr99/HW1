<?php
include 'auth.php';
if (!checkAuth()) {
	header('Location: home.php');
	exit;
}
$id=$_GET["id"];
$sql = "SELECT id,titolo,url,descrizione FROM NEWS where id='$id'";
$result = $conn->query($sql);
$newsArray = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $newsArray[] = array('id' => $row['id'],'titolo' => $row['titolo'],'url' => $row['url'],'descrizione' => $row['descrizione']);
  }
  echo json_encode($newsArray);
} else {
  $newsArray[] = array('ok' => false);
  echo json_encode($newsArray);
}
$conn->close();

?>