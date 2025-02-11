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
<div class="bg-gray-300 h-[70vh] w-full pt-4 overflow-hidden" id="carousel-container">
  <!-- Carousel Wrapper -->
  <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
    <!-- Slides -->
    <div class="flex-shrink-0 w-full">
      <img alt="Placeholder image" class="h-full w-full object-cover" src="https://sandihotel.com.br/wp-content/uploads/2022/09/Hotel-em-paraty-sandi-pousada-centro-historico-gastronomia-cafe-da-manha-1-1-1.jpg" />
    </div>
    <div class="flex-shrink-0 w-full">
      <img alt="Placeholder image" class="h-full w-full object-cover" src="https://sandihotel.com.br/wp-content/uploads/2022/09/Hotel-em-paraty-sandi-pousada-centro-historico-gastronomia-cafe-da-manha-1-1-1.jpg" />
    </div>
    <div class="flex-shrink-0 w-full">
      <img alt="Placeholder image" class="h-full w-full object-cover" src="https://sandihotel.com.br/wp-content/uploads/2022/09/Hotel-em-paraty-sandi-pousada-centro-historico-gastronomia-cafe-da-manha-1-1-1.jpg" />
    </div>
  </div>
</div>


<!-- JavaScript for automatic slide change -->
<script>
  let currentIndex = 0;
  const slides = document.querySelectorAll('#carousel > div');
  const totalSlides = slides.length;

  const showSlide = (index) => {
    document.getElementById('carousel').style.transform = `translateX(-${index * slides[0].offsetWidth}px)`;
  };

  setInterval(() => showSlide((currentIndex = (currentIndex + 1) % totalSlides)), 5000);
</script>


<!-- POSTS -->
<div class="flex flex-col md:flex-row justify-between items-start mt-8 px-4 md:px-40">
  <div class="md:w-1/2">
    <h1 class="text-3xl font-bold text-black text-center md:text-left">
      Comece o dia com um café delicioso
    </h1>
  </div>
  <div class="md:w-1/2 mt-4 md:mt-0">
    <p class="text-gray-700 text-center md:text-left">
      Nosso café da manhã oferece uma variedade de opções deliciosas para satisfazer todos os gostos. Com ingredientes frescos e preparados com cuidado, garantimos uma refeição matinal de alta qualidade.
    </p>
    <div class="mt-4 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center sm:justify-start">
      <a href="https://wa.me/5584991166551?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20o%20menu." target="_blank">
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
                        <h1 class="text-4xl font-bold mt-2">Opções de Cardápio do Café da Manhã</h1>
                        <p class="mt-4 text-lg">Comece o seu dia com um café da manhã delicioso e variado. Oferecemos uma seleção de pães frescos, como pães de queijo e integrais, acompanhados de manteiga, geleias artesanais ou frios. Para quem prefere opções leves, temos frutas da estação, iogurte com granola e mel.</p>

                        <p class="mt-4 text-lg">Se você busca algo mais substancial, experimente nossas omeletes recheadas, tapiocas com recheios variados ou cuscuz nordestino. Acompanhando, você pode escolher entre café, sucos naturais, chás e cappuccino cremoso.</p>

                        <p class="mt-4 text-lg">Nosso cardápio é ideal para quem deseja começar o dia com energia e sabor, com opções para todos os gostos!</p>
                    </div>

                    <div class="lg:w-1/2 w-full flex justify-center">
                        <div class="bg-gray-300 w-96 h-96 flex items-center justify-center">
                            <img src="https://minhasaude.proteste.org.br/wp-content/webp-express/webp-images/uploads/2022/11/mesa-cafe-manha.png.webp" alt="Descrição da imagem" class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>

            </div>
        </div><br>   

        <!-- Container Flex para o segundo post -->
        <div class="flex flex-col lg:flex-row lg:space-x-8 mt-8">
            <!-- Post 2: Horários do café -->
            <div class="lg:w-1/2 w-full mb-8 lg:mb-0">
                <h1 class="text-4xl font-bold mb-2">Horários do Café da Manhã</h1>
                <p class="text-lg mb-2">O café da manhã é servido em horários flexíveis para se adaptar à sua rotina. Desfrute de um início de dia tranquilo e saboroso no nosso hotel.</p>

                <p class="text-lg mb-2"><strong>Segunda a Sexta:</strong> Das 6h30 às 9h00, proporcionando um começo de dia antecipado e cheio de energia.</p>

                <p class="text-lg mb-2"><strong>Sábados:</strong> Das 7h00 às 9h30, para você aproveitar um pouco mais o seu final de semana com um café mais tranquilo.</p>

                <p class="text-lg mb-2"><strong>Domingos:</strong> Das 7h30 às 10h00, ideal para quem deseja acordar mais tarde e ainda saborear um excelente café.</p>
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
