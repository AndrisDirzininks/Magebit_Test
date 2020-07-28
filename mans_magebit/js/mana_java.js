//izveido funkciju, kas pie attiecīgās pogas aktivizēšanas-funkcijas palaišanas maina tagu tekstu un kustošā logIn/signUp bloka atribūtus
function genereFormu(){
//"paņem" virsraksta teksta tagu
let div1=document.getElementById("virs1");
//virsraksta tekstu nomaina
div1.innerHTML="Sign Up";
//arī apakšējo pogu blokā paņem" un nomaina tās tekstu
let div2=document.getElementById("poga2");
div2.setAttribute("value", "SIGN UP");
//padera redzamus un aktīvus paslēptos papildu laukus reģistrācijas formā
document.getElementById("vards1").removeAttribute("hidden");
document.getElementById("vards1").removeAttribute("disabled");
document.getElementById("label1").removeAttribute("hidden");
document.getElementById("br1").removeAttribute("hidden");
//atrod formu pēc klases un nomaina action saiti (tagad šī ir reģistrācijas forma, kura datus aizvadīs citur)
document.getElementById("forma1").setAttribute("action", "../php/reg_lapa.php");
//nonem/pieliek ēnas
document.getElementById("eena2").style.display="none";
document.getElementById("eena").style.display="inline";
};

// funkcija, kas pārvieto login/reģistrācijas logu pa kreisi - attiecībā pret bloku kurā tā atrodas (nomaina savstarpējos attālumus)!
function kustos(){
  let elem = document.getElementById("logs_peld");
  let pos_h = -20;
  let id = setInterval(frame, 5);
  function frame() {
    if (pos_h == -440) {
      clearInterval(id);
      genereFormu();
    } else {
      pos_h=pos_h-4;
      // bloka pozīciju nomaina
      elem.style.left = pos_h + "px";
    }
  }
};
// tāda pat funkcija - pārveido tekstu un citu informāciju atpakaļ
function genereFormu2(){

let div1=document.getElementById("virs1");
div1.innerHTML="Login";

let div2=document.getElementById("poga2");
div2.setAttribute("value", "LOGIN");

//padera redzamus un aktīvus paslēptos papildu laukus reģistrācijas formā
document.getElementById("vards1").setAttribute("hidden", "true");
document.getElementById("vards1").setAttribute("disabled", "true");
document.getElementById("label1").setAttribute("hidden", "true");
document.getElementById("br1").setAttribute("hidden", "true");

//atrod formu pēc klases un nomaina action saiti (tagad šī ir reģistrācijas forma, kura datus aizvadīs citur)
document.getElementById("forma1").setAttribute("action", "../php/login_lapa.php");
//atjano/nonem eenas
document.getElementById("eena2").style.display="inline";
document.getElementById("eena").style.display="none";
};

// tāda pat funkcija, kas pārvieto login/reģistrācijas logu atpakaļ pa labi
function kustos2(){
  let elem = document.getElementById("logs_peld");
  let pos_h = -440;
  let id = setInterval(frame, 5);
  function frame() {
    if (pos_h == -20) {
      clearInterval(id);
      genereFormu2();

    } else {
      pos_h=pos_h+4;
      elem.style.left = pos_h + "px";
    }
  }
};


//ielogotā lietotāja atribūtu tagu ģenerēšanas funkcija
function genereFormu3(){
//izveido jaunu formu, kur glabāsies saraksts
var forma=document.createElement("form");
//ieliek esošajā divīzijā lapā tikko ģenerēto
document.getElementById("atributi1").appendChild(forma);
//pievieno jaunajai formai atribūtus
forma.setAttribute("class", "form4");
forma.setAttribute("action", "../php/dzest.php");
forma.setAttribute("method", "post");
//izveido tagus un to atribūtus virsrakstam un sarakstam + kārtas numuram
var virsr2=document.createElement("span");
var sar2=document.createElement("p");
var nr2=document.createElement("span");
virsr2.setAttribute("class", "virsr3");
sar2.setAttribute("class", "sar3");
nr2.setAttribute("class", "virsr3");
// ievieto divīzijā
forma.appendChild(nr2);
forma.appendChild(virsr2);
forma.appendChild(sar2);
//izveido pogu ar atribūtiem ieraksta dzēšanai - poga aizvada uz lapām tālākām darbībām ar datubāzi
var poga4=document.createElement("input");
poga4.setAttribute("type", "submit");
poga4.setAttribute("class", "poga5");
poga4.setAttribute("name", "dzest");
poga4.setAttribute("value", "DELETE");
//pogu pievieno formai
forma.appendChild(poga4);
//virsraksta un saraksta tagiem tekstu no datubāzes pievieno
nr2.innerHTML="<br/>"+i+".";
virsr2.innerHTML=" "+virsraksts4;
sar2.innerHTML=apraksts4;
//id pievienot (bet neredzamu)
var id2=document.createElement("input");
id2.setAttribute("value", id);
id2.setAttribute("name", "id");
forma.appendChild(id2);
id2.setAttribute("type", "hidden");
}
