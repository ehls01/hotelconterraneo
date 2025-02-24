<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café da Manhã - Hotel Conterrâneo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/hotelLogo.png" sizes="48x48" type="image/x-icon">
</head>

<body>
  
<x-navbar/>

<!-- Carousel Section -->
<div class="bg-gray-300 h-[70vh] pt-4 flex items-center justify-center overflow-hidden relative" id="carousel-container">
  <!-- Carousel Wrapper -->
  <div class="flex transition-transform duration-500 ease-in-out h-full" id="carousel">
    <!-- Slides -->
    @foreach ($coffee_carousels as $CoffeeCarousel)
    @foreach ($CoffeeCarousel->image as $image)
    <div class="flex-shrink-0 w-full">
      <img 
        alt="Placeholder image" 
        class="h-full w-full object-cover" 
        src="{{ asset('storage/'.$image) }}"/>
    </div>
    @endforeach
    @endforeach
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

  document.getElementById('next').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
  });

  document.getElementById('prev').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
  });
</script>



<!-- POSTS -->
<div class="flex flex-col md:flex-row justify-between items-start mt-8 px-4 md:px-40">
  <div class="md:w-1/2">
    <h1 class="text-3xl font-bold text-black text-center md:text-left">
      {{$coffee_descriptions[0]->title}}
    </h1>
  </div>
  <div class="md:w-1/2 mt-4 md:mt-0">
    <p class="text-gray-700 text-center md:text-left">
      {{$coffee_descriptions[0]->text}}
    </p>
    <div class="mt-4 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center sm:justify-start">
      <a href="https://wa.me/{{$contacts->wbusiness}}?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20o%20menu%20do%20Hotel%20Conterrâneo.%20Podem%20me%20passar%20detalhes%20sobre%20as%20opções%20de%20pratos?" target="_blank">
        <button class="border border-black text-black py-2 px-4 w-full sm:w-auto">Reservar Agora</button>
      </a>

      <button 
        class="border border-black text-black py-2 px-4 w-full sm:w-auto" 
        onclick="scrollToSection('reservas')">
        Ver Menu
      </button>
    </div>

    <div id="reservas" class="my-8"></div>

    <script>
      function scrollToSection(id) {
        const section = document.getElementById(id);
        if (section) {
          section.scrollIntoView({ behavior: 'smooth' });
        }
      }
    </script>
  </div>
</div><br>

<div class="bg-white text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <!-- Container Flex para os dois posts -->
        <div class="flex flex-col lg:flex-row lg:space-x-8">
            
            <!-- Post 1: Opções de Cardápio -->
            <div class="flex flex-col lg:flex-row lg:space-x-8">
                <!-- Post 1: Opções de Cardápio -->
                <div class="flex flex-col lg:flex-row lg:space-x-8">
                    <!-- Post 1: Opções de Cardápio -->
                    <div class="lg:w-1/2 w-full mb-8 lg:mb-0">
                        <h1 class="text-4xl font-bold mt-2">{{$coffee_cards[0]->title}}</h1>
                        <p class="mt-4 text-lg">{!!$coffee_cards[0]->text!!}</p>
                    </div>
                    <div class="lg:w-1/2 w-full flex justify-center">
                        <div class="bg-gray-300 w-96 h-96 flex items-center justify-center">
                            <img src="{{asset('storage/'.$coffee_cards[0]->image)}}" alt="Descrição da imagem" class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div><br>   

        <!-- Container Flex para o segundo post -->
        <div class="flex flex-col lg:flex-row lg:space-x-8 mt-8">
            <!-- Post 2: Horários do café -->
            <div class="lg:w-1/2 w-full mb-8 lg:mb-0">
                <h1 class="text-4xl font-bold mb-2">{{$coffee_cards[1]->title}}</h1>
                <p class="text-lg mb-2">{!!$coffee_cards[1]->text!!}</p>
            </div>
            <div class="lg:w-1/2 w-full flex justify-center">
                <div class="bg-gray-300 w-96 h-96 flex items-center justify-center">
                    <img src="https://www.mexidodeideias.com.br/wp-content/uploads/2015/01/Qual-e-a-melhor-hora-para-tomar-cafe.jpg" alt="Descrição da imagem" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>


    </div>
</div><br><br><br> 

<x-footer />

@livewireScripts
</body>
