<style>
.map-container iframe {
    width: 100%;
    max-width: 100%;
    height: 600px;
}

@media (max-width: 1024px) { 
    .map-container iframe {
        height: 400px;
    }
}

@media (max-width: 768px) { 
    .map-container iframe {
        height: 300px;
    }
}
</style>

<footer class="container mx-auto bg-white py-8 border-t border-gray-400">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center md:text-left">
                <i class="fas fa-envelope text-4xl mb-4"></i>
                <h2 class="text-2xl font-bold mb-2">Email</h2>
                <p class="mb-2">Entre em contato conosco para mais informações ou para fazer sua reserva.</p>
                <p class="text-black-500">{{$contacts->email}}</p>
            </div>

            <div class="text-center md:text-left">
                <i class="fas fa-phone text-4xl mb-4"></i>
                <h2 class="text-2xl font-bold mb-2">Contato</h2>
                <p class="mb-2">Estamos disponíveis para atender suas dúvidas e reservas.</p>
                <p class="text-black-500">{{$contacts->number}}</p>
            </div>
            
            <div class="text-center md:text-left">
                <i class="fas fa-map-marker-alt text-4xl mb-4"></i>
                <h2 class="text-2xl font-bold mb-2">Endereço</h2>
                <p class="mb-2">Visite-nos ou entre em contato para mais informações.</p>
                <p class="text-black-500">{{$contacts->address}}</p>
            </div>
        </div>

        <!-- Mapa -->
        <div class="map-container my-8">
            <iframe src="{{$contacts->map}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <iframe 
                src="https://maps.app.goo.gl/seikfFWvbhNCrq8i8" 
                width="100%" 
                style="border:0;" 
                allowfullscreen 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe> -->
        </div>

        <!-- Siga-nos -->
        <div class="text-center mt-8">
            <h2 class="text-2xl font-bold mb-2">Siga-nos</h2>
            <div class="flex justify-center">
                <a href="{{$contacts->facebook}}" class="mx-2" target="_blank">
                    <img src="imgs/facebook.png" class="w-8 h-8" alt="Facebook">
                </a>
                <a href="{{$contacts->instagram}}" class="mx-2" target="_blank">
                    <img src="imgs/instagram.webp" class="w-8 h-8" alt="Instagram">
                </a>
                <a href="{{$contacts->linkedin}}" class="mx-2" target="_blank">
                    <img src="imgs/linkedin.png" class="w-8 h-8" alt="LinkedIn">
                </a>
            </div><br>
            <div>
            <a href="/admin" class=" bg-yellow-500 text-white font-bold px-4 py-2 rounded-lg shadow-md hover:bg-yellow-700 z-50">
                Admin
            </a>
            </div>
        </div>

        <div class="border-t border-gray-300 mt-16 pt-4 text-center">
            <p class="text-sm">&copy; 2024 @emanoelheron. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>
