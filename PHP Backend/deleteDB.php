<?php  
  
/*
Use Carefully 
Only use wehn you want to terminate all users in ur database
*/



  $servername = "localhost";
  $username = "root";
  $password = ""; 
  // ($sql) = Name der datenbank die wir 2) erstellen
  $sql = "user_info";


  //Verbindung starten
    $conn = mysqli_connect($servername, $username, $password, $sql);

      // Visueller ausgabe ob operation erfolgreich war oder nicht
      if (!$conn) {
        die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
      }
        echo  "Erfolgreich Verbunden";

 



/*
  $sql = "truncate user";
  $result = mysqli_query($conn, $sql);
*/
?>