<!-- lapa ar darbībām saraksta tabulas dzēšanai -->
<?php
 //drošībai pārbauda vai formā tiešām ir dati
   if(isset($_POST['dzest'])&& $_POST['dzest']!=""&& !empty($_POST['dzest'])){
//apzīmē mainīgo no formas - vajadzēs tikai id, lai atpazītu rindu
     $id=$_POST['id'];
     //šeit dati, lai pieslēgtos lokālajam serverim
     $servername='localhost';
     $username="root";
     $pass="";
     $database="magebit_datubaze";
     // savienojas ar severi
     $conn= new mysqli($servername, $username, $pass, $database);
     // pārbauda savienojumu
     if($conn->connect_error){die("Nevar pievienoties datubāzei" . $conn->$connect_error);}
     //izdzēš datubāzes tabulu pēc id
     $sql = "DELETE FROM lietotaju_atributi WHERE id=$id";
//      ja neizdodotos apdeitot, tad paziņotu...
     if ($conn->query($sql) === !TRUE){
       echo "Error updating record: " . $conn->error;
}
//beidz savienojumu ar datubāzi
      $conn->close();
//pēc darbības izpildes nonākam sākuma lapā
      header("Location: http://" . $_SERVER["HTTP_HOST"] . "/mans_magebit/public/loggedin_lapa.php");
      return; //un pārtraucam koda izpildi
 }else {
   var_dump("Something went wrong! Sorry.");
 }
  ?>
