<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <meta name="author" content="Ecoturismo los tuxtlas, Turismo Comunitario en la región de Los Tuxtlas">
  <meta name="description" content="Descubre el turismo comunitario en la región de Los Tuxtlas, Veracruz. Vive experiencias únicas en centros ecoturísticos como Lago El Apompal, Roca Partida, Benito Juárez, Las Margaritas, Laguna del Ostión y más destinos naturales.">
  <meta name="keywords" content="ecoturismo los tuxtlas, ecoturismo en los tuxtlas, ecoturismo en la región de los Tuxtlas, centros ecoturisticos en los tuxtlas, centros ecoturisticos en la región de los tuxtlas, turismo comunitario de los tuxtlas, Los Tuxtlas Veracruz, que visitar en los Tuxtlas, que visitar en la región de los Tuxtlas, ecoturismo, Apompal, Roca Partida, Benito Juárez, Arrecifes, Cabañas Encantadas, Kan Tasejkan, Laguna del Ostión, Las Margaritas, naturaleza de los tuxtlas, aventura, cascadas, playas, senderismo, ">


  <link rel="preload" as="image" href="{{ asset('images/roca-partida/portada.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/roca-partida/1.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/roca-partida/2.jpg') }}">
  <link rel="preload" as="image" href="{{ asset('images/roca-partida/7.jpg') }}">
  
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

  <!-- CSS estilos de esta página -->
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/estilos-centros.css') }}">
  <link rel="stylesheet" href="{{ asset('css/docentes.css') }}">

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-latest.js"></script>


  <!-- Animate.css bounce -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- WOW.js bounce -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <!-- Flickity -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


  <!-- Icono pestaña -->
  <link rel="icon" href="{{ asset('images/favicon/tecnm.ico') }}"/>
  <!-- Titulo pestaña -->
  <title>Roca Partida – ¡Conoce este Centro Ecoturístico!</title>


</head>


<body>


@include('partials.header')





<div class="imagen_full" style="background-image: url('{{ asset('images/roca-partida/portada.jpg') }}');">
      <div class="texto-sobre-full">
        @include('partials.title-rocapartida')
      </div>
</div>



<!---bounce left--->
<div class="wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
    <div class="descripcion_centros">{{ $centros[13]->descentur }}</div>
  <!-- <div class="descripcion_centros"> Breve descripción que el reponsable quiera contar sobre su centro ecoturístico, en que comunidad se ubica el centro turístico y a cuántos km está ubicado desde un punto de referencia conocido. O también puede escribir porqué es tan mítico este lugar.</b></div> -->
</div><!-- end boounce -->

<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d160622.1098156919!2d-95.20537061935843!3d18.57960874426616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x85c21301ff39db95%3A0x68593fdfc634b297!2sSan%20Andr%C3%A9s%20Tuxtla%2C%20Ver.!3m2!1d18.4441222!2d-95.2130284!4m5!1s0x85c27da7163796d7%3A0x2b0e70f7cd360cdd!2s95802%20Punta%20Roca%20Partida%2C%20Ver.!3m2!1d18.7049199!2d-95.1831656!5e1!3m2!1ses!2smx!4v1763341152005!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<br>

<!--appear scroll-->
<div id="content">

  <center>
  <!---Información y botones de contacto--->
    <h2>Contáctanos</h2>


    <div class="contacto-container">
      <div class="contacto-item">
          <img src="{{ asset('images/favicon/reloj.png') }}" alt="Horaio" class="icon" loading="lazy">
          <div>
              <div class="texto_contacto">Horario de Atención</div>
              <p>{{ $centros[13]->horcentur }}</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="{{ asset('images/favicon/responsable.png') }}" alt="Responsable" class="icon" loading="lazy">
          <div>
              <div class="texto_contacto">Responsable</div>
              <p>{{ $centros[13]->rescentur }}</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="{{ asset('images/favicon/correo_sinfondo.png') }}" alt="Correo electronico" class="icon" loading="lazy">
          <div>
              <div class="texto_contacto">Correo Electrónico</div>
              <p>{{ $centros[13]->corcentur }}</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="{{ asset('images/favicon/llamada.png') }}" alt="Telefono" class="icon" loading="lazy">
          <div>
              <div class="texto_contacto">Teléfono</div>
              <p>+ 52 {{ $centros[13]->telcentur }}</p>
          </div>
      </div>
  </div>



    <a href="https://wa.me/5212941016169?text=Hola, me gustaría agendar una cita ¿Cómo llego a este lugar?">
      <div title="Clic para enviar mensaje" class="btn_enviawsp">
        Quiero hablar con una persona...
      </div>
    </a>
  </center>

</div><!--end appear-->


<br><br><br><br>
<hr>
<br><br>

<!--Menu centros ecoturisticos-->
<div style="text-align: center;">
  <h2>Servicios</h2>
</div>

<br>

<!--Servicios -->
<div class="contenedor-docentes">
  <div class="docentes">   
    <div class="grid">

      <div class="card">
        <div class="btn-pdf_docentes">
          <img class="img-docente" src="{{ asset('images/favicon/estacionamiento.png') }}" alt="Servicio estacionamiento">
            <p class="role-docente">Estacionamiento</p>
        </div>
      </div>

      <div class="card">
        <div class="btn-pdf_docentes">
          <img class="img-docente" src="{{ asset('images/favicon/wifi.png') }}" alt="Servicio WiFi">
            <p class="role-docente">WiFi</p>
        </div>
      </div>

      <div class="card">
        <div class="btn-pdf_docentes">
          <img class="img-docente" src="{{ asset('images/favicon/restaurante.png') }}" alt="Servicio Restaurante Comida">
            <p class="role-docente">Restaurante</p>
        </div>
      </div>

      <div class="card">
        <div class="btn-pdf_docentes">
          <img class="img-docente" src="{{ asset('images/favicon/cuarto-de-bano.png') }}" alt="Servicio Sanitarios Baño">
            <p class="role-docente">Sanitarios</p>
        </div>
      </div>

      <div class="card">
        <div class="btn-pdf_docentes">
          <img class="img-docente" src="{{ asset('images/favicon/cabana.png') }}" alt="Servicio Cabañas">
            <p class="role-docente">Cabañas</p>
        </div>
      </div>

      <div class="card">
        <div class="btn-pdf_docentes">
          <img class="img-docente" src="{{ asset('images/favicon/ducha.png') }}" alt="Servicio Regaderas Ducha">
            <p class="role-docente">Regaderas</p>
        </div>
      </div>

      <div class="card">
        <div class="btn-pdf_docentes">
          <img class="img-docente" src="{{ asset('images/favicon/camping.png') }}" alt="Servicio Espacio para Camping">
            <p class="role-docente">Espacio para Camping</p>
        </div>
      </div>

      <div class="card">
        <div class="btn-pdf_docentes">
          <img class="img-docente" src="{{ asset('images/favicon/souvenirs.png') }}" alt="Servicio Artesanías">
            <p class="role-docente">Artesanías</p>
        </div>
      </div>


    </div>
  </div>
</div>
<div class="mascotas">
  Este establecimiento <b>{{ $centros[13]->activo }}</b> acepta mascotas
</div>


<br><br>

<div class="titulo-actividades">
  ¿Qué actividades puedes realizar?
</div>

<div class="actividades">
  @if(isset($centro) && $centro->actividadturist->isNotEmpty())
    <ul class="lista-img">
      @foreach ($centro->actividadturist as $actividad)
        <li>{{ $actividad->nomacttur ?? 'Actividad #' . ($actividad->idacttur ?? '-') }}</li>
      @endforeach
    </ul>
  @else
    <p>No hay actividades registradas para este centro (id = 9).</p>
  @endif
</div>



<br><br><br><br><br>

<h2>Galería</h2>
<div class="carousel-container-l">
  
    <div class="main-image-l">
        <img id="featured-laboratorio">
    </div>


      <!-- Modal para ampliar -->
    <div id="modalImagen" class="iframe-modal-img">
      <img id="imagenAmpliada" src="" alt="Vista ampliada">
    </div>


    
    <div class="thumbnails-l" id="laboratorio-thumbnails">
        <!-- Las imágenes se añaden dinámicamente -->
    </div>
</div>





<br><br><br><br><br>




<div class="titulo-guias">
  Guías Turísticas Certificadas
</div>

<div class="wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
  <div class="descripcion_guias"> Estas guías colaboran con este Centro Ecoturistico, pueden <b>llevarte</b> a este lugar y pueden ofrecerte algunas <b>actividades para que disfrutes de tu estancia... </b><br><br>¡Ponte en contacto con ellos y disfruta tu viaje!</div>
</div>

<!-- Agrupador guias turisticas -->
<div class="agrupador-guias-turisticas">
    @foreach($centro->guiasturist as $agencia)
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




<br><br><br>


<br>
<!------------------------ wsp icon -------------------------->
<a href="https://wa.me/5212941016169?text=Hola, me gustaría agendar una cita ¿Cómo llego a este lugar?">
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


<!-- WOW.js bounce -->
<script>
  new WOW().init();  // Inicialización de WOW.js
</script>


<!--------- Appr up contacto ------->
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

 

<!--Galeria-->
<script>
  const laboratorioImages = [
    '{{ asset('images/roca-partida/1.jpg') }}',
    '{{ asset('images/roca-partida/2.jpg') }}',
    '{{ asset('images/roca-partida/7.jpg') }}',
    '{{ asset('images/roca-partida/4.jpg') }}',
    '{{ asset('images/roca-partida/5.jpg') }}',
    '{{ asset('images/roca-partida/portada.jpg') }}',
    '{{ asset('images/roca-partida/6.jpg') }}',
    '{{ asset('images/roca-partida/3.jpg') }}',
    '{{ asset('images/roca-partida/8.jpg') }}',
    '{{ asset('images/roca-partida/9.jpg') }}',
    '{{ asset('images/roca-partida/10.jpg') }}',
    '{{ asset('images/roca-partida/11.jpg') }}'
  ];

  function setupGallery(images, featuredId, thumbnailsId) {
    const featuredImage = document.getElementById(featuredId);
    const thumbnailsContainer = document.getElementById(thumbnailsId);

    thumbnailsContainer.innerHTML = images.map((img, index) => `
      <img 
        class="thumbnail-l"
        src="${img}" 
        alt="Imagen ${index + 1}" 
        data-index="${index}"
      >
    `).join('');

    const thumbnails = thumbnailsContainer.querySelectorAll('.thumbnail-l');
    let currentIndex = 0;
    let modalIndex = 0;

    function changeImage(index) {
      const newSrc = images[index];
      const img = new Image();
      img.src = newSrc;

      featuredImage.classList.remove('fade-in');
      void featuredImage.offsetWidth;

      img.onload = () => {
        featuredImage.src = newSrc;
        featuredImage.classList.add('fade-in');
      };

      thumbnails.forEach(t => t.classList.remove('active'));
      const selected = thumbnailsContainer.querySelector(`[data-index="${index}"]`);
      if (selected) selected.classList.add('active');

      currentIndex = parseInt(index);
    }


    thumbnails.forEach(thumb => {
      thumb.addEventListener('click', () => {
        clearInterval(autoSlide);
        changeImage(thumb.dataset.index);

        autoSlide = setInterval(() =>
          changeImage((currentIndex + 1) % images.length), 3000
        );
      });
    });

    let autoSlide = setInterval(() =>
      changeImage((currentIndex + 1) % images.length), 3000
    );

    changeImage(0);

    const modal = document.getElementById('modalImagen');
    const modalImage = document.getElementById('imagenAmpliada');

    function safePauseCarousel() {
      try {
        if (window.innerWidth >= 1024) {
          if (typeof flktyDesktop !== 'undefined' && flktyDesktop.pausePlayer)
            flktyDesktop.pausePlayer();
        } else {
          if (typeof flktyMobile !== 'undefined' && flktyMobile.pausePlayer)
            flktyMobile.pausePlayer();
        }
      } catch {}
    }

    function safePlayCarousel() {
      try {
        if (window.innerWidth >= 1024) {
          if (typeof flktyDesktop !== 'undefined' && flktyDesktop.playPlayer)
            flktyDesktop.playPlayer();
        } else {
          if (typeof flktyMobile !== 'undefined' && flktyMobile.playPlayer)
            flktyMobile.playPlayer();
        }
      } catch {}
    }

    function openModalWithSrc(src) {
      if (!src) return;

      modalIndex = images.indexOf(src);
      if (modalIndex === -1) modalIndex = currentIndex;

      modalImage.src = src;

      modal.style.display = 'flex';
      requestAnimationFrame(() => modal.classList.add('show'));

      safePauseCarousel();
    }

    function closeModal() {
      modal.classList.remove('show');
      setTimeout(() => {
        modal.style.display = 'none';
        modalImage.src = '';
      }, 200);
      safePlayCarousel();
    }

    featuredImage.style.cursor = 'zoom-in';
    featuredImage.addEventListener('click', () => {
      openModalWithSrc(featuredImage.src);
    });

    thumbnailsContainer.addEventListener('click', e => {
      if (e.target.tagName === 'IMG') openModalWithSrc(e.target.src);
    });

    modal.addEventListener('click', e => {
      if (e.target === modal) closeModal();
    });

    function modalNext() {
      modalIndex = (modalIndex + 1) % images.length;

      modalImage.classList.remove("fade-in");
      void modalImage.offsetWidth;

      modalImage.src = images[modalIndex];
      modalImage.classList.add("fade-in");
    }

    function modalPrev() {
      modalIndex = (modalIndex - 1 + images.length) % images.length;

      modalImage.classList.remove("fade-in");
      void modalImage.offsetWidth;

      modalImage.src = images[modalIndex];
      modalImage.classList.add("fade-in");
    }

    window.addEventListener('keydown', e => {
      if (modal.style.display === 'flex') {
        if (e.key === 'ArrowRight') modalNext();
        if (e.key === 'ArrowLeft') modalPrev();
        if (e.key === 'Escape') closeModal();
      }
    });

    let touchStartX = 0;

    modalImage.addEventListener("touchstart", e => {
      touchStartX = e.touches[0].clientX;
    });

    modalImage.addEventListener("touchend", e => {
      const endX = e.changedTouches[0].clientX;
      const diffX = endX - touchStartX;

      if (Math.abs(diffX) > 50) {
        if (diffX < 0) modalNext();
        else modalPrev();
      }
    });
  }

  window.onload = () => {
    setupGallery(laboratorioImages, 'featured-laboratorio', 'laboratorio-thumbnails');
  };
</script>


</body>
</html>