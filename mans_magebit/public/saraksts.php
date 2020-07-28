<!-- sākuma lapa ko ielādē index lapā -->
<div class="viss_logs">

  <div class="galv_">
  <!-- kreisais fona lodziņš -->
  <div class="sign_up">
    <div class="virs2">
      <h1>Don't have an account?</h1>
      <p class="line1"></p>
      <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h4>
      <button class="poga1" type="button" name="button" onclick="kustos()">SIGN UP</button>
    </div>
  </div>
<!-- labais fona lodziņš -->
  <div class="sign_up">
    <div class="virs2">
      <h1 >Have an account?</h1>
      <p class="line1"></p>
      <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
      <button class="poga1" type="button" name="button" onclick="kustos2()">LOG IN</button>
<!-- logs virs abiem pārējiem logiem (bet iekš otrā loga!!) -->
        <div class="peld_logs" id="logs_peld">
          <img class="eena" id="eena" src="../images/ena.png" alt="">
          <div class="virs2">
            <h1 id="virs1">Login</h1>
            <img class="ikona2" src="../images/logo.png" alt="">
            <p class="line1"></p>
<!-- forma lietotāja datu ievadīšanai (reģistrējoties vai ielogojoties) -->
            <form class="forma1" id="forma1" action="../php/login_lapa.php" method="post">
              <label id="label1" for="vards1" hidden>Name<span class="sp1">*</span><img class="ikona" src="../images/ic_user.png" alt=""></label>
              <input type="text" class="dati1 " id="vards1" name="vards" value="" hidden disabled required/>
              <br id="br1" hidden>
              <label class="leibls1" for="epasts1">Email<span class="sp1">*</span><img class="ikona" src="../images/ic_mail.png" alt=""></label>
              <input type="email" class="dati1" id="epasts1" name="epasts" value="" required/>
              <br>
              <label class="leibls1" for="parole1">Password<span class="sp1">*</span><img class="ikona" src="../images/ic_lock.png" alt=""></label>
              <input type="password" class="dati1" id="parole1" name="parole" value="" required/>
              <input type="submit" class="poga1 poga2" id="poga2" name="submit" value="LOGIN">
              <input type="button" class="poga1" id="poga3" name="" value="Forgot?">
            </form>

          </div>

            <img class="eena2" id="eena2" src="../images/ena2.png" alt="">

        </div>
    </div>
  </div>
<!-- footeris -->
  <div class="footeris">
    <img id="bilde3" src="../images/footer.png" alt="">
  </div>

  </div>
</div>
