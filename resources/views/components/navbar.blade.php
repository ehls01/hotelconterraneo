<div class="px-4 mx-auto max-w-full sm:px-6 bg-yellow-500 fixed top-0 left-0 right-0">
    <div class="relative pt-6 pb-6 sm:pb-8">
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
            <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="/">
                        <img src="imgs/logohotel" class="w-16 h-16 transition-transform duration-200 ease-in-out hover:scale-105" alt="logo hotel conterraneo">
                    </a>
                    <!-- Botão do menu hambúrguer para mobile -->
                    <div class="flex items-center -mr-2 md:hidden">
                        <button id="hamburger-button" class="inline-flex items-center justify-center p-2 text-black bg-gray-50 rounded-md hover:text-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-50" type="button" aria-expanded="false">
                            <span class="sr-only">Menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Menu para desktop -->
            <div id="nav-menu" class="hidden md:flex md:space-x-10 list-none">
                <li class="list-none">
                    <a href="/sobre" class="text-lg font-normal text-black hover:text-white no-underline dark:text-black dark:hover:text-white">Sobre Nós</a>
                </li>

                <li class="list-none">
                    <a href="/quartos" class="text-lg font-normal text-black hover:text-white no-underline dark:text-black dark:hover:text-white">Nossos Quartos</a>
                </li>

                <li class="list-none">
                    <a href="/cafe" class="text-lg font-normal text-black hover:text-white no-underline dark:text-black dark:hover:text-white">Café da Manhã</a>
                </li>
                
                <li class="list-none">
                    <a href="/lazer" class="text-lg font-normal text-black hover:text-white no-underline dark:text-black dark:hover:text-white">Lazer</a>
                </li>
            </div>

            <!-- Menu para mobile -->
            <div id="mobile-menu" class="hidden fixed inset-x-0 top-0 h-1/2 flex flex-col justify-center items-center bg-yellow-900 text-center z-50">
                <!-- Botão para fechar o menu -->
                <div class="absolute top-4 right-4">
                    <button id="close-menu" class="text-black bg-gray-50 rounded-md p-2 focus:outline-none hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <li class="list-none py-4">
                    <a href="/" class="text-2xl font-bold text-black hover:text-white no-underline dark:text-black dark:hover:text-white">Página Inicial</a>
                </li>

                <li class="list-none py-4">
                    <a href="/sobre" class="text-2xl font-bold text-black hover:text-white no-underline dark:text-black dark:hover:text-white">Sobre Nós</a>
                </li>

                <li class="list-none py-4">
                    <a href="/quartos" class="text-2xl font-bold text-black hover:text-white no-underline dark:text-black dark:hover:text-white">Nossos Quartos</a>
                </li>

                <li class="list-none py-4">
                    <a href="/cafe" class="text-2xl font-bold text-black hover:text-white no-underline dark:text-black dark:hover:text-white">Café da Manhã</a>
                </li>
                
                <li class="list-none py-4">
                    <a href="/lazer" class="text-2xl font-bold text-black hover:text-white no-underline dark:text-black dark:hover:text-white">Lazer</a>
                </li>
            </div>
        </nav>
    </div>
</div>

<div class="pt-20"></div>

<script>
    // Função para alternar a visibilidade do menu mobile
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenuButton = document.getElementById('close-menu');

    // Abrir o menu
    hamburgerButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });

    // Fechar o menu ao clicar no botão de fechar
    closeMenuButton.addEventListener('click', function() {
        mobileMenu.classList.add('hidden');
    });

    // Fechar o menu mobile ao redimensionar a tela
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 768) {
            mobileMenu.classList.add('hidden');
        }
    });
</script>
