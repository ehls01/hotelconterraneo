<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazer - Hotel Conterrâneo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/hotelLogo.png" sizes="48x48" type="image/x-icon">
</head>

<body>
  
<x-navbar />

<!-- Carousel Section -->
<div class="h-[70vh] pt-4 overflow-hidden relative" id="carousel-container">
  <!-- Carousel Wrapper -->
  <div class="flex transition-transform duration-500 ease-in-out h-full" id="carousel">
    <!-- Slide 1: Piscina -->
    <div class="flex-shrink-0 w-full flex relative h-full">
      <img alt="Piscina" class="h-full w-full object-cover" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/28/93/98/a1/sanma-hotel.jpg?w=1200&h=-1&s=1" />
      <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 p-6 md:px-12">
        <p class="text-2xl md:text-3xl font-semibold text-white text-center">Nossa piscina oferece o ambiente ideal para relaxamento e diversão. Com um design moderno e águas cristalinas, é o local perfeito para aproveitar o dia com conforto e tranquilidade.</p>
      </div>
    </div>

    <!-- Slide 2: Área verde -->
    <div class="flex-shrink-0 w-full flex relative h-full">
      <img alt="Área verde" class="h-full w-full object-cover" src="https://spa-espaco-verde.hotelempernambuco.com/data/Images/OriginalPhoto/5092/509294/509294790/image-camaragibe-spa-espaco-verde-hotel-1.JPEG" />
      <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 p-6 md:px-12">
        <p class="text-2xl md:text-3xl font-semibold text-white text-center">A área verde do hotel proporciona um espaço tranquilo e revigorante, rodeado pela natureza. É o lugar perfeito para quem busca um ambiente relaxante, ideal para caminhadas e momentos de paz.</p>
      </div>
    </div>

    <!-- Slide 3: Aceitamos animais -->
    <div class="flex-shrink-0 w-full flex relative h-full">
      <img alt="Aceitamos animais" class="h-full w-full object-cover" src="https://s2-oglobo.glbimg.com/5_pGvFu0fNt7RWKRjwQOe5jA_Yk=/0x0:3600x2400/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_da025474c0c44edd99332dddb09cabe8/internal_photos/bs/2023/s/B/hzPjArR5mwNuNAnfBaOQ/pet-friendly-hotels-4-0.jpg" />
      <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 p-6 md:px-12">
        <p class="text-2xl md:text-3xl font-semibold text-white text-center">Aceitamos animais! Seu pet também é bem-vindo no nosso hotel. Oferecemos acomodações confortáveis e espaços exclusivos para garantir que seu animal de estimação tenha uma estadia agradável junto de você.</p>
      </div>
    </div>
  </div>

  <!-- Prev Button -->
  <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black text-white p-2 rounded-full shadow-lg z-10">
    &#10094;
  </button>

  <!-- Next Button -->
  <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black text-white p-2 rounded-full shadow-lg z-10">
    &#10095;
  </button>
</div>

<!-- JavaScript for manual slide change -->
<script>
  let currentIndex = 0;
  const slides = document.querySelectorAll('#carousel > div');
  const totalSlides = slides.length;

  const showSlide = (index) => {
    document.getElementById('carousel').style.transform = `translateX(-${index * slides[0].offsetWidth}px)`;
  };

  // Next slide
  document.getElementById('next').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
  });

  // Previous slide
  document.getElementById('prev').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
  });
</script>

<!-- POSTS -->

<div class="flex flex-col md:flex-row justify-between items-start mt-8 px-4 md:px-40">
  <div class="md:w-1/2">
    <h1 class="text-3xl font-bold text-black text-center md:text-left">
      Lazer e Atividades
    </h1>
  </div>
  <div class="md:w-1/2 mt-4 md:mt-0">
    <p class="text-gray-700 text-center md:text-left">
      Descubra as opções de lazer e atividades oferecidas pelo Hotel Conterrâneo. Aproveite a piscina, relaxe na área verde e traga seu pet para desfrutar de momentos especiais.
    </p>
    <div class="mt-4 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center sm:justify-start">
      <a href="https://wa.me/5584991166551?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20o%20menu." target="_blank">
        <button class="border border-black text-black py-2 px-4 w-full sm:w-auto">Reservar Agora</button>
      </a>
    </div>
  </div>
</div><br><br><br>

<x-footer />

@livewireScripts
</body>
</html>
