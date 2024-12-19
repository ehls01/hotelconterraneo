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

<div class="flex flex-col md:flex-row justify-between items-start mt-8 px-40">
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
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Primeiro card dos quartos -->
            <div class="border border-gray-300">
                <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
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
            <!-- Segundo card dos quartos -->
            <div class="border border-gray-300">
                <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                <div class="p-6">
                    <h4 class="text-left text-lg font-semibold">APARTAMENTO DUPLO</h4>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 2 pessoa</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                    </ul><br>
                    <h4 class="text-left text-lg font-semibold">VALOR: 169,99</h4>
                    <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20individual." target="_blank">
                        <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                    </a>
                </div>
            </div>
            <!-- Terceiro card dos quartos -->            
            <div class="border border-gray-300">
                <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                <div class="p-6">
                    <h4 class="text-left text-lg font-semibold">APARTAMENTO TRIPLO</h4>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 2 pessoa</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                    </ul><br>
                    <h4 class="text-left text-lg font-semibold">VALOR: 219,99</h4>
                    <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20individual." target="_blank">
                        <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                    </a>
                </div>
            </div>
        </div><br>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Quarto card dos quartos -->   
            <div class="border border-gray-300">
                <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                <div class="p-6">
                    <h4 class="text-left text-lg font-semibold">APARTAMENTO QUÁDRUPLO</h4>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 4 pessoas</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                    </ul><br>
                    <h4 class="text-left text-lg font-semibold">VALOR: 269,99</h4>
                    <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20quádruplo." target="_blank">
                        <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                    </a>
                </div>
            </div>
            <!-- Quinto card dos quartos -->   
            <div class="border border-gray-300">
                <img src="https://s2.glbimg.com/QA7LmbS-ozlHO2u_9v3UbxbSr2A=/620x455/e.glbimg.com/og/ed/f/original/2021/06/29/ipiranga0184.jpg" alt="foto-quarto" class="w-full object-cover">
                <div class="p-6">
                    <h4 class="text-left text-lg font-semibold">APARTAMENTO QUINTUPLO</h4>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Conforto para 5 pessoas</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Ar condicionado</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Wi-Fi gratuito</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Guarda-Roupas</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>Frigobar</li>
                        <li class="flex items-center"><i class="fas fa-check mr-2"></i>TV a Cabo</li>
                    </ul><br>
                    <h4 class="text-left text-lg font-semibold">VALOR: 359,99</h4>
                    <a href="https://wa.me/5584991166551?text=Olá,%20quero%20reservar%20o%20quarto%20quádruplo." target="_blank">
                        <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                    </a>
                </div>
            </div>
        </div><br><br>
    </div>
</div>
<br><br><br><br><br>

<x-footer />

@livewireScripts
</body>
