<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Quartos - Hotel Conterrâneo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/hotelLogo.png" sizes="48x48" type="image/x-icon">
</head>

<x-navbar />

<div class="bg-gray-300 h-[70vh] flex items-center justify-center overflow-hidden"> <!-- Ajuste de altura -->
  <img 
    alt="Placeholder image" 
    class="h-full w-full object-cover" 
    src="https://cache.marriott.com/is/image/marriotts7prod/jw-saojw-deluxe-king-guest-room-33611:Classic-Hor?wid=1920&fit=constrain" 
  />
</div>

<div class="flex flex-col md:flex-row justify-between items-start mt-8 px-6">
  <div class="md:w-1/2">
    <h1 class="text-3xl font-bold text-black">
    Bem-vindo ao Hotel Conterrâneo - Sua Casa Longe de Casa
    </h1>
  </div>
  <div class="md:w-1/2 mt-4 md:mt-0">
    <p class="text-gray-700">
    Desfrute de uma estadia luxuosa e confortável em nosso hotel. Oferecemos quartos elegantes, serviço de primeira classe e uma experiência inesquecível.
    </p>
    <div class="mt-4 flex space-x-4">
        <a href="https://wa.me/5584991166551?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20o%20menu." target="_blank">
            <button class="border border-black text-black py-2 px-4">Reservar Agora</button>
        </a>

        <button 
            class="border border-black text-black py-2 px-4" 
            onclick="scrollToSection('reservas')">
            Saiba Mais
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
  </div>
</div><br><br><br><br><br>

  <div class="bg-white text-black">
    <div class="container mx-auto px-4 py-8">
      <h1 class="text-3xl font-bold mb-8">
        Localização privilegiada em uma área central da cidade
      </h1>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="p-4">
          <img
            alt="Placeholder image for luxury accommodations"
            class="w-80 h-80 object-cover mb-4"
            src="https://www.collinedefrance.com.br/wp-content/uploads/elementor/thumbs/petit-01-oaiofqysb757dz2oz9tl8eze81w020tc1rhmcndgts.jpg"
          />
          <h2 class="text-xl font-bold mb-2">
            Comodidades de luxo para uma estadia confortável
          </h2>
          <p class="mb-4">
            Desfrute de quartos espaçosos e bem equipados, além de serviços de alta qualidade.
          </p>
          <a class="text-blue-500 font-semibold" href="#">
            Saiba Mais
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>

        <div class="p-4">
          <img
            alt="Placeholder image for luxury accommodations"
            class="w-80 h-80 object-cover mb-4"
            src="https://www.collinedefrance.com.br/wp-content/uploads/elementor/thumbs/petit-01-oaiofqysb757dz2oz9tl8eze81w020tc1rhmcndgts.jpg"
          />
          <h2 class="text-xl font-bold mb-2">
            Atendimento personalizado para tornar sua estadia memorável
          </h2>
          <p class="mb-4">
            Nossa equipe está pronta para atender todas as suas necessidades durante sua estadia.
          </p>
          <a class="text-blue-500 font-semibold" href="#">
            Reservar
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>
        <div class="p-4">
          <img
            alt="Placeholder image for luxury accommodations"
            class="w-80 h-80 object-cover mb-4"
            src="https://www.collinedefrance.com.br/wp-content/uploads/elementor/thumbs/petit-01-oaiofqysb757dz2oz9tl8eze81w020tc1rhmcndgts.jpg"
          />
          <h2 class="text-xl font-bold mb-2">
            Aproveite as comodidades adicionais, como piscina e área verde
          </h2>
          <p class="mb-4">
            Oferecemos uma variedade de opções de lazer para tornar sua estadia ainda mais especial.
          </p>
          <a class="text-blue-500 font-semibold" href="#">
            Explorar
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>
      </div>
    </div>
</div><br><br><br><br><br>

<div class="bg-white text-black">
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border p-4">
                <h2 class="text-center text-lg font-semibold">Apartamento Individual</h2>
                <p class="text-center text-4xl font-bold">R$ 130,00</p>
                  <ul class="mt-4 space-y-2">
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 1 pessoa</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>

                  </ul>
                  <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20individual." target="_blank">
                      <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                  </a>
            </div>
            <div class="border p-4">
                <h2 class="text-center text-lg font-semibold">Apartamento Duplo</h2>
                <p class="text-center text-4xl font-bold">R$ 170,00</p>
                <ul class="mt-4 space-y-2">
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 2 pessoa</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                </ul>
                <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20duplo." target="_blank">
                      <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                </a>
            </div>
            <div class="border p-4">
                <h2 class="text-center text-lg font-semibold">Apartamento Triplo</h2>
                <p class="text-center text-4xl font-bold">R$ 220,00</p>
                <ul class="mt-4 space-y-2">
                <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 3 pessoa</li>
                <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                </ul>
                <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20triplo." target="_blank">
                    <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                </a>
            </div>
        </div><br>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="border p-4">
                <h2 class="text-center text-lg font-semibold">Apartamento Quádruplo</h2>
                <p class="text-center text-4xl font-bold">R$ 270,00</p>
                <ul class="mt-4 space-y-2">
                <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 4 pessoa</li>
                <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                </ul>
                <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20quádruplo." target="_blank">
                    <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                </a>
            </div>
            <div class="border p-4">
                <h2 class="text-center text-lg font-semibold">Apartamento Quíntuplo</h2>
                <p class="text-center text-4xl font-bold">R$ 360,00</p>
                <ul class="mt-4 space-y-2">
                <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 5 pessoa</li>
                <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                      <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                </ul>
                <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20quíntuplo." target="_blank">
                    <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                </a>
            </div>
        </div><br><br>

        <div class="text-center mt-8">
            <h2 class="text-2xl font-bold">Reserve sua estadia conosco</h2>
            <p class="mt-2">Converse com nossos atendentes e descubra nossos quartos confortáveis e com preços acessíveis</p>
            <div class="mt-4 space-x-2">
                <button class="border border-black text-black py-2 px-4">Mais informações</button>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>

<x-footer />