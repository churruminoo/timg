<?php
    $strcon = mysqli_connect('localhost', 'u904541516_admin', 'aetsnmdv', 'u904541516_timg') or die('Erro conexão ao BD');
    //$strcon = mysqli_connect('localhost', 'churrumino', 'aetsnmdv', 'treinamento') or die('Erro conexão ao BD');
    $query = "SELECT nomeVideo FROM videos";

    $dados = mysqli_query($strcon, $query) or die (mysqli_error($strcon));

    while ($row = mysqli_fetch_array($dados)) {
        echo $row['nomeVideo']."#";
     }
 ?>
