<?php
session_start(); // sāk/turpina sesiju

if(isset($_POST['submit']) && $_POST['submit']=="LOGIN"){//pārbauda vai ir dati jaunajā formas globālajā masīvā un vai submit vērtība ir Lestatīta

  if(isset($_POST['epasts']) && $_POST['epasts']!=""&& !empty($_POST['epasts'])){//pārbauda citus datus arī, vai ir iestatīti

    if (isset($_POST['parole'])&&$_POST['parole']!=""&& !empty($_POST['parole'])) {
// apzīmē datus no formas (+ lai izvairītos no kaitnieciskiem datiem, izlaiž cauri funkcijai htmlspecialchars() )
      $email=htmlspecialchars($_POST['epasts']);//dati no formas
      $password=htmlspecialchars($_POST['parole']);

      $servername='localhost';//dati lai tiktu serverī
      $username="root";
      $pass="";
      $database="magebit_datubaze";

$conn= new mysqli($servername, $username, $pass, $database);
if($conn->connect_error){ die("Unable to connect to database!". $conn->connect_error);}
//sagatavo datubāzes informāciju ar SELECT
$sql=$conn->prepare("SELECT `epasts`, `parole` FROM `mans_magebit` WHERE `epasts`=?");
$sql->bind_param("s", $email);//ieliek datus no tabulas iekš masīva pēc attiecīgā epasta
$sql->execute();
$result=$sql->get_result();//apzīmē rezultātu pēc exekjūtošanas
$user=$result->fetch_assoc();//no rzultāta atsevišķi tie dati (emails, parole) jāizvelk un jāapzīmē
//salīdzina paroles - no formas un no servera.
if(password_verify($password, $user["parole"])){

  $_SESSION['email']=$_POST['epasts'];//iestada sesijas mainīgos (tālāk vajadzēs tikai e-pastu)!
// lietotāju aizvada tālāk uz viņa datu lapu
  header("Location: http://" . $_SERVER["HTTP_HOST"] . "/mans_magebit/public/loggedin_lapa.php");
  return; //un pārtraucam koda izpildi
}else{
  header("Location: http://" . $_SERVER["HTTP_HOST"] . "/mans_magebit/public/login_kluda.php");//vai arī parāda, ka lietotāja dati nav tikuši ievadīti pareizi
  return; //un pārtraucam koda izpildi
}
    }else{
      var_dump("neizdevās 2 :(!");//parādīs kļūdu, ja formas dati tikuši nosūtīti nepilnīgi
  }

  }else{
    var_dump("neizdevās 3 :(!");//parādīs kļūdu, ja formas dati tikuši nosūtīti nepilnīgi
}
}
 ?>
