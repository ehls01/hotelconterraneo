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

<x-navbar />

<div class="bg-gray-300 h-[70vh] flex items-center justify-center overflow-hidden">
  <img 
    alt="Placeholder image" 
    class="h-full w-full object-cover" 
    src="https://sandihotel.com.br/wp-content/uploads/2022/09/Hotel-em-paraty-sandi-pousada-centro-historico-gastronomia-cafe-da-manha-1-1-1.jpg" 
  />
</div>
<div class="flex flex-col md:flex-row justify-between items-start mt-8 px-6">
  <div class="md:w-1/2">
    <h1 class="text-3xl font-bold text-black">
      Comece o dia com um café delicioso
    </h1>
  </div>
  <div class="md:w-1/2 mt-4 md:mt-0">
    <p class="text-gray-700">
      Nosso café da manhã oferece uma variedade de opções deliciosas para satisfazer todos os gostos. Com ingredientes frescos e preparados com cuidado, garantimos uma refeição matinal de alta qualidade.
    </p>
    <div class="mt-4 flex space-x-4"> <!-- Alterei para flex -->
        <a href="https://wa.me/5584991166551?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20o%20menu." target="_blank">
            <button class="border border-black text-black py-2 px-4">Reservar Agora</button>
        </a>

        <button 
            class="border border-black text-black py-2 px-4" 
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
  </div>
</div><br><br><br><br>

<div class="bg-white text-gray-800">
    <div class="container mx-auto py-12">
      <h1 class="text-3xl font-bold text-center mb-12">
        Desfrute de um delicioso café da manhã no nosso hotel
      </h1>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="text-center">
          <img alt="Placeholder image for breakfast menu options" class="mx-auto mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/VbKUPyl2He1wOanM8jZh0KfSkO6DsN8VSgZA3zaax4HypuqTA.jpg" width="400"/>
          <h2 class="text-xl font-semibold mb-2">
            Opções de cardápio para o café da manhã
          </h2>
          <p class="mb-4">
            Nosso café da manhã é servido em um ambiente acolhedor e com um atendimento impecável
          </p>
          <a class="text-blue-500 font-semibold" href="#opcoes">
            Saiba mais
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>

        <div class="text-center">
          <img alt="Placeholder image for breakfast hours" class="mx-auto mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/XCYqcNWTqQrnI5EXW2PltTWOoAPCRaUBo3V6pact9lzcqr6E.jpg" width="400"/>
          <h2 class="text-xl font-semibold mb-2">
            Horários do café da manhã
          </h2>
          <p class="mb-4">
            Confira os horários em que servimos o café da manhã
          </p>
          <a class="text-blue-500 font-semibold" href="#horarios">
            Ver horários
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>

        <div class="text-center">
          <img alt="Placeholder image for breakfast options" class="mx-auto mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/ZUiJIhj5hIK3PZsyk0u6BFnTNrisqOqKIfVsbcIAFST4UX1JA.jpg" width="400"/>
          <h2 class="text-xl font-semibold mb-2">
            Opções de café da manhã para todos os gostos
          </h2>
          <p class="mb-4">
            Oferecemos uma variedade de opções de café da manhã para atender a todos os paladares
          </p>
          <a class="text-blue-500 font-semibold" href="#">
            Explorar
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>
      </div>
    </div>
</div><br><br><br><br>

<div id="opcoes" class="bg-white text-gray-900">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2">
                <h1 class="text-4xl font-bold mt-2">Opções de Cardápio do Café da Manhã</h1>
                <p class="mt-4 text-lg">Comece o seu dia com um café da manhã delicioso e variado. Temos diversas opções de cardápio para atender a todos os gostos.</p>
                <div class="flex mt-4 space-x-8">
                    <div class="flex items-start">
                        <i class="fas fa-cube text-2xl"></i>
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold">Frutas Frescas</h3>
                            <p class="mt-2">Desfrute de uma seleção de frutas frescas e suculentas para começar o dia com energia.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-cube text-2xl"></i>
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold">Pães Variados</h3>
                            <p class="mt-2">Experimente uma variedade de pães frescos e crocantes, incluindo pães integrais e de fermentação natural.</p>
                        </div>
                    </div>
                </div>
                <div class="flex mt-4 space-x-4 mb-2"> <!-- Ajustei a margem inferior aqui -->
                    <button class="px-4 py-2 border border-black text-black font-semibold">Ver Menu</button>
                    <button class="border border-black px-4 py-2 text-black font-semibold flex items-center">
                        Reservar Agora <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
            <div class="lg:w-1/2 w-full flex justify-center">
                <div class="bg-gray-300 w-96 h-96 flex items-center justify-center">
                    <img src="https://storage.googleapis.com/a1aa/image/XCYqcNWTqQrnI5EXW2PltTWOoAPCRaUBo3V6pact9lzcqr6E.jpg" alt="Descrição da imagem" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </div>
</div>

<div id="horarios" class="bg-white flex items-center justify-center min-h-screen">
    <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center">
        <div class="lg:w-1/2 w-full mb-4 lg:mb-0">
            <h1 class="text-3xl font-bold mb-2">Horários do café da manhã</h1>
            <p class="text-lg mb-2">Comece o seu dia com o café da manhã delicioso e conveniente oferecido pelo nosso hotel. Desfrute de uma variedade de opções de cardápio e aproveite a qualidade dos alimentos preparados especialmente para você.</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>Conveniência para começar o dia com energia</li>
                <li>Alimentos frescos e saborosos para satisfazer o paladar</li>
                <li>Opções saudáveis para uma alimentação equilibrada</li>
            </ul>
        </div>

        <div class="lg:w-1/2 w-full flex justify-center">
            <div class="bg-gray-300 w-96 h-96 flex items-center justify-center">
                <img src="https://storage.googleapis.com/a1aa/image/XCYqcNWTqQrnI5EXW2PltTWOoAPCRaUBo3V6pact9lzcqr6E.jpg" alt="Descrição da imagem" class="w-full h-full object-cover" />
            </div>
        </div>

    </div>
</div>


<x-footer />