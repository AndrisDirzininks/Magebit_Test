<!-- lapa ar darbībām SignUp bloka formas datu aizvadīšanai uz serveri -->
<?php
//pārbauda vai kādi dati vispār nosūtīti
  if(isset($_POST['parole'])&& $_POST['parole']!=""&& !empty($_POST['parole'])){
// apzīmē datus no formas (+ lai izvairītos no kaitnieciskiem datiem, izlaiž cauri funkcijai htmlspecialchars() )
$name=htmlspecialchars($_POST["vards"]);
$email=htmlspecialchars($_POST["epasts"]);
$password=htmlspecialchars($_POST["parole"]);
$encripted_password=password_hash($password, PASSWORD_DEFAULT);//te padeva algoritmu

$servername='localhost';
$username="root";
$pass="";
$database="magebit_datubaze";

$conn= new mysqli($servername, $username, $pass, $database); //izveido konekciju ar datubāzi
if($conn->connect_error){die("Nevar pievienoties datubāzei" . $conn->$connect_error);}

$sql=$conn->prepare("INSERT INTO `mans_magebit` (`vards`, `epasts`, `parole`) VALUES (?, ?, ?)"); //sagatavo tabulas laukus
$sql->bind_param("sss", $name,  $email, $encripted_password);
$sql->execute();
// if(sql->execute()){echo "izdevās!"};
$sql->close();
$conn->close();
//aizvada uz lapu, kur paziņo, ka lietotājs ir reģistrējies.
header("Location: http://" . $_SERVER["HTTP_HOST"] . "/mans_magebit/public/register_veiksmigs.php");
return; //un pārtraucam koda izpildi

}else{
  var_dump("some data were not submited :(!");//parādīs kļūdu, ja formas dati tikuši nosūtīti nepilnīgi
}
 ?>
