<x-layout>

<div class="bg-gray-300 h-[70vh] pt-4 flex items-center justify-center overflow-hidden">
  <img 
    alt="Placeholder image" 
    class="h-full w-full object-cover" 
    src="{{asset('storage/'.$rooms_banners->image)}}" 
  />
</div>

<div class="flex flex-col md:flex-row justify-between items-start mt-8 px-4 md:px-40">
  <div class="md:w-1/2">
    <h1 class="text-3xl font-bold text-black text-center md:text-left">{{$rooms_banners->title}}</h1>
  </div>
  <div class="md:w-1/2 mt-4 md:mt-0">
    <p class="text-gray-700 text-center md:text-left">{{$rooms_banners->text}}</p>
    <div class="mt-4 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center sm:justify-start">
      <a href="https://wa.me/{{$contacts->wbusiness}}?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20o%20menu." target="_blank">
        <button class="border border-black text-black py-2 px-4 w-full sm:w-auto">Reservar Agora</button>
      </a>

      <button 
        class="border border-black text-black py-2 px-4 w-full sm:w-auto" 
        onclick="scrollToSection('reservas')">
        Saiba Mais
      </button>

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
        <div class="flex flex-wrap gap-4 justify-between">
            <!-- Room Cards -->
            <div class="flex flex-wrap justify-center gap-4">
                @foreach ($rooms_cards as $RoomsCard)
                <div class="border border-gray-300 carousel-container w-full sm:w-[calc(50%-1rem)] md:w-[calc(33.33%-1rem)] lg:w-[calc(33.33%-1rem)]">
                    <div class="relative overflow-hidden">
                        <div class="flex transition-transform duration-700 ease-in-out carousel" id="carousel-content-1">
                            @foreach ($RoomsCard->roomImages as $roomImage)
                                @foreach ($roomImage->image as $roomFoto) 
                                <div class="min-w-full">
                                    <img src="{{asset('storage/'.$roomFoto)}}" alt="foto-quarto" class="w-full h-[350px] object-cover">
                                </div>
                                @endforeach
                            @endforeach
                        </div>
                        <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 prev-btn" data-target="carousel-content-1">&#10094;</button>
                        <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-700 text-white px-3 py-1 next-btn" data-target="carousel-content-1">&#10095;</button>
                    </div>
                    <div class="p-6">
                        <h4 class="text-left text-lg font-semibold">{{$RoomsCard->title}}</h4>
                        <p class="mt-4">{!!$RoomsCard->text!!}</p><br>
                        <h4 class="text-left text-lg font-semibold">{{ 'R$ ' . number_format($RoomsCard->price, 2) }}</h4>
                        <a href="https://wa.me/{{$contacts->wbusiness}}?text=Ol%C3%A1,%20gostaria%20de%20reservar%20um%20quarto%20no%20Hotel%20Conterr%C3%A2neo.%20Podem%20me%20passar%20os%20detalhes%20de%20disponibilidade%20e%20tarifa%3F" target="_blank">
                            <button class="mt-4 w-full bg-yellow-500 text-black py-2">Reserve agora</button>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

    <!-- Código javascript para funcionamento dos carroseis dos cards -->
    <script>
        document.querySelectorAll('.carousel-container').forEach(container => {
            let currentIndex = 0;
            const carousel = container.querySelector('.carousel');
            const totalSlides = carousel.children.length;

            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            container.querySelector('.next-btn').addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            });

            container.querySelector('.prev-btn').addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateCarousel();
            });
        });
    </script>
<br><br><br><br><br>

</x-layout>