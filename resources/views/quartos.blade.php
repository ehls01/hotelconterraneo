<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Quartos - Hotel Conterrâneo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/hotelLogo.png" sizes="48x48" type="image/x-icon">
    @livewireStyles
</head>

<body>
    
<x-navbar />

<div class="bg-gray-300 h-[70vh] pt-4 flex items-center justify-center overflow-hidden"> <!-- Ajuste de altura -->
  <img 
    alt="Placeholder image" 
    class="h-full w-full object-cover" 
    src="https://cache.marriott.com/is/image/marriotts7prod/jw-saojw-deluxe-king-guest-room-33611:Classic-Hor?wid=1920&fit=constrain" 
  />
</div>

<div class="flex flex-col md:flex-row justify-between items-start mt-8 px-4 md:px-40">
  <div class="md:w-1/2">
    <h1 class="text-3xl font-bold text-black text-center md:text-left">
      Bem-vindo ao Hotel Conterrâneo - Sua Casa Longe de Casa
    </h1>
  </div>
  <div class="md:w-1/2 mt-4 md:mt-0">
    <p class="text-gray-700 text-center md:text-left">
      Desfrute de uma estadia luxuosa e confortável em nosso hotel. Oferecemos quartos elegantes, serviço de primeira classe e uma experiência inesquecível.
    </p>
    <div class="mt-4 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center sm:justify-start">
      <a href="https://wa.me/5584991166551?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20o%20menu." target="_blank">
        <button class="border border-black text-black py-2 px-4 w-full sm:w-auto">Reservar Agora</button>
      </a>

      <button 
        class="border border-black text-black py-2 px-4 w-full sm:w-auto" 
        onclick="scrollToSection('reservas')">
        Saiba Mais
      </button>

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
  </div>
</div><br><br><br><br><br>

<div class="bg-white text-black">
    <div class="container mx-auto p-4">
        <div class="flex flex-wrap gap-4 justify-between">

        <!-- Card 1 -->
        <div class="border border-gray-300 carousel-container w-full sm:w-[calc(50%-1rem)] md:w-[calc(33.33%-1rem)]" id="carousel-1">
            <div class="relative overflow-hidden">
                <div class="flex transition-transform duration-700 ease-in-out carousel" id="carousel-content-1">
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                </div>
                <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 prev-btn" data-target="carousel-content-1">&#10094;</button>
                <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 next-btn" data-target="carousel-content-1">&#10095;</button>
            </div>
            <div class="p-6">
                <h4 class="text-left text-lg font-semibold">APARTAMENTO INDIVIDUAL</h4>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 1 pessoa</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                </ul><br>
                <h4 class="text-left text-lg font-semibold">VALOR: 129,00</h4>
                <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20individual." target="_blank">
                    <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="border border-gray-300 carousel-container w-full sm:w-[calc(50%-1rem)] md:w-[calc(33.33%-1rem)]" id="carousel-2">
            <div class="relative overflow-hidden">
                <div class="flex transition-transform duration-700 ease-in-out carousel" id="carousel-content-2">
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                </div>
                <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 prev-btn" data-target="carousel-content-2">&#10094;</button>
                <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 next-btn" data-target="carousel-content-2">&#10095;</button>
            </div>
            <div class="p-6">
                <h4 class="text-left text-lg font-semibold">APARTAMENTO INDIVIDUAL</h4>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 1 pessoa</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                </ul><br>
                <h4 class="text-left text-lg font-semibold">VALOR: 129,00</h4>
                <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20individual." target="_blank">
                    <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="border border-gray-300 carousel-container w-full sm:w-[calc(50%-1rem)] md:w-[calc(33.33%-1rem)]" id="carousel-3">
            <div class="relative overflow-hidden">
                <div class="flex transition-transform duration-700 ease-in-out carousel" id="carousel-content-3">
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                </div>
                <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 prev-btn" data-target="carousel-content-3">&#10094;</button>
                <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 next-btn" data-target="carousel-content-3">&#10095;</button>
            </div>
            <div class="p-6">
                <h4 class="text-left text-lg font-semibold">APARTAMENTO INDIVIDUAL</h4>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 1 pessoa</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                </ul><br>
                <h4 class="text-left text-lg font-semibold">VALOR: 129,00</h4>
                <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20individual." target="_blank">
                    <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                </a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="border border-gray-300 carousel-container w-full sm:w-[calc(50%-1rem)] md:w-[calc(33.33%-1rem)]" id="carousel-4">
            <div class="relative overflow-hidden">
                <div class="flex transition-transform duration-700 ease-in-out carousel" id="carousel-content-4">
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                    <div class="min-w-full">
                        <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                    </div>
                </div>
                <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 prev-btn" data-target="carousel-content-4">&#10094;</button>
                <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 next-btn" data-target="carousel-content-4">&#10095;</button>
            </div>
            <div class="p-6">
                <h4 class="text-left text-lg font-semibold">APARTAMENTO INDIVIDUAL</h4>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 1 pessoa</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                    <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                </ul><br>
                <h4 class="text-left text-lg font-semibold">VALOR: 129,00</h4>
                <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20individual." target="_blank">
                    <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                </a>
            </div>
        </div>

        </div>
    </div>
</div>


    <!-- Código javascript para funcionamento dos carroseis dos cards -->
    <script>
        document.querySelectorAll('.carousel-container').forEach(container => {
            let currentIndex = 0;
            const carousel = container.querySelector('.carousel');
            const totalSlides = carousel.children.length;

            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            container.querySelector('.next-btn').addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            });

            container.querySelector('.prev-btn').addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateCarousel();
            });
        });
    </script>
<br><br><br><br><br>

<x-footer />

@livewireScripts
</body>