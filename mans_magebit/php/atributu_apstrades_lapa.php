<?php
//sāk/turpina sesiju
session_start();
?>
<!-- lapa ar darbībām saraksta tabulas datu aizvadīšanai uz serveri -->
<?php
//drošības pēc pārbauda vai formā tiešām savadīti dati
if(isset($_POST['pievienot'])&& $_POST["pievienot"]=="ADD" ){
  if(isset($_POST['virsraksts'])&& $_POST['virsraksts']!=""&& !empty($_POST['virsraksts'])){
    // apzīmē datus no formas (+ lai izvairītos no kaitnieciskiem datiem, izlaiž cauri funkcijai htmlspecialchars() )
    $virsraksts=htmlspecialchars($_POST['virsraksts']);
    $apraksts=htmlspecialchars($_POST['apraksts']);
    $epasts=htmlspecialchars($_SESSION["email"]);
    //šeit dati, lai pieslēgtos lokālajam serverim
    $servername='localhost';
    $username="root";
    $pass="";
    $database="magebit_datubaze";
    // savienojas ar severi
    $conn= new mysqli($servername, $username, $pass, $database);
    // pārbauda savienojumu
    if($conn->connect_error){die("Nevar pievienoties datubāzei" . $conn->$connect_error);}
    //sagatavo datubāzē sošo tabulu
    $sql=$conn->prepare("INSERT INTO `lietotaju_atributi` (`virsraksts`, `saraksts`, `epasts`) VALUES (?, ?, ?)");
    //ievieto datubāzes tabulā sagatavotots formas datus
    $sql->bind_param("sss", $virsraksts, $apraksts, $epasts);
    $sql->execute();
    //aizver tabulu un beidz savienojumu ar datubāzi
    $sql->close();
    $conn->close();
    //pēc darbības izpildes nonākam atpakaļ
    header("Location: http://" . $_SERVER["HTTP_HOST"] . "/mans_magebit/public/loggedin_lapa.php");
    return;//un pārtraucam koda izpildi
}else {
  var_dump("data is not added! Sorry.");
}
}else {
  var_dump("data is not added! Sorry.");
}
?>
