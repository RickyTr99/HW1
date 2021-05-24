<?php

include 'auth.php';
if (!checkAuth()) {
	header('Location: home.php');
	exit;
}
    
    $query="SELECT c.commento,c.id,c.cod_news,c.squadra,s.Nome_Squadra FROM commenti c join squadra s on c.squadra=s.id order by c.id";
    $res= mysqli_query($conn,$query) or die(mysqli_error($conn));;
    $commentiArray = array();
    while($entry = mysqli_fetch_assoc($res)) {
        $commentiArray[] = array('commento' => $entry['commento'], 'id' => $entry['id'],'cod_news' => $entry['cod_news'],'squadra' => $entry['squadra'] ,'Nome_Squadra' => $entry['Nome_Squadra']);
    }
    echo json_encode($commentiArray);
    mysqli_close($conn);

?>