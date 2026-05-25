<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <meta name="author" content="Ecoturismo los tuxtlas, Turismo comunitario en los tuxtlas, Turismo Comunitario en la región de Los Tuxtlas, turismo en los tuxtlas, turismo comunitario itssat">
  <meta name="description" content="Descubre el turismo comunitario en la región de Los Tuxtlas, Veracruz. Vive experiencias únicas en centros ecoturísticos como Lago El Apompal, Roca Partida, Benito Juárez, Las Margaritas, Laguna del Ostión y más destinos naturales.">
  <meta name="keywords" content="ecoturismo los tuxtlas, ecoturismo en la región de los Tuxtlas, centros ecoturisticos en los tuxtlas, centros ecoturisticos en la región de los tuxtlas, turismo comunitario de los tuxtlas, Los Tuxtlas Veracruz, que visitar en los Tuxtlas, que visitar en la región de los Tuxtlas, ecoturismo, Apompal, Roca Partida, Benito Juárez, Arrecifes, Cabañas Encantadas, Kan Tasejkan, Laguna del Ostión, Las Margaritas, naturaleza de los tuxtlas, aventura, cascadas, playas, senderismo, kayak, laguna de catemaco, cabañas, artesanias, comida típica, hospedaje, guias turísticas en los tuxtlas, guias certificadas en los tuxtlas.">


  <link rel="preload" as="image" href="{{ asset('images/apompal/portada.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/arrecifes/portada.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/benito-juarez/portada.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/benito-juarez/horizontal.jpg') }}">

    <!-- 
  <link rel="preload" as="image" href="{{ asset('images/cabanas-encantadas/portada.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/cascadas-encantadas/portada.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/kan-tasejkan/portada.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/laguna-del-ostion/portada.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/las-margaritas/portada.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/rancho-dona-elia/portada.jpg') }}">
-->

  <!-- CSS -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <!-- JavaScript -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <!-- CSS estilos de esta página -->
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">

  <!-- Animate.css bounce -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- WOW.js bounce -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <!-- Counter -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-latest.js"></script>

  

  <!-- Icono pestaña -->
  <link rel="icon" href="{{ asset('images/favicon/tecnm.ico') }}"/>
  <!-- Titulo pestaña -->
  <title>Ecoturismo los Tuxtlas – ¡Conoce la Región de los Tuxtlas!</title>


</head>


<body>



@include('partials.header')


<!---carrusel carreras--->
<div class="carrusel_carreras js-flickity"
  data-flickity-options='{
    "cellAlign": "left", 
    "contain": true, 
    "wrapAround": true, 
    "autoPlay": 5000, 
    "pauseAutoPlayOnHover": false, 
    "prevNextButtons": true, 
    "selectedAttraction": 0.01, 
    "friction": 0.2 
  }'> 

  
  <div class="carrusel_portadas">
    <a href="{{ route('apompal') }}">
      <img src="{{ asset('images/apompal/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[1]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

  <div class="carrusel_portadas">
    <a href="{{ route('arrecifes') }}">
      <img src="{{ asset('images/arrecifes/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[2]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

  <div class="carrusel_portadas">
    <a href="{{ route('benitojuarez') }}">
      <img src="{{ asset('images/benito-juarez/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[3]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>
  
  <div class="carrusel_portadas">
    <a href="{{ route('cabanasencantadas') }}">
      <img src="{{ asset('images/cabanas-encantadas/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[4]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

  <div class="carrusel_portadas">
    <a href="{{ route('cascadasencantadas') }}">
      <img src="{{ asset('images/cascadas-encantadas/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[5]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>
 
 <div class="carrusel_portadas">
    <a href="{{ route('ceytaks') }}">
      <img src="{{ asset('images/noimage.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[6]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

 <div class="carrusel_portadas">
    <a href="{{ route('elmirador') }}">
      <img src="{{ asset('images/noimage.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[7]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

  <div class="carrusel_portadas">
    <a href="{{ route('jomxuk') }}">
      <img src="{{ asset('images/jomxuk/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[8]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

  <div class="carrusel_portadas">
    <a href="{{ route('kantasejkan') }}">
      <img src="{{ asset('images/kan-tasejkan/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[9]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

  <div class="carrusel_portadas">
    <a href="{{ route('lagunadelostion') }}">
      <img src="{{ asset('images/laguna-del-ostion/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[10]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

  <div class="carrusel_portadas">
    <a href="{{ route('lasmargaritas') }}">
      <img src="{{ asset('images/las-margaritas/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[11]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

  <div class="carrusel_portadas">
    <a href="{{ route('manglaressontecomapan') }}">
      <img src="{{ asset('images/manglares-sontecomapan/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[12]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

  <div class="carrusel_portadas">
    <a href="{{ route('ranchodonaelia') }}">
      <img src="{{ asset('images/rancho-dona-elia/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[13]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

  <div class="carrusel_portadas">
    <a href="{{ route('rocapartida') }}">
      <img src="{{ asset('images/roca-partida/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[14]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

 <div class="carrusel_portadas">
    <a href="{{ route('selvaelmarinero') }}">
      <img src="{{ asset('images/selva-el-marinero/portada.jpg') }}">
      <div class="titulo_carrera_telefono">{{ $centros[15]->nomcentur }}</div>
      <br>
      <button class="btn-sobre-imagen">Conocer más...</button>
    </a>
  </div>

</div><!---fin carrusel--->
<div class="flickity-page-dots"></div>
<!---fin carrusel--->


<br><br><br> 

<!---Contador vacacionistas--->
<div class="visitantes">
  Más de  <div class="counter">185,000</div>
</div>
<div class="visitantes">visitantes en el último año...</div>


<!--appear scroll-->
<div id="content">

  <div class="imagen_full">
      <div class="texto-sobre-full">
        @include('partials.conecta-con-naturaleza')
      </div>
  </div>

</div>






<br>


<!--Menu centros ecoturisticos-->
<div style="text-align: center;">
  <div class="titulo-centros">Centros Ecoturísticos</div>
  <span style="font-size: 180%">en la región de <b>Los Tuxtlas.</b></span>
</div><!--fin agrupador centros ecoturisticos  -->

<br>

<!---bounce left--->
<div class="wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
  <div class="descripcion_centros"> Estos lugares ofrecen alojamiento en cabañas, sanitarios, espacio para camping, restaurantes, artesanías y <b>paisajes naturales inolvidables.</b></div>
</div><!-- end boounce -->


<!--inicio agrupador centros turitticos -->
<div class="agrupador-centros-turisticos">

  <a href="{{ route('apompal') }}">
      <div class="grid-item" style="background-image: url('{{ asset('images/apompal/portada.jpg') }}');">
          <h3>{{ $centros[1]->nomcentur }}</h3>
      </div>
  </a>

  
  <a href="{{ route('arrecifes') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/arrecifes/portada.jpg') }}');">
        <h3>{{ $centros[2]->nomcentur }}</h3>
    </div>
  </a>

  <a href="{{ route('benitojuarez') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/benito-juarez/portada.jpg') }}');">
        <h3>{{ $centros[3]->nomcentur }}</h3>
    </div>  
  </a>
    
  <a href="{{ route('cabanasencantadas') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/cabanas-encantadas/portada.jpg') }}');">
        <h3>{{ $centros[4]->nomcentur }}</h3>
    </div>
  </a>

  <a href="{{ route('cascadasencantadas') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/cascadas-encantadas/portada.jpg') }}');">
        <h3>{{ $centros[5]->nomcentur }}</h3>
    </div>
  </a>

  <a href="{{ route('ceytaks') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/noimage.jpg') }}');">
        <h3>{{ $centros[6]->nomcentur }}</h3>
    </div>
  </a>

  <a href="{{ route('elmirador') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/noimage.jpg') }}');">
        <h3>{{ $centros[7]->nomcentur }}</h3>
    </div>
  </a>

  <a href="{{ route('jomxuk') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/jomxuk/portada.jpg') }}');">
        <h3>{{ $centros[8]->nomcentur }}</h3>
    </div>
  </a>


  <a href="{{ route('kantasejkan') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/kan-tasejkan/portada.jpg') }}');">
        <h3>{{ $centros[9]->nomcentur }}</h3>
    </div>
  </a>


  <a href="{{ route('lagunadelostion') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/laguna-del-ostion/portada.jpg') }}');">
        <h3>{{ $centros[10]->nomcentur }}</h3>
    </div>
  </a>

  <a href="{{ route('lasmargaritas') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/las-margaritas/portada.jpg') }}');">
        <h3>{{ $centros[11]->nomcentur }}</h3>
    </div>
  </a>

  <a href="{{ route('manglaressontecomapan') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/manglares-sontecomapan/portada.jpg') }}');">
        <h3>{{ $centros[12]->nomcentur }}</h3>
    </div>
  </a>

  <a href="{{ route('ranchodonaelia') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/rancho-dona-elia/portada.jpg') }}');">
        <h3>{{ $centros[13]->nomcentur }}</h3>
    </div>
  </a>

  <a href="{{ route('rocapartida') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/roca-partida/portada.jpg') }}');">
        <h3>{{ $centros[14]->nomcentur }}</h3>
    </div>
  </a>

  <a href="{{ route('selvaelmarinero') }}">
    <div class="grid-item" style="background-image: url('{{ asset('images/selva-el-marinero/portada.jpg') }}');">
        <h3>{{ $centros[15]->nomcentur }}</h3>
    </div>
  </a>
    
</div>




<br><br><br>


<div class="titulo-guias">
  Guías Turísticas Certificadas
</div>

<div class="wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
  <div class="descripcion_guias"> Ellos pueden <b>llevarte</b> a los Centros Ecoturísticos de la región de Los Tuxtlas y pueden ofrecerte algunas <b>actividades para que disfrutes de tu estancia...</b> <br><br>¡Ponte en contacto con ellos y disfruta tu viaje!</div>
</div>


<!--inicio agrupador guias turisticas -->
<div class="agrupador-guias-turisticas">
    @foreach($guiasT as $agencia)
    <div class="agrupador-itemgt-y-tarjeta">
        <div class="grid-itemgt">
            <img src="{{ asset($agencia->imgguiatur) }}"
                 alt="{{ $agencia->nomguiatur }}">
        </div>
        <div class="tarjeta-guia">
            <div style="text-align:center;">
                <h3>{{ $agencia->nomguiatur }}</h3>
            </div>
            <h4>
                Responsable:
                <span style="font-weight:300;">
                    {{ $agencia->nomresguiatur }}
                </span>
            </h4>
            <h4>
                Número:
                <span style="font-weight:300;">
                    {{ $agencia->telguiatur }}
                </span>
            </h4>
            <h4>
                Correo:
                <span style="font-weight:300;">
                    {{ $agencia->corguiatur }}
                </span>
            </h4>
          <h4>Actividades que realizan
            <ul style="padding-left:20px; margin-top:5px;">
                @foreach($agencia->actividadturist as $actividad)
                    <li style="font-weight:300; margin-bottom:8px;">
                        {{ $actividad->nomacttur }}
                    </li>
                @endforeach
            </ul>
          </h4>
          <br>
        </div>
    </div>
    @endforeach
</div>



<br><br><br><br>



<div class="titulo_opinion_turistas">
  ¿Qué dicen los turistas?
</div>
<center><h3>¡Las personas aman esta región!</h3></center>

<div class="agrupador_opinion">

  <div class="opinion_turista">
    <div class="bloque bloque-1">"Me encantó el lugar pude realizar senderismo, nadar en una cascada y hospedarme con una gran anfitriona Sra. Amelia y su hija Marisela. Una cabaña junto a un estanque."</div>
    <div class="bloque bloque-2">★★★★</div>
    <div class="bloque bloque-3">-Anónimo</div>
  </div>

  <div class="opinion_turista">
    <div class="bloque bloque-1">"Se trata de un lugar hermoso, muestra perfecta de como la Naturaleza y el hombre pueden convivir en una sinergia equilibrada"</div>
    <div class="bloque bloque-2">★★★★★</div>
    <div class="bloque bloque-3">-Visitante Mexicano</div>
  </div>

  <div class="opinion_turista">
    <div class="bloque bloque-1">"Excelente Lugar es una Maravilla Especialmente la Atención Al Turista"</div>
    <div class="bloque bloque-2">★★★★★</div>
    <div class="bloque bloque-3">-Anónimo</div>
  </div>

</div>





<!-- Mapa -->
<br><br><br><br><br>
<h2>¡Vísitanos!</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15140.214781280141!2d-95.169389!3d18.435871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c272311db4bbeb%3A0x55cb48e28a387d4!2sTecNM-Campus%20-%20San%20Andr%C3%A9s%20Tuxtla!5e0!3m2!1ses-419!2smx!4v1737149286702!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



<br>
<!------------------------ wsp icon -------------------------->
<a href="https://wa.me/5212941016169?text=Hola, me gustaría saber más acerca del Turismo Comunitario">
  <div id="wsp" title="Whatsapp">
    <img src="{{ asset('images/favicon/whatsapp.png') }}" width="60px">
  </div>
</a>
<br>


@php
    $visitas = contador(); 
@endphp


<p style="text-align: center;">
    Esta página ha sido visitada {{ $visitas }} veces.
</p>


@include('partials.footer')


<!-- carrusel carreras -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var flkty = new Flickity('.carrusel_carreras', {
      cellAlign: 'left',
      contain: true,
      wrapAround: true,
      autoPlay: 5000, // Cambio automático cada 3 segundos
      pauseAutoPlayOnHover: false, 
      prevNextButtons: true, // Habilita botones de navegación
      selectedAttraction: 0.01,
      friction: 0.2,
      pageDots: true, // mantener dots

    });

      flkty.on('select', function () {
      flkty.playPlayer(); // Reinicia el autoplay después de cualquier acción
    });

    // Evitar que el autoplay se detenga al usar los botones de flecha
    var prevButton = document.querySelector('.flickity-prev-next-button.previous');
    var nextButton = document.querySelector('.flickity-prev-next-button.next');

    [prevButton, nextButton].forEach(function(button) {
      button.addEventListener('click', function() {
        flkty.playPlayer();
      });
    });
  });
</script>

 
<!-- counter -->
<script>
function animateCounter(target, from, to, duration) {
    const counter = { value: from };
    gsap.to(counter, {
        value: to,
        duration: duration,
        ease: "power1.out",
        onUpdate: function () {
            document.querySelector(target).innerText = Math.ceil(counter.value).toLocaleString('es-MX');
        },
        onComplete: function () {
            console.log(`Animación de ${target} completada.`);
        }
    });
}

// 🚀 Detecta cuando el contador entra en pantalla
document.addEventListener("DOMContentLoaded", () => {
    const target = document.querySelector('.counter');
    if (!target) return; // Previene errores si no existe

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Lanza la animación solo una vez
                animateCounter('.counter', 0, 185000, 3);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5 // Se activa cuando el 50% del elemento es visible
    });

    observer.observe(target);
});
</script>


<!--------- Appr ------->
<script>
  // JavaScript
  const content = document.getElementById('content');

  // Función para verificar si el elemento está en el viewport
  function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
  }

  // Evento de scroll
  window.addEventListener('scroll', () => {
    if (isInViewport(content)) {
      content.classList.add('visible'); // Añade la clase para hacerlo visible
    }
  });
</script>


<!-- WOW.js bounce -->
<script>
  new WOW().init();  // Inicialización de WOW.js
</script>






</body>
</html>