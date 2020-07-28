<?php
//šeit dati, lai pieslēgtos lokālajam serverim no kura ņems tekstu formas tagiem
$servername='localhost';
$username="root";
$pass="";
$database="magebit_datubaze";
//apzīmē e-pastu no sesijas
$mail=$_SESSION["email"];
// savienojas ar severi
$conn= new mysqli($servername, $username, $pass, $database);
// pārbauda savienojumu
if($conn->connect_error){die("Nevar pievienoties datubāzei" . $conn->$connect_error);}
//sagatavo datubāzes tabulas informāciju
$sql=$conn->prepare("SELECT id, virsraksts, saraksts FROM lietotaju_atributi WHERE epasts=?");
$sql->bind_param("s", $mail);
$sql->execute();
$result=$sql->get_result();//apzīmē rezultātu pēc exekjūtošanas
//izveido ciklus, lai apstrādātu datus un palaistu javascript funkciju, kas ģenerēs formas
if ($result->num_rows > 0) {$i=1;//vajadzēs numerācijai mainīgo
// izvada datus no katras tabulas rindas
  while($row = $result->fetch_assoc()) {
// papildus apzīmē tabulas datus
      $id=$row["id"];
      $virsr=$row["virsraksts"];
      $apr=$row["saraksts"];
?>
<!-- php mainīgos -$ pārveido par javascript mainīgajiem -var -->
<script type="text/javascript">
       var virsraksts4="<?php echo $virsr ?>";
       var apraksts4="<?php echo $apr ?>";
       var id="<?php echo $id ?>";
       var i="<?php echo $i ?>";
//palaiž javascript funkciju, kas ģenerē formas - failā mana_java2.js
       genereFormu3();
</script>
<?php
$i++;//numerācijas mainīgo palielina par 1 vienību cikla beigās
   }
   }
?>
