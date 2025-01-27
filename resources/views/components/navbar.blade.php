<body>
  <div class="px-4 mx-auto max-w-full sm:px-32 bg-yellow-500 bg-opacity-80 backdrop-blur-md fixed top-0 left-0 right-0 z-50">
    <div class="relative py-6 flex items-center justify-between">
      <a href="/" class="inline-block w-44 sm:w-60 h-16 sm:h-20 bg-white bg-opacity-70 rounded-xl shadow-md flex justify-center items-center">
        <img src="imgs/conterraneo-logo.png" class="h-12 sm:h-16 transition-transform duration-200 ease-in-out hover:scale-105" alt="logo hotel conterraneo">
      </a>

      <!-- Menu desktop -->
      <ul id="nav-menu" class="hidden xl:flex space-x-6 sm:space-x-10 items-center">
        <li><a href="/sobre" class="text-sm sm:text-lg font-bold text-black hover:text-white">SOBRE NÓS</a></li>
        <li><a href="/quartos" class="text-sm sm:text-lg font-bold text-black hover:text-white">NOSSOS QUARTOS</a></li>
        <li><a href="/cafe" class="text-sm sm:text-lg font-bold text-black hover:text-white">CAFÉ DA MANHÃ</a></li>
        <li><a href="/lazer" class="text-sm sm:text-lg font-bold text-black hover:text-white">LAZER</a></li>
      </ul>

      <!-- Botão menu hambúrguer -->
      <button id="hamburger-button" class="xl:hidden p-2 bg-gray-50 rounded-md hover:bg-gray-100 focus:ring-2 focus:ring-inset focus:ring-gray-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Menu mobile -->
  <div id="mobile-menu" class="hidden fixed top-0 left-0 right-0 bg-opacity-80 backdrop-blur-md z-50 flex flex-col items-center justify-center space-y-6 transform transition-transform duration-300 ease-in-out bg-yellow-500 text-center py-6">
    <button id="close-menu" class="absolute top-4 right-4 p-2 bg-gray-50 rounded-md hover:bg-gray-100">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    <a href="/" class="text-2xl font-bold text-black hover:text-white">Página Inicial</a>
    <a href="/sobre" class="text-2xl font-bold text-black hover:text-white">Sobre Nós</a>
    <a href="/quartos" class="text-2xl font-bold text-black hover:text-white">Nossos Quartos</a>
    <a href="/cafe" class="text-2xl font-bold text-black hover:text-white">Café da Manhã</a>
    <a href="/lazer" class="text-2xl font-bold text-black hover:text-white">Lazer</a>
  </div>

  <div class="pt-24"></div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const hamburgerButton = document.getElementById("hamburger-button");
      const mobileMenu = document.getElementById("mobile-menu");
      const closeMenuButton = document.getElementById("close-menu");

      hamburgerButton.addEventListener("click", () => {
        mobileMenu.classList.remove("hidden");
        mobileMenu.classList.add("translate-x-0"); // Transição para mostrar o menu
      });
      
      closeMenuButton.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
        mobileMenu.classList.remove("translate-x-0"); // Transição para esconder o menu
      });

      window.addEventListener("resize", () => {
        if (window.innerWidth >= 1100) {
          mobileMenu.classList.add("hidden");
          mobileMenu.classList.remove("translate-x-0");
        }
      });
    });
  </script>

  <style>
    /* Garantir altura e alinhamento responsivo */
    .relative {
      min-height: 5rem;
    }

    /* Ajuste do menu desktop */
    @media (max-width: 1100px) {
      #nav-menu {
        display: none;
      }
    }

    /* Efeitos de transição */
    #mobile-menu {
      transform: translateX(-100%); /* Menu fora da tela inicialmente */
      width: auto; /* Ajusta a largura conforme o conteúdo */
      padding-left: 1rem; /* Garante um pequeno espaço nas laterais */
      padding-right: 1rem; /* Ajuste de padding lateral */
    }
    
    #mobile-menu.translate-x-0 {
      transform: translateX(0); /* Menu entra na tela */
    }
  </style>
</body>
