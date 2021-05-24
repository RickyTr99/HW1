<?php
include 'auth.php';
if (!checkAuth()) {
	header('Location: home.php');
	exit;
}
if(!empty($_GET["commento"]) && !empty($_GET["idNews"])){
    
    $id_news=$_GET["idNews"];
    $commento=$_GET["commento"];
    $idSquadra=$_SESSION["log"];

    $sql = "INSERT INTO commenti(cod_news, commento, squadra) VALUES('$id_news','$commento','$idSquadra')";
    $result = $conn->query($sql);
    $sql = "SELECT Nome_Squadra from squadra where ID='$idSquadra'";
    $result=$conn->query($sql);
    $entry = mysqli_fetch_assoc($result);
    $aggiunto[] = array('username' => $entry['Nome_Squadra']);

    echo json_encode($aggiunto);
    $conn->close();
}
?>
