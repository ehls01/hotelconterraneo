<footer class="container mx-auto bg-white py-8 border-t border-gray-400">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center md:text-left">
                <i class="fas fa-envelope text-4xl mb-4"></i>
                <h2 class="text-2xl font-bold mb-2">Email</h2>
                <p class="mb-2">Entre em contato conosco para mais informações ou para fazer sua reserva.</p>
                <p class="text-black-500">hotelconterraneo-mossoro@hotmail.com</p>
            </div>

            <div class="text-center md:text-left">
                <i class="fas fa-phone text-4xl mb-4"></i>
                <h2 class="text-2xl font-bold mb-2">Contato</h2>
                <p class="mb-2">Estamos disponíveis para atender suas dúvidas e reservas.</p>
                <p class="text-black-500">+55 (84) 99116-6551 - +55 (84) 3318-1691</p>
            </div>
            
            <div class="text-center md:text-left">
                <i class="fas fa-map-marker-alt text-4xl mb-4"></i>
                <h2 class="text-2xl font-bold mb-2">Endereço</h2>
                <p class="mb-2">Visite-nos ou entre em contato para mais informações.</p>
                <p class="text-black-500">Rua Gilberto Marcelino Sobrinho, 62 - Nova Betânia, 5907-450</p>
                <button id="show-map-btn" class="mt-2 bg-yellow-400 text-black py-2 px-4">Ver Mapa</button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
            <div class="flex flex-col items-center md:flex-row md:justify-between">
                <div class="text-center md:text-left">
                    <img src="../imgs/hotelLogo.png" alt="logo do hotel" class="w-16 h-16">
                </div>

                <div class="text-center md:text-left mt-4 md:mt-0">
                    <div id="map-container" class="map-container mb-4" style="display: none;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.49643337478!2d-37.36993402424627!3d-5.184351252312855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ba06bddcec37d5%3A0xe62a09807e7437fb!2sHotel%20Conterr%C3%A2neo!5e0!3m2!1spt-BR!2sbr!4v1730399575404!5m2!1spt-BR!2sbr" width="1500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <button id="close-map-btn" class="mt-2 bg-red-500 text-white py-2 px-4">Fechar Mapa</button>
                    </div><br>
                    <h2 class="text-2xl font-bold mb-2">Siga-nos</h2>
                    <div class="flex">
                        <a href="https://www.facebook.com/hotelconterraneomossoro/?locale=pt_BR" class="text-black mx-2" target="_blank">
                            <img src="imgs/facebook.png" class="w-8 h-8" alt="Facebook">
                        </a>
                        <a href="https://www.instagram.com/hotelconterraneooficial/" class="text-black mx-2" target="_blank">
                            <img src="imgs/instagram.webp" class="w-8 h-8" alt="Instagram">
                        </a>
                        <a href="https://br.linkedin.com/company/hotel-conterr%C3%A2neo" class="text-black mx-2" target="_blank">
                            <img src="imgs/linkedin.png" class="w-8 h-8" alt="LinkedIn">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById("show-map-btn").onclick = function() {
                document.getElementById("map-container").style.display = "block";
                this.style.display = "none"; // Esconder o botão após o clique
            };

            document.getElementById("close-map-btn").onclick = function() {
                document.getElementById("map-container").style.display = "none";
                document.getElementById("show-map-btn").style.display = "block"; // Mostrar o botão novamente
            };
        </script>

        <div class="border-t border-gray-300 mt-16 pt-4 text-center md:text-left">
            <p class="text-sm">&copy; 2024 @emanoelheron. Todos os direitos reservados. <a href="#" class="text-black-500">Política de Privacidade</a> <a href="#" class="text-blue-500">Termos de Serviço</a> <a href="#" class="text-blue-500">Configurações de Cookies</a></p>
            <div class="flex justify-center md:justify-start mt-4"></div>
        </div>
    </div>
</footer>
