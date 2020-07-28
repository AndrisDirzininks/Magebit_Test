<!-- lietotāja lapa -->
<?php session_start();//sāk/turpina sesiju?>
<html>
<!-- ielādē informāciju par lapas īpašībām un citām saitēm -->
<?php include_once("header.php");?>

<body>
  <div class="viss_logs2"  >
    <div >
<!-- Parāda ielogotā lietotāja e-pastu - e-pasts sesijas mainīgajā -->
      <h2 >User with e-mail:
        <?php echo($_SESSION["email"]);?>
      </h2>
      <p class="line2"></p>
<!-- šeit tiks likti lietotāja ievadītie atribūti, kas glabājas datubāzē -->
      <div id="atributi1">
        <h2 class="lists1">List:</h2>
      </div>
<!-- ielādē kodu no faila, kurš pieslēdzas datu bāzei ar glabātajiem atribūtiem un ģenerē formu -->
<?php include_once("../php/load_atributi.php"); ?>

      <p class="line2"></p>
      <h2 class="lists1">Add to list:</h2>
<!-- forma, kur ievada jaunus atribūtus un aizvada tālāk to datus.. -->
      <form class="" action="../php/atributu_apstrades_lapa.php" method="post">
        <br>
        <label for="input1" class="virsr3">Title:</label>
        <br>
        <input type="text" name="virsraksts" id="input1" value="" required/>
        <br>
        <label for="input2" class="virsr3">Description:</label>
        <br>
        <textarea name="apraksts" id= "input2" rows="4" cols="50" ></textarea>
        <br></br>
        <input class="poga5" type="submit" name="pievienot" value="ADD">
        <br>
      </form>

      <p class="line2"></p>
      <!-- poga ar lapu uz sesijas izbeigšanu (izlogošanos) -->
      <form class="" action="../php/logout.php"> <input class="poga5 poga6" type="submit" value="LOG OUT"> </form>

    </div>
  </div>

</body>
<html>
