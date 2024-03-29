document.getElementById('message').innerHTML=`
    <style>
        #start{
            background-color:#000000;
            background-image:url(Logo.png);
            background-size:20%;
        }
        #message .message-container, #message .message-container button{
            display:flex; 
            justify-content:space-evenly;
            margin:0;
        }
        #message .message-container button{
            margin-top:1.5rem;
            margin-bottom:.5rem;
        }
    </style>
    <h2>Idioma/language</h2>
    <div class="message-container">
        <button class="bright" id="es">
            Español
        </button>
        <button class="bright" id="eng">
            English
        </button>
    </div>
`;
document.getElementById('eng').addEventListener('click',()=>{
    document.getElementById('start').style='display:none;';
});
document.getElementById('es').addEventListener('click',()=>{
    sessionStorage.setItem("lang","es");
    if(checkOrientation()){
        document.getElementById('message').innerHTML=`
            <p></p>
            <button class='bright' id="next">
                siguiente
            </button>
        `;
        startTutorial();
    }
});
function startTutorial(){
    var typeSpeed= 0;
    const typedOptionsIntro = {
        strings: [
            '<h2>Bienvenido al cotizador de proyectos de codemau5!</h2>Esta herramienta fue creada para que tengas una idea de cuánto cuesta tu proyecto. Solo tienes que decirnos qué cosas quieres que tenga y te damos un estimado. Nosotros lo recibimos por email y lo revisamos para darte la mejor opción.'
        ],
        typeSpeed: typeSpeed,
        startDelay: 100,
        loop: false,
        showCursor: true,
    };
    var typedIntro = new Typed('#message p', typedOptionsIntro);
    var i=0
    var typed=[];    
    let strings=[
        '<h2>como cotizar?</h2>Es muy facil usar esta herramienta interactiva, solo tienes que arrastrar los productos que estan a la izquierda (el vino, los quesos, etc) al carrito azul de la derecha, cuando toques un producto por primera vez, se te abrira una ventana con mas informacion de lo que representa el producto en una web, asi puedes conocer que estas agregando a tu proyecto y siempre veras en la pantalla (arriba del raton), el precio actualizado con los productos que llevas.',
        '<h2>Y ya que termine?</h2>Cuando termines de agregar tus productos aparecera un boton de enviar cotizacion asi el equipo de codemau5 podra valorar el proyecto, (mas del 90% de casos los precios son exactamente iguales).',
        '<h2>IMPORTANTE!</h2> Lo que mostramos aquí son solo una estimación de los precios. El costo final dependerá de los detalles y particularidades de cada proyecto. Así que no te preocupes si esto no es exactamente lo que buscabas, la cotización final siempre será proporcionada a través de un documento oficial preparado por codemau5. ¡Tranquilo, siempre buscaremos adaptarnos lo mas posible al valor estimado por esta herramienta y estamos para ayudarte a que tu proyecto sea todo un éxito!',
        '<h2>Listo?</h2> ya puedes cotizar tu proyecto!!!',
    ];
    let btnNext=document.querySelector('#next');
    btnNext.addEventListener('click', function() {
        if (!typedIntro.typingComplete) {
            return;
        }else{
            typedIntro.destroy();
        }
        if(i<strings.length){

            if(i>0){
                if (!typed[i-1].typingComplete) {
                    return;
                }else{
                    typed[i-1].destroy();
                }
            }
                
            const message = document.querySelector('#message');
            message.querySelector('p').textContent = '';
            
            const typedOptions = {
                strings: [strings[i]],
                typeSpeed: typeSpeed,
                startDelay: 0,
                loop: false,
                showCursor: true,
            };
            typed.push(new Typed('#message p', typedOptions));
            (i==strings.length-1) ?btnNext.innerHTML="finalizar":'';
            i++;
        }else{
            typed[i-1].destroy();
            checkOrientation();
        }
    });
}
function checkOrientation(){
    let windowWidth = window.innerWidth;
    let windowHeight = window.innerHeight;
    console.log(sessionStorage.getItem("lang"));
    if(sessionStorage.getItem("lang")==null){return false;}
    console.log(windowHeight);
    console.log(windowWidth)
    if(windowHeight > windowWidth){
        document.querySelector('#start').style="display:block;";
        document.getElementById('message').innerHTML=`
            <style>
                #start{
                    background-color:#000000;
                    background-image:url(Logo.png);
                    background-size:20%;
                }
                #message .message-container, #message .message-container button{
                    display:flex; 
                    justify-content:space-evenly;
                    margin:0;
                }
                #message .message-container button{
                    margin-top:1.5rem;
                    margin-bottom:.5rem;
                }
            </style>
            <h2>Por favor, gira tu celular en direccion horizontal</h2>

        `;
        document.querySelector('canvas').style="display:none;";
        return false;
    }else{
        document.querySelector('canvas').style="display:block;";
        document.querySelector('#start').style="display:none;";
        
    }
}

  
