<x-layout>

    <!-- Carousel Section -->
    <div class="h-[70vh] pt-4 overflow-hidden relative" id="carousel-container">
        <!-- Carousel Wrapper -->
        <div class="flex transition-transform duration-500 ease-in-out h-full" id="carousel">
            @foreach ($leisure_carousels as $LeisureCarousel)
            <!-- Slide -->
            <div class="flex-shrink-0 w-full flex relative h-full">
                @foreach ($LeisureCarousel->image as $image)
                <img 
                    alt="Piscina" 
                    class="h-full w-full object-cover" 
                    src="{{asset('storage/'.$LeisureCarousel->image[0])}}"/>
                @endforeach
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 p-8 md:p-12">
                    <p class="text-2xl md:text-3xl font-semibold text-white text-center max-w-[80%] md:max-w-[70%]">
                        {{$LeisureCarousel->text}}
                    </p>
                </div>

            </div>
            @endforeach
        </div>

        <!-- Prev Button -->
        <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black text-white p-2 rounded-full shadow-lg z-10">
            &#10094;
        </button>

        <!-- Next Button -->
        <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black text-white p-2 rounded-full shadow-lg z-10">
            &#10095;
        </button>
    </div>

    <!-- JavaScript for manual slide change -->
    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('#carousel > div');
        const totalSlides = slides.length;

        const showSlide = (index) => {
            document.getElementById('carousel').style.transform = `translateX(-${index * slides[0].offsetWidth}px)`;
        };

        document.getElementById('next').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            showSlide(currentIndex);
        });

        document.getElementById('prev').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            showSlide(currentIndex);
        });
    </script>

    <!-- POSTS -->
    <div class="flex flex-col md:flex-row justify-between items-start mt-8 px-4 md:px-40">
        <div class="md:w-1/2">
            <h1 class="text-3xl font-bold text-black text-center md:text-left">Lazer e Atividades</h1>
        </div>
        <div class="md:w-1/2 mt-4 md:mt-0">
            <p class="text-gray-700 text-center md:text-left">
                Descubra as opções de lazer e atividades oferecidas pelo Hotel Conterrâneo. Aproveite a piscina, relaxe na área verde e traga seu pet para desfrutar de momentos especiais.
            </p>
            <div class="mt-4 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center sm:justify-start">
            <a href="https://wa.me/{{$contacts->wbusiness}}?text=Ol%C3%A1,%20gostaria%20de%20saber%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20Hotel%20Conterr%C3%A2neo.%20Podem%20me%20passar%20os%20detalhes%3F" target="_blank">
                    <button class="border border-black text-black py-2 px-4 w-full sm:w-auto">Reservar Agora</button>
                </a>
            </div>
        </div>
    </div>

    <div id="explorar" class="container mx-auto text-center py-12">
        <h1 class="text-4xl font-bold mb-4">Principais comodidades do nosso hotel!</h1><br>
        <!-- <p class="text-lg text-gray-600 mb-8">Descubra o melhor do nosso hotel em fotos.</p> -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            @foreach ($home_cards as $HomeCard)
            <div class="bg-white border border-gray300 overflow-hidden">
                <img alt="Imagem de um quarto de hotel" class="w-full h-[300px] object-cover"  src="{{asset('storage/'.$HomeCard->image)}}" width="400"/>
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">{{$HomeCard->title}}</h2>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <br><br><br>

    </x-layout>