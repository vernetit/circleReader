<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>circleReader</title>

  <script src="js/jquery.min.js"></script>
  <script src="js/underscore-min.js"></script>
  <script src="js/rainbow.js"></script>
  <script src="js/jscolor.min.js"></script>

  <style type="text/css">
  body{ background-color: black; color: green; }

      .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
           
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
  </style>

  <script>
    
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45359665-6', 'auto');
  ga('send', 'pageview');

  </script>
</head>
<body>

<input  type="button" value="start" onclick="start(0);" id="start-btn">
<input  type="button" value="loop" onclick="bLoop=!bLoop" id="loop-btn">
<!-- <input  type="button" value="stop" onclick="stopFlash();" id="stop-btn"> -->
<input type="button" value="clearTxt" onclick="$('#input1').val('');">
<input type="button" value="rndTxt" onclick="getRndTxt();" style="" id="rnd-btn">


<textarea rows="1" cols="20" style="margin-top: 5px;" id="input1">
Lechuzas mensajeras
HARRY Potter era, en muchos sentidos, un muchacho diferente. Por un lado, las vacaciones de verano le gustaban menos que cualquier otra época del año; y por otro, deseaba de verdad hacer los deberes, pero tenía que hacerlos a escondidas, muy entrada la noche. Y además, Harry Potter era un mago.
Era casi medianoche y estaba tumbado en la cama, boca abajo, tapado con las mantas hasta la cabeza, como en una tienda de campaña. En una mano tenía la linterna y, abierto sobre la almohada, había un libro grande, encuadernado en piel (Historia de la Magia, de Bathilda Bagshot). Harry recorría la página con la punta de su pluma de águila, con el entrecejo fruncido, buscando algo que le sirviera para su redacción sobre «La inutilidad de la quema de brujas en el siglo XIV».
La pluma se detuvo en la parte superior de un párrafo que podía serle útil. Harry se subió las gafas redondas, acercó la linterna al libro y leyó:
En la Edad Media, los no magos (comúnmente denominados muggles) sentían hacia la magia un especial temor, pero no eran muy duchos en reconocerla. En las raras ocasiones en que capturaban a un auténtico brujo o bruja, la quema carecía en absoluto de efecto. La bruja o el brujo realizaba un sencillo encantamiento para enfriar las llamas y luego fingía que se retorcía de dolor mientras disfrutaba del suave cosquilleo. A Wendelin la Hechicera le gustaba tanto ser quemada que se dejó capturar no menos de cuarenta y siete veces con distintos aspectos.
Harry se puso la pluma entre los dientes y buscó bajo la almohada el tintero y un rollo de pergamino. Lentamente y con mucho cuidado, destapó el tintero, mojó la pluma y comenzó a escribir, deteniéndose a escuchar de vez en cuando, porque si alguno de los Dursley, al pasar hacia el baño, oía el rasgar de la pluma, lo más probable era que lo encerraran bajo llave hasta el final del verano en la alacena que había debajo de las escaleras.
La familia Dursley, que vivía en el número 4 de Privet Drive, era el motivo de que Harry no pudiera tener nunca vacaciones de verano. Tío Vernon, tía Petunia y su hijo Dudley eran los únicos parientes vivos que tenía Harry. Eran muggles, y su actitud hacia la magia era muy medieval. En casa de los Dursley nunca se mencionaba a los difuntos padres de Harry, que habían sido brujos. Durante años, tía Petunia y tío Vernon habían albergado la esperanza de extirpar lo que Harry tenía de mago, teniéndolo bien sujeto. Les irritaba no haberlo logrado y vivían con el temor de que alguien pudiera descubrir que Harry había pasado la mayor parte de los últimos dos años en el Colegio Hogwarts de Magia y Hechicería. Lo único que podían hacer los Dursley aquellos días era guardar bajo llave los libros de hechizos, la varita mágica, el caldero y la escoba al inicio de las vacaciones de verano, y prohibirle que hablara con los vecinos.
Para Harry había representado un grave problema que le quitaran los libros, porque los profesores de Hogwarts le habían puesto muchos deberes para el verano. Uno de los trabajos menos agradables, sobre pociones para encoger, era para el profesor menos estimado por Harry, Snape, que estaría encantado de tener una excusa para castigar a Harry durante un mes. Así que, durante la primera semana de vacaciones, Harry aprovechó la oportunidad: mientras tío Vernon, tía Petunia y Dudley estaban en el jardín admirando el nuevo coche de la empresa de tío Vernon (en voz muy alta, para que el vecindario se enterara), Harry fue a la planta baja, forzó la cerradura de la alacena de debajo de las escaleras, cogió algunos libros y los escondió en su habitación. Mientras no dejara manchas de tinta en las sábanas, los Dursley no tendrían por qué enterarse de que aprovechaba las noches para estudiar magia.
Harry no quería problemas con sus tíos y menos en aquellos momentos, porque estaban enfadados con él, y todo porque cuando llevaba una semana de vacaciones había recibido una llamada telefónica de un compañero mago.
Ron Weasley, que era uno de los mejores amigos que Harry tenía en Hogwarts, procedía de una familia de magos. Esto significaba que sabía muchas cosas que Harry ignoraba, pero nunca había utilizado el teléfono.
Por desgracia, fue tío Vernon quien respondió:
—¿Diga?
Harry, que estaba en ese momento en la habitación, se quedó de piedra al oír que era Ron quien respondía.
—¿HOLA? ¿HOLA? ¿ME OYE? ¡QUISIERA HABLAR CON HARRY POTTER!
Ron daba tales gritos que tío Vernon dio un salto y alejó el teléfono de su oído por lo menos medio metro, mirándolo con furia y sorpresa.
—¿QUIÉN ES? —voceó en dirección al auricular—. ¿QUIÉN ES?
—¡RON WEASLEY! —gritó Ron a su vez, como si el tío Vernon y él estuvieran comunicándose desde los extremos de un campo de fútbol—. SOY UN AMIGO DE HARRY, DEL COLEGIO.
Los minúsculos ojos de tío Vernon se volvieron hacia Harry, que estaba inmovilizado.
—¡AQUÍ NO VIVE NINGÚN HARRY POTTER! —gritó tío Vernon, manteniendo el brazo estirado, como si temiera que el teléfono pudiera estallar—. ¡NO SÉ DE QUÉ COLEGIO ME HABLA! ¡NO VUELVA A LLAMAR AQUÍ! ¡NO SE ACERQUE A MI FAMILIA!
Colgó el teléfono como quien se desprende de una araña venenosa.
La bronca que siguió fue una de las peores que le habían echado.
—¡CÓMO TE ATREVES A DARLE ESTE NÚMERO A GENTE COMO… COMO TÚ! —le gritó tío Vernon, salpicándolo de saliva.
Ron, obviamente, comprendió que había puesto a Harry en un apuro, porque no volvió a llamar. La mejor amiga de Harry en Hogwarts, Hermione Granger, tampoco lo llamó. Harry se imaginaba que Ron le había dicho a Hermione que no lo llamara, lo cual era una pena, porque los padres de Hermione, la bruja más inteligente de la clase de Harry, eran muggles, y ella sabía muy bien cómo utilizar el teléfono, y probablemente habría tenido tacto suficiente para no revelar que estudiaba en Hogwarts.
De manera que Harry había permanecido cinco largas semanas sin tener noticia de sus amigos magos, y aquel verano estaba resultando casi tan desagradable como el anterior. Sólo había una pequeña mejora: después de jurar que no la usaría para enviar mensajes a ninguno de sus amigos, a Harry le habían permitido sacar de la jaula por las noches a su lechuza Hedwig. Tío Vernon había transigido debido al escándalo que armaba Hedwig cuando permanecía todo el tiempo encerrada.
Harry terminó de escribir sobre Wendelin la Hechicera e hizo una pausa para volver a escuchar. Sólo los ronquidos lejanos y ruidosos de su enorme primo Dudley rompían el silencio de la casa. Debía de ser muy tarde. A Harry le picaban los ojos de cansancio. Sería mejor terminar la redacción la noche siguiente…
Tapó el tintero, sacó una funda de almohada de debajo de la cama, metió dentro la linterna, la Historia de la Magia, la redacción, la pluma y el tintero, se levantó y lo escondió todo debajo de la cama, bajo una tabla del entarimado que estaba suelta. Se puso de pie, se estiró y miró la hora en la esfera luminosa del despertador de la mesilla de noche.
Era la una de la mañana. Harry se sobresaltó: hacía una hora que había cumplido trece años y no se había dado cuenta.
Harry aún era un muchacho diferente en otro aspecto: en el escaso entusiasmo con que aguardaba sus cumpleaños. Nunca había recibido una tarjeta de felicitación. Los Dursley habían pasado por alto sus dos últimos cumpleaños y no tenía ningún motivo para suponer que fueran a acordarse del siguiente.
Harry atravesó a oscuras la habitación, pasando junto a la gran jaula vacía de Hedwig, y llegó hasta la ventana, que estaba abierta. Se apoyó en el alféizar y notó con agrado en la cara, después del largo rato pasado bajo las mantas, el frescor de la noche. Hacía d
</textarea>
<input type="button" value="+" onclick=" _v=n('vel'); _v+=0.01; $('#vel').val(_v); " >
<input type="number" value="0.1" id="vel" style="width:40px">
<input type="button" value="-" onclick=" _v=n('vel'); _v-=0.01; $('#vel').val(_v); " >
<select id="velocityFlash" style="width: 75px;" onchange="calcularTiempo();">   
    <option value="50">50wpm</option>
    <option value="75">75wpm</option>
    <option value="100">100wpm</option>
    <option value="125">125wpm</option> 
    <option value="150"  selected>150wpm</option>
    <option value="155">155wpm</option>
    <option value="160">160wpm</option>
    <option value="165">165wpm</option>
    <option value="170">170wpm</option>
    <option value="175">175wpm</option>
    <option value="180">180wpm</option>
    <option value="185">185wpm</option>
    <option value="190">190wpm</option>
    <option value="195">195wpm</option>
    <option value="200">200wpm</option>
     <option value="205">205wpm</option>
    <option value="210">210wpm</option>
    <option value="215">215wpm</option>
    <option value="220">220wpm</option>
    <option value="225">225wpm</option>
     <option value="230">230wpm</option>
    <option value="235">235wpm</option>
    <option value="240">240wpm</option>
    <option value="245">245wpm</option>
    <option value="250">250wpm</option>
    <option value="275">275wpm</option>
    <option value="300">300wpm</option>
    <option value="325">325wpm</option>
    <option value="350">350wpm</option>
    <option value="375">375wpm</option>
    <option value="400">400wpm</option>
    <option value="425">425wpm</option>
    <option value="450">450wpm</option>
    <option value="475">475wpm</option>
    <option value="500">500wpm</option>
    <option value="525">525wpm</option>
    <option value="550">550wpm</option>
    <option value="575">575wpm</option>
    <option value="600">600wpm</option>
    <option value="625">625wpm</option>
    <option value="650">650wpm</option>
    <option value="675">675wpm</option>
    <option value="700">725wpm</option>
    <option value="725">700wpm</option>
    <option value="750">750wpm</option>
    <option value="775">775wpm</option>
    <option value="800">800wpm</option>
    <option value="825">825wpm</option>
    <option value="850">850wpm</option>
    <option value="875">875wpm</option>
    <option value="900">900wpm</option>
    <option value="925">925wpm</option>
    <option value="950">950wpm</option>
    <option value="975">975wpm</option>
    <option value="1000">1000wpm</option>
    <option value="1100">1100wpm</option>
    <option value="1200">1200wpm</option>
  </select>
<span style="display:none;">
  <select id="vel-3">
    <option value="0" selected>0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
  <select id="vel-10">
    <option value="0" selected>0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
</span>
<input type="button" value="+" onclick="/* agregarX=50; cw+=agregarX; canvas.width=cw; */ _radio+=20;">
[radio]
<input type="button" value="-" onclick="/* agregarX=-50; cw+=agregarX; canvas.width=cw; */ _radio-=20; " >
<div class="dropdown" style="display:none;">
  <input type="button" value="colors" onclick="bColors=!bColors; espectro();">
  <div class="dropdown-content" style="width: 70px !important;">
  c1:  <input class="jscolor" value="ffffff" id="c-1" onchange="espectro()">
  c2:   <input class="jscolor" value="3E296B" id="c-2"  onchange="espectro()">
  rango: <input type="number" value="40" id="rango" style="width:45px;" onchange="espectro()">

  </div>
</div>
&nbsp;
<input type="button" value="c2" onclick="bColors2=!bColors2; /*espectro();*/" style="display:none;">
<div class="dropdown" style="">
  <input type="button" value="-" onclick="font_size-=5;" >[font] <input type="button" value="+" onclick="font_size+=5;" >
  <div class="dropdown-content" style="width: 50px !important; display:none;">
    
   
  </div>
</div>
<span style="color: green;" id="cv"></span>
<a href="#" onclick="alert('contact:robertchalean@gmail.com')" style="color:green;">[?]</a>
<br><br><br><br><br><br><br><br>
<span style="display:none;">
  <center>
    <div id="container">
      <canvas id="my_canvas" width="1324px" height="40px" style="z-index: 1001; background-color : transparent;"></canvas>
    </div>
  </center>
</span>
<div id="screen">
  <div id="movie" style="position: fixed; top: 100px; left:0px;">
  </div>
</div>

<script type="text/javascript">

// var rainbow = new Rainbow();
// rainbow.setSpectrum('#ffffff', '#3E296B');
// rainbow.setNumberRange(1, 20); 
// console.log(rainbow.colourAt(1)); 

var bColors2=0;
var rainbow;
var _rango=40;
_radio=300;

font_size=30;

function espectro(){
  _rango=n("rango");
  //console.log("espectro")
  rainbow = new Rainbow();
  rainbow.setSpectrum('#'+$('#c-1').val(), '#'+$('#c-2').val() );
  rainbow.setNumberRange(1, _rango); 
} 

function n(x){ return parseFloat($("#"+x).val()); }
  
// var canvas = document.getElementById("my_canvas")
// var c = canvas.getContext("2d")

cw=1200;


agregarX=0;

var kill,kill
bColors=0;
bOk=0;
Ok=0;
_wpm=0;


var bStart=0, cadena, posicion, cantidad, indexColors=0;
var bLoop=1;
_w=$(window).width();
_h=$(window).height();
c_x=_w/2;
c_y=_h/2;
_tiempo=360;

function start(x){

  if(x==0){
    bStart=!bStart

    if(!bStart){

      $("#start-btn").val("start")


      clearTimeout(kill1); clearTimeout(kill2); c.fillStyle = "black"; c.fillRect(0,0,cw,40);

      return;
    }

    $("#start-btn").val("stop")

    var limpia = "";
    resultados = "";
    cantidadPalabras = 0;

    str = $("#input1").val();

    limpia = str.split("\n").join(" ");
    limpia = limpia.split("\t").join(" ");
    limpia = limpia.split("\r").join(" ");
    limpia = limpia.split(",").join(" ");
    limpia = limpia.split(".").join(" ");
    limpia = limpia.split(")").join(" ");
    limpia = limpia.split("(").join(" ");
    limpia = limpia.split(";").join(" ");
    limpia = limpia.split("-").join(" ");

    limpia = limpia.split("   ").join(" ");
    limpia = limpia.split("  ").join(" ");

    str = limpia;

    cadena=str.split(" ");
    cadena.unshift(" ");
    cantidad=cadena.length;
    posicion = 0;

    _tiempo=360;

  }
  




  t_ini = Date.now();

  init(0);
  init1(0);
  //setTimout(function(){ init1(0) } );

  //setTimeout(function(){start(1)},n("vel"))
}

var x1,currenWord,plus,multiplo=1;
function init(x){

  if(x==0){

    // x1=cw-100;
    currenWord=cadena[posicion];
    tam=currenWord.length;
    // plus=0;
    // if(tam<=3) plus=+n("vel-3")
    // if(tam>=10) plus=-n("vel-3")
    //multiplo=1;

  }

  //console.log(currenWord)
  //console.log(x1)

  // c.fillStyle = "black"; c.fillRect(0,0,cw,40);
  
  font= font_size + "px";

  // if(bColors){

  //   // if(indexColors>=colors.length) indexColors=0;
  //   // _c=colors[indexColors]; indexColors++;

    
  //   //console.log(rainbow.colourAt(1));
    
  //   _t=cw/_rango;
  //   _t1=cw%_rango;

  //   myPos=0;
  //   for(__i=0;__i<_rango;__i++){

  //     if(x1>=__i*_t && x1<=(__i*_t)+_t ) break;
  //   }

  //   //console.log(__i)

  //   _c="#"+rainbow.colourAt(__i+1);

    

  // }else{

  //   _c="green";
   

  // }

  // if(bColors2){
  //   if(indexColors>=colors.length) indexColors=0;
  //   _c=colors[indexColors]; indexColors++;

  // }
  
  //c.fillText(currenWord,x1,30);


  // x1-=((n("vel")+plus)*multiplo)

  // if(x1<=-10){ 

  //   t_fin = Date.now();
  //   t_dif = t_fin - t_ini;
  //   wpm = Math.round(60000/t_dif);
  //   multiplo=-1;

  //   //console.log(t_dif)

  //   /*calcularTiempo();*/

  //   ///*posicion++;*/ /*start(1);*/ return; 

  // }
  // if(x1>=cw-100){

  //   multiplo=1;

  // }

  _y1=c_y+_radio*Math.sin(_tiempo)
  _x1=c_x+_radio*Math.cos(_tiempo)

  $("#movie").css("left",_x1+"px")
  $("#movie").css("top",_y1+"px")
  $("#movie").css("font-size",font_size+"px")
  
 // $("#movie").css("color",_c)
  $("#movie").html(currenWord)

  _tiempo+=n("vel");
  //_tiempo+=n();
  //console.log(_tiempo);

  if(_tiempo<=000000) _tiempo=360;  


  kill1=setTimeout(function(){init(1);},15)
}

var kill2;

function init1(x){

  if(x==0){

  }

  if(!bStart) return;

  posicion++;
  currenWord=cadena[posicion];
  calcularTiempo()

   if(posicion>=cantidad){
    if(bLoop){
      posicion=0;

    }else{
      return;

    }
    
  }

  //_wpm=n("velocityFlash");

  killI2=setTimeout(function(){ init1(1) },  ( 60000/ n("velocityFlash") ) * 1   );


  // kill2=setTimeout(function(){init1(1);},1)

}

function calcularTiempo(){
  
  tiempo = ( cantidad - posicion ) * ( 60000/ n("velocityFlash") );

  poner = `${posicion+1}/${cantidad} - ${getDuration(tiempo)} <!--${wpm}wpm-->`;

  $("#cv").html(poner);

  
}

var t_ini;
var t_fin;
var t_dif;
var wpm;

var getDuration = function(millis){
  var dur = {};
  var units = [
      {label:"millis",    mod:1000},
      {label:"seconds",   mod:60},
      {label:"minutes",   mod:60},
      {label:"hours",     mod:24},
      {label:"days",      mod:31}
  ];
  // calculate the individual unit values...
  units.forEach(function(u){
      millis = (millis - (dur[u.label] = (millis % u.mod))) / u.mod;
  });
  // convert object to a string representation...
  var nonZero = function(u){ return dur[u.label]; };
  dur.toString = function(){
      return units
          .reverse()
          .filter(nonZero)
          .map(function(u){
              return dur[u.label] + " " + (dur[u.label]==1?u.label.slice(0,-1):u.label);
          })
          .join(', ');
  };

  /*
  console.log(dur);
  x = dur.split(",");
  poner = "";
  for(i=0;i<x.length;i++){
    if(x[i].indexOf("millis")!=1){
      continue;
    }
    poner += x[i];

  }*/

  //return dur;
  return dur.hours+":"+dur.minutes+":"+dur.seconds;//+":"+dur.millis;
};

var contadorRnd;
function getRndTxt(){
    contadorRnd++;
    if(contadorRnd>=5)
      return;

    $.ajax({url: "http://leerencolores.appspot.com/multiReader2?rnd=1&libro=aleatory&cPage=aleatory", success: function(result){
        $("#input1").val(result);
       // mode=1; bPrev=0; bNext=0;  play();
       
    }});
}

var abc1  =  {

  'a' : 'rgb(0,0,180)','A' : 'rgb(0,0,180)','á' : 'rgb(0,0,180)','Á' : 'rgb(0,0,180)','b' : 'rgb(175,13,102)','B' : 'rgb(175,13,102)','c' : 'rgb(146,248,70)','C' : 'rgb(146,248,70)','d' : 'rgb(255,200,47)','D' : 'rgb(255,200,47)','e' : 'rgb(255,118,0)','E' : 'rgb(255,118,0)','é' : 'rgb(255,118,0)','É' : 'rgb(255,118,0)','f' : 'rgb(255,152,213)','F' : 'rgb(255,152,213)','g' : 'rgb(235,235,222)','G' : 'rgb(235,235,222)','h' : 'rgb(100,100,100)','H' : 'rgb(100,100,100)','i' : 'rgb(255,255,0)','I' : 'rgb(255,255,0)','í' : 'rgb(255,255,0)','Í' : 'rgb(255,255,0)','j' : 'rgb(255,255,150)','J' : 'rgb(255,255,150)','k' : 'rgb(55,19,112) ','K' : 'rgb(55,19,112) ','l' : 'rgb(202,62,94)','L' : 'rgb(202,62,94)','m' : 'rgb(205,145,63)','M' : 'rgb(205,145,63)','n' : 'rgb(12,75,100)','N' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','o' : 'rgb(255,0,0)','O' : 'rgb(255,0,0)','ó' : 'rgb(255,0,0)','Ó' : 'rgb(255,0,0)','p' : 'rgb(175,155,50)','P' : 'rgb(175,155,50)','q' : 'rgb(185,185,185)','Q' : 'rgb(185,185,185)','r' : 'rgb(37,70,25)','R' : 'rgb(37,70,25)','s' : 'rgb(121,33,135)','S' : 'rgb(121,33,135)','t' : 'rgb(83,140,208)','T' : 'rgb(83,140,208)','u' : 'rgb(0,154,37)','U' : 'rgb(0,154,37)','ú' : 'rgb(0,154,37)','Ú' : 'rgb(0,154,37)','v' : 'rgb(178,220,205)','V' : 'rgb(178,220,205)','w' : 'rgb(169,34,0)','W' : 'rgb(169,34,0)','x' : 'rgb(0,0,74)','X' : 'rgb(0,0,74)','y' : 'rgb(175,200,74)','Y' : 'rgb(175,200,74)','z' : 'rgb(63,25,12)','Z' : 'rgb(63,25,12)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(146,248,70)','2' : 'rgb(146,248,70)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'   
    
};

colors=[];

_.each(abc1, function(x){ colors.push(x); } );
colors=_.uniq(colors);

<? if(isset($_GET["en"])){ ?>  

textoEn = `I bring my cell phone to bed and I can not sleep well. I can not stop procrastinating. I want to get up earlier but I lack the will. Im not so charismatic with the people at work. I can not lose weight because I like junk food
`;

$("#input1").val(textoEn);


<? } ?>

//start(0)

</script>
</body>
</html>