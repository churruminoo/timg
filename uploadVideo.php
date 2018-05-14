<?php
    if (isset($_POST['submit'])) {
      $file = $_FILES['file'];

      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];

      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('mp4');

      if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
          if ($fileSize < 25000000) {
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestination = 'uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            #Conectar no BD
            $strcon = mysqli_connect('localhost', 'u904541516_admin', 'aetsnmdv', 'u904541516_timg') or die('Erro conexão ao BD');
            //$strcon = mysqli_connect('localhost', 'churrumino', 'aetsnmdv', 'treinamento') or die('Erro conexão ao BD');
            $query = "INSERT INTO videos VALUES ('', '$fileNameNew')";
            if (mysqli_query($strcon, $query))
                header("location: index.html?sucesso");
            else
                echo mysql_error();
          } else {
            echo "Arquivo muito grande";
          }
        } else {
          echo "Aconteceu um erro.";
        }
      } else {
        echo "Extensão não permitida";
      }
    }

?>
