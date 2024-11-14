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

<div class="bg-gray-300 h-[70vh] flex items-center justify-center overflow-hidden"> <!-- Ajuste de altura -->
  <img 
    alt="Placeholder image" 
    class="h-full w-full object-cover" 
    src="https://www.serhsnatalgrandhotel.com/content/imgsxml/galerias/panel_gallery/1/serhsnatalgh17.5247b546.jpg" 
  />
</div>

<!---- <div class="flex flex-col md:flex-row justify-between items-start mt-8 px-40"> -->

<div class="bg-white text-gray-900 ">
  <div class="container mx-auto p-8">
    <h1 class="text-4xl font-bold mb-4">
      Desfrute de nossa incrível piscina com todas as comodidades que você precisa
    </h1>
    <div class="flex flex-row gap-8">
      <div>
        <p class="text-lg">
          Nossa piscina é perfeita para relaxar e se refrescar em um ambiente tranquilo e agradável.
        </p>
      </div>
      <div class="flex flex-row gap-8">
        <div class="flex items-start">
          <i class="fas fa-cube text-2xl mr-4"></i>
          <div>
            <h2 class="text-xl font-semibold">
              Comodidades
            </h2>
            <p>
              Toalhas e espreguiçadeiras para tornar sua experiência de lazer ainda mais satisfatória.
            </p>
          </div>
        </div>
        <div class="flex items-start">
          <i class="fas fa-cube text-2xl mr-4"></i>
          <div>
            <h2 class="text-xl font-semibold">
              Horários
            </h2>
            <p>
              A piscina está disponível das 08:00h às 20:00h para todos os hóspedes.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div>
    <div class="bg-white text-gray-900">
        <div class="container mx-auto p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <h1 class="text-4xl font-bold mb-4">
                    Lazer e Atividades
                </h1>
                <div>
                    <p class="text-lg">
                        Descubra as opções de lazer e atividades oferecidas pelo Hotel Conterrâneo.
                        Aproveite a piscina, relaxe na área verde e traga seu pet para desfrutar de
                        momentos especiais.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex items-center justify-center min-h-screen bg-white pt-24 md:pt-32">
  <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
    <div class="w-full md:w-1/2 mb-4 md:mb-0">
      <h1 class="text-4xl font-bold mb-4">
        Desfrute da nossa área verde ao ar livre
      </h1>
      <p class="text-lg text-gray-700">
        Nossa área verde é perfeita para relaxar e aproveitar a natureza. Oferecemos trilhas para caminhadas, quadras esportivas e muito mais.
      </p>
    </div>
    <div class="w-full md:w-1/2 flex justify-center">
      <img 
        alt="Placeholder image" 
        class=" object-contain" 
        src="https://placehold.co/800x800"
      />
    </div>
  </div>
</div>

<div class="flex items-center justify-center min-h-screen bg-white pt-24 md:pt-32">
  <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
    <div class="w-full md:w-1/2 flex justify-center md:pr-8">
      <img 
        alt="Placeholder image" 
        class="object-contain" 
        src="https://placehold.co/800x800"
      />
    </div>
    <div class="w-full md:w-1/2 mb-4 md:mb-0">
      <h1 class="text-4xl font-bold mb-4">
        Aproveite nossa piscina e area de lazer para relaxar!
      </h1>
      <p class="text-lg text-gray-700">
        A piscina é incrível! É o lugar perfeito para relaxar e se refrescar durante sua estadia no Hotel Conterrâneo.
      </p>
    </div>
  </div>
</div>

<div class="flex items-center justify-center min-h-screen bg-white pt-24 md:pt-32">
  <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
    <div class="w-full md:w-1/2 mb-4 md:mb-0">
      <h1 class="text-4xl font-bold mb-4">
        Política Pet-Friendly: Seu melhor amigo é bem-vindo em nosso hotel!
      </h1>
      <p class="text-lg text-gray-700">
        No Hotel Conterrâneo, entendemos que seu animal de estimação faz parte da família. Por isso, permitimos que você traga seu pet durante sua estadia.
      </p>
    </div>
    <div class="w-full md:w-1/2 flex justify-center">
      <img 
        alt="Placeholder image" 
        class=" object-contain" 
        src="https://placehold.co/800x800"
      />
    </div>
  </div>
</div>

<x-footer />