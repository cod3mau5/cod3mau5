<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>:root {
    --penguin-size: 400px;
    --penguin-skin: yellow;
    --penguin-belly: yellow;
    --penguin-beak: orange;
  }
  .penguin {
    position: relative;
    margin: auto;
    display: block;
    margin-top: 2%;
    width: var(--penguin-size, 300px);
    height: var(--penguin-size, 300px);
  }

  .right-cheek {
    top: 15%;
    left: 35%;
    width: 60%;
    height: 70%;
    border-radius: 70% 70% 60% 60%;
  }

  .left-cheek {
    top: 15%;
    left: 5%;
    width: 60%;
    height: 70%;
    border-radius: 70% 70% 60% 60%;
  }

  .belly {
    top: 60%;
    left: 2.5%;
    background: var(--penguin-belly, white);
    width: 95%;
    height: 100%;
    border-radius: 120% 120% 100% 100%;
  }

  .penguin-top {
    top: 10%;
    left: 25%;
    background: var(--penguin-skin, gray);
    width: 50%;
    height: 45%;
    border-radius: 70% 70% 60% 60%;
  }

  .penguin-bottom {
    top: 40%;
    left: 23.5%;
    background: var(--penguin-skin, gray);
    width: 53%;
    height: 45%;
    border-radius: 70% 70% 100% 100%;
  }

  .right-hand {
    top: 5%;
    left: 25%;
    background: var(--penguin-skin, black);
    width: 30%;
    height: 60%;
    border-radius: 30% 30% 120% 30%;
    transform: rotate(130deg);
    z-index: -1;
    animation-duration: 3s;
    animation-name: wave;
    animation-iteration-count: infinite;
    transform-origin:0% 0%;
    animation-timing-function: linear;
  }

  @keyframes wave {
      10% {
        transform: rotate(110deg);
      }
      20% {
        transform: rotate(130deg);
      }
      30% {
        transform: rotate(110deg);
      }
      40% {
        transform: rotate(130deg);
      }
    }
    @keyframes speak {
      10% {
        transform: translateY(3px);
      }
      20% {
        transform: translateY(-3px);
      }
      30% {
        transform: translateY(3px);
      }
      40% {
        transform: translateY(-3px);
      }
      50% {
        transform: translateY(3px);
      }
      60% {
        transform: translateY(-3px);
      }
      70% {
        transform: translateY(3px);
      }
    }

    .left-hand {
        top: 0%;
        left: 75%;
        background: var(--penguin-skin, gray);
        width: 30%;
        height: 60%;
        border-radius: 30% 30% 30% 120%;
        transform: rotate(-45deg);
        z-index: -1;
    }

    .right-feet {
        top: 85%;
        left: 60%;
        background: var(--penguin-beak, orange);
        width: 15%;
        height: 30%;
        border-radius: 50% 50% 50% 50%;
        transform: rotate(-80deg);
        z-index: -2222;
    }

    .left-feet {
        top: 85%;
        left: 25%;
        background: var(--penguin-beak, orange);
        width: 15%;
        height: 30%;
        border-radius: 50% 50% 50% 50%;
        transform: rotate(80deg);
        z-index: -2222;
    }

    .right-eye {
        top: 40%;
        left: 60%;
        background: black;
        width: 15%;
        height: 17%;
        border-radius: 50%;
    }

    .left-eye {
        top: 40%;
        left: 25%;
        background: black;
        width: 15%;
        height: 17%;
        border-radius: 50%;
    }
    .sparkle  {
        top: 20%;
        left: 15%;
        background: white;
        width: 35%;
        height: 35%;
        border-radius: 50%;
    }

    .beak-top {
        top: 60%;
        left: 40%;
        background: var(--penguin-beak, orange);
        width: 20%;
        height: 10%;
        border-radius: 50%;
    }

    .beak-bottom {
        top: 65%;
        left: 42%;
        background: var(--penguin-beak, orange);
        width: 16%;
        height: 10%;
        border-radius: 50%;
        animation-duration: 3s;
        animation-name: speak;
        animation-iteration-count: infinite;
        transform-origin:0% 0%;
    }

    body {
        background:#659dbd;
    }

    .penguin * {
        position: absolute;
    }



    .button {
        padding: 10px;
        color: #fff;
        border: 2px solid violet;
        border-radius: 20px/50px;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease-out;
        margin: 0 auto;
        display: block;
        text-align: center;
        width: 131px;
        font-weight: bolder;
        font-size: 1.8rem;
    }
    .button:hover {
        background: violet;
    }


    .overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
    }
    .overlay:target {
        visibility: visible;
        opacity: 1;
    }

    .popup {
        margin: 30% auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        width: 30%;
        position: relative;
        transition: all 5s ease-in-out;
    }

    .popup h2 {
        margin-top: 0;
        color: #333;
        font-family: Verdana, Geneva;
    }
    .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }
    .popup .close:hover {
        color: #06D85F;
    }
    .popup .content {
        max-height: 30%;
        overflow: auto;
    }

    @media screen and (max-width: 700px){
        .box{
            width: 70%;
        }
        .popup{
            width: 70%;
            margin: 105% auto;
        }
    }
    .next {
        display: block;
    border-radius: 5px;
    background-color: violet;
    color: #FFFFFF;
    text-align: center;
    font-size: 16px;
    padding: 4px;
    width: 120px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    font-weight: bold;
    font-family: Verdana;
    border: solid black 2px;
    float: right;
  }
  
  .next span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  
  
  .next:hover span {
    letter-spacing: 1rem;
    padding-left: 15px;
  }



  #player {
    position: absolute;
    width: 300px;
    bottom: 2%;
    left: 10%;
  background: blueviolet;
  border-radius: 8px;
  box-shadow: 
    0 4px 28px #F48FB1, 
    0 4px 10px #F48FB1;
  overflow: hidden;
}


/*
===================
===================
Track
===================
===================
*/
#track {
  width: 100%;
  height: 6px;
  background: #26A69A;
  overflow: hidden;
  cursor: pointer;
}

#progress {
  width: 0%;
  height: 100%;
  background: #009688;
}


/*
===================
===================
Icons
===================
===================
*/
#controls {
  padding: 32px 0;
  text-align: center;
  vertical-align: middle;
}

#controls > div {
  vertical-align: middle;
}

.icon {
  display: inline-block;
  position: relative;
  margin: 4px 12px;
  cursor: pointer;
}

/* Buttons (Play) */
#play {
  position: relative;
  border-style: solid;
  border-width: 10px 0 10px 16px;
  border-color: transparent transparent transparent #26A69A;
}

#play:hover {
  border-color: transparent transparent transparent #009688;
}

/* Buttons (Pause) */
#pause {
  position: relative;
  width: 16px;
  height: 18px;
}

#pause:before {
  content: "";
  position: absolute;
  width: 6px;
  height: 18px;
  top: 0;
  left: 0;
  background: #26A69A;
}

#pause:after {
  content: "";
  position: absolute;
  width: 6px;
  height: 18px;
  top: 0;
  right: 0;
  background: #26A69A;
}

#pause:hover:before,
#pause:hover:after {
  background: #009688;
}

/* Buttons (stop) */
#stop {
  width: 18px;
  height: 18px;
  background: #26A69A;
}

#stop:hover {
  background: #009688;
}

/* Buttons (Mute) */
#mute {
  position: relative;
  border-style: solid;
  border-width: 10px 14px 10px 0;
  border-color: transparent #26A69A transparent transparent;
}

#mute:after {
  content: "";
  position: absolute;
  width: 8px;
  height: 8px;
  top: 50%;
  margin-top: -4px;
  right: -8px;
  background: #26A69A;
}

#mute:before {
  content: "";
  position: absolute;
  width: 4px;
  height: 8px;
  top: 50%;
  margin-top: -4px;
  left: 16px;
  background: #26A69A;
  border-radius: 0 100% 100% 0;
}

#mute:hover,
.mute {
  border-color: transparent #009688 transparent transparent !important;
}

#mute:hover:after,
.mute:after {
  background: #009688 !important;
}

#mute:hover:before,
.mute:before {
  content: none !important;
}

/* Buttons (Volume) */
#volume {
  display: inline-block;
  width: 60px;
  height: 6px;
  margin-right: -60px;
  background: #26A69A;
  visibility: hidden;
  cursor: pointer;
}

#level {
  width: 100%;
  height: 100%;
  background: #009688;
}

#controls:hover #volume {
  visibility: visible;
}
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    
    <div class="penguin">
        <div class="penguin-bottom">
            <div class="right-hand"></div>
            <div class="left-hand"></div>
            <div class="right-feet"></div>
            <div class="left-feet"></div>
        </div>
        <div class="penguin-top">
            <div class="right-cheek"></div>
            <div class="left-cheek"></div>
            <div class="belly"></div>
            <div class="right-eye">
            <div class="sparkle"></div>
            </div>
            <div class="left-eye">
            <div class="sparkle"></div>
            </div>
            <div class="beak-top"></div>
            <div class="beak-bottom"></div>
        </div>
    </div>
    <a class="button" href="#popup1">habla conmigo</a>
    <div id="popup1" class="overlay">
        <div class="popup">
            <h2>Hola mi cielo</h2>
            <div class="content">
                Gracias por entrar a esta pagina que te dedique!
            </div>
            <button class="next">Siguente</button>
        </div>
    </div>
    <audio id="audiotrack" preload="auto" src="mp3/The_Smiths-There_Is_A Light_That_Never_Goes_Out.mp3">

        </audio>
        <div id="player">
            <!-- Progress Bar -->
            <div id="track">
                <div id="progress"></div>
            </div>

            <!-- Controls -->
            <div id="controls">
                <div class="icon" id="play"></div>
                <div class="icon" id="pause"></div>
                <div class="icon" id="stop"></div>
                <div class="icon" id="mute"></div>

                <div id="volume">
                <div id="level"></div>
                </div>
            </div>
        </div>
<script>

//Elements:
var $source = $("#audiotrack")[0],
    $track = $("#track"),
    $progress = $("#progress"),
    $play = $("#play"),
    $pause = $("#pause"),
    $playPause = $("#play, #pause"),
    $stop = $("#stop"),
    $mute = $("#mute"),
    $volume = $("#volume"),
    $level = $("#level");

//Vars:
var totalTime,
    timeBar,
    newTime,
    volumeBar,
    newVolume,
    cursorX;

var interval = null;

$(document).ready(function(){

  audioData = [
      {
        name: "Genius ft. Sia, Diplo, Labrinth",
        artist: "Sia",
        src:
          "mp3/The_Smiths-There_Is_A Light_That_Never_Goes_Out.mp3"
      },
      {
        name: "Gimme Gimme",
        artist: "INNA",
        src:
          "mp3/Yixs98-Love.mp3"
      },
      {
        name: "'TMM TMM' prod. by Miksu",
        artist: "Summer Cem",
        src:
          "mp3/Fuck_Love.mp3"
      }
    ];
    $('.button').click(()=>{
        $source.play();
    });
var texto=[
    'Amor,',
    'te amo!',
    'mucho!!!!!!!!!!!!!!!!',
    'eres el amor de mi vida...',
    'eres el motor principal y la motivacion de mi vida, eres mi Reina,',
    'la que jamas imagine que llegara a mi vida',
    'ahora que te tengo parece que me empeño en cagarla...',
    'y luego pienso en que te voy a perder si haberte tenido en mis brasos',
    'y se me apaga el corazon se me apaga el motor mi motivación mi todo',
    'pues mi universo se llama Daniela Soledad Hernandez',
    'pero sabes algo?',
    '...',
    'And if a ten-ton truck, Kills the both of us, To die by your side',
    'Well, the pleasure, the privilege is mine',
    'bueno eso no xd solo se que la estas ecuchando y que me gusto esa parte de la cancion',
    'pero lo que te quiero contunuar diciendo es:',
    'Yo no niego que me fui con serafin sin avisar,',
    'por eso te pido perdon mi cielo',
    'solo quiero que sepas que te amo mucho!',
    'siempre pienso en ti amor!',
    'SIEMPRE!, no sabes que tan aderida estas en mi cabecita',
    'va a ser muy dificil dejar de pensar en ti',
    'cada ves que veo el cielo, y pienso en ti me pongo a pensar en como estarás',
    'y yo jamas quisiera dejar de estar a tu lado cielo, Daniela, mi TODO!',
    'yo amor... no soy alguien  que se sepa expresar y si yo la cago al irme con mis amigos y eso es algo que tengo que pagar,',
    'y pago porque a mi me lastima saber que te hago mal',
    'saber e imaginarme que no estaras en mi vida...',
    'yo te necesito,',
    'Baby I need you in my life',
    "Please, bae, don't go switchin' sides, switchin' sides",
    'bebe quiero que sepas que yo jamas tirare este amor que te tengo, me tienes loco y te amo te deseo te comprendo y te esperare todo el tiempo que sea necesario',
    'yo podria hablar de ti de lo hermosa y PERFECTA que eres, y a todos les cuento de ti a donde voy!',
    'con orgullo puedo decir que:',
    'Daniela es mi amor..',
    'solo con ella vivo la felicidad,',
    'yo se que nunca nadie mas podria amar,',
    'porque la quiero de verdad',
    'si un dia me faltas tuuuuu',
    'que dios me  ayude a morir',
    'ya que no volveria a ser en esta vida feliizz',
    'sin ti Dani, si estoy viviendo por ti',
    ":')",
    'esta cancion tambeien te la dedico amor junto con este script lo hice con todo el amor y espero sea de calidad.',
    'y tambien quiero que sepas que..',
    '...',
    'hermosas chicas',
    'alrededor del mundo',
    'Podría estar persiguiéndolas, pero mi tiempo estaría desperdiciado',
    'porque ellas no tienen lo que tú, amoor',
    'nada de lo tuyo, amooor',
    'But you always steal the show' ,
    'And just like that, girl, you got me froze',
    'Like a Nintendo 64', 
    'If you never knew, well, now you know',
    'te AMO cielo',
    'quiero quidarte para toda la vida..',
    'Si tan sólo hubiera otra manera de hacer esto',
    'Porque parece un asesinato',
    'Hacer a tu corazón pasar por esto',
    'Sé que siempre dije que no te haría daño',
    'Bueno esta es la última última vez que lo haré',
    "But I know that I'll be happier",
    'And I know you will too',
    "Said, I know that I'll be happier",
    'And I know you will too',
    'Eveeentually... Eventualyyyy!!',
    'hay algo que tengo que decirte...',
    'Oh Dani tu me tiene loco',
    'Cayendo al infierno de a poco',
    'Mami el amor e un arte',
    'No quiero que falte',
    "No quiero corazone' rotos",
    'Tus ojitos me pierden una y otra vez',
    'Entregarte to mi ki cuando me beses',
    "Me tiene hablando con dios que no me dejes",
    'Y diciéndole a la luna que regreses',
    'AMOR, te dedico este script con mucho amor.',
    'es mi forma de hacerte el amor por ahora..',
    'En las noches no duermo porque quiero pensarte',
    'Dani no te saco de mi mente eres algo aparte',
    'Lastima que la noche nos haga tan distantes',
    'Le hablo toa las noches a las estrellas',
    'Pidiendo que estés conmigo',
    'AMOR...',
    'Daniela, yo te amo de verdad mi ruquita...',
    'si es infinito nuestro amor, no cabe em cajas de cristal',
    'para nuestro cielo terrenal',
    'Te amo y te amo y te amo amor no me importa decirlo así.',
    'sos muy especial para mi daniela, yo quiero contigo, lloro mientras te escribo esto',
    'eres mi todo',
    'Cuando te veo sonreir, todo mi ser rie con vos.'
];
var pos=0;
$('.next').click(()=>{
  console.log('la posicion es: '+pos);
  if(pos==15){
    $('#audiotrack').attr('src','mp3/Fuck_Love.mp3');
    $source = $("#audiotrack")[0];
    $source.play();
  }
  if(pos==32){
    $('#audiotrack').attr('src',"mp3/DANI_ES_MI_AMOR.mp3");
    $source = $("#audiotrack")[0];
    $source.play();
  }
  if(pos==44){
    $('#audiotrack').attr('src',"mp3/B.o.B-Nothin_On_You.mp3");
    $source = $("#audiotrack")[0];
    $source.play();
  }
  if(pos==54){
    $('#audiotrack').attr('src',"mp3/Tame_Impala-Eventually.mp3");
    $source = $("#audiotrack")[0];
    $source.play();
  }
  if(pos==66){
    $('#audiotrack').attr('src',"mp3/Yixs98-Love.mp3");
    $source = $("#audiotrack")[0];
    $source.play();
  }
  if(pos==83){
    $('#audiotrack').attr('src',"mp3/Rompecabezas_de_amor.mp3");
    $source = $("#audiotrack")[0];
    $source.play();
  }
    $('.content').html(texto[pos]);
    pos++;
});

//Track:

//Progress bar:
function barState(){
  if (!$source.ended){
    var totalTime = parseInt($source.currentTime / $source.duration * 100);
    $progress.css({"width": totalTime+1 + "%"});
  }
  else if ($source.ended){
    $play.show();
    $pause.hide();
    clearInterval(interval);
  };
  console.log("playing...");
};

//Event trigger:
$track.click(function(e){
  if (!$source.paused){
    var timeBar = $track.width();
    var cursorX = e.pageX - $track.offset().left;
    var newTime = cursorX * $source.duration / timeBar;
    $source.currentTime = newTime;
    $progress.css({"width": cursorX + "%"});
  };
});


//Button (Play-Pause):

$("#pause").hide();

function playPause(){
  if ($source.paused){
    $source.play();
    $pause.show();
    $play.hide();
    interval = setInterval(barState, 50); //Active progress bar.
    console.log("play");
  }
  else {
    $source.pause();
    $play.show();
    $pause.hide();
    clearInterval(interval);
    console.log("pause");
  };
};

$playPause.click(function(){
  playPause();
});


//Button (Stop):
function stop(){
  $source.pause();
  $source.currentTime = 0;
  $progress.css({"width": "0%"});
  $play.show();
  $pause.hide();
  clearInterval(interval);
};

$stop.click(function(){
  stop();
});


//Button (Mute):
function mute(){
  if ($source.muted){
    $source.muted = false;
    $mute.removeClass("mute");
    console.log("soundOFF");
  }
  else {
    $source.muted = true;
    $mute.addClass("mute");
    console.log("soundON");
  };
};

$mute.click(function(){
  mute();
});


//Volume bar:
$volume.click(function(e){
  var volumeBar = $volume.width();
  var cursorX = e.pageX - $volume.offset().left;
  var newVolume = cursorX / volumeBar;
  $source.volume = newVolume;
  $level.css({"width": cursorX + "px"});
  $source.muted = false;
  $mute.removeClass("mute");
});


}); //Document ready end.
    </script>


</body>
</html>