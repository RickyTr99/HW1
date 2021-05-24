<?php

include 'auth.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <title>CDS</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <script src="carica_orario.js" defer="true"></script>
</head>
  <body>
    <header>      
      <nav>
        <div id="logo">
          Fidal Italia
        </div>
        <div id="links">
        <?php
          
          if (checkAuth()) {
            $username= $_SESSION["username"];
            echo "
            <a href='http://localhost/progetto/homelogin.php'>Home</a>
            <a href='http://localhost/progetto/specialità.php'>Specialità</a>
            <a href='http://localhost/progetto/orario.php'>Orario</a>
            <a href='http://localhost/progetto/podcast.php'>Podcast</a>
            <a class='button' href='http://localhost/progetto/logout.php'>Logout</a>";
        }else{
          echo "
          <a href='http://localhost/progetto/home.php'>Home</a>
          <a href='http://localhost/progetto/podcast.php'>Podcast</a>
          <a class='button' href='http://localhost/progetto/register.php'>Iscrivi la tua Squadra</a>";
        }
        ?>
        </div>
      </nav>

    </header>

   <div class="tabella">
    <h2>Tabella Orari</h2>           
    <table class="tableorario">
        <thead>
        <tr>
            <th>Orario</th>
            <th>Specialità</th></br>
        </tr>
        </thead>
        <tbody class="table_body">
        
        </tbody>
    </table>
    </div>


    </body>

    <footer>
      <address>Torre Riccardo<address>
      <p>O46002023</p>
    </footer>


</html>