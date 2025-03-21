<x-layout>
<div class="bg-cover pt-4 bg-center h-screen" style="background-image:url('{{asset('storage/'.$home_banners[0]->image)}}')">
    <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold mb-4"> {{$home_banners[0]->title}}</h1>
            <p class="text-lg mb-8"> {{$home_banners[0]->text}}</p>

            <div class="space-x-4">
                <a>
                    <button class="border border-white text-white px-6 py-2 rounded" onclick="scrollToSection('reservas')"> Explorar </button>
                </a>
                <a href="https://wa.me/{{$contacts->wbusiness}}?text=Ol%C3%A1,%20gostaria%20de%20saber%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20Hotel%20Conterr%C3%A2neo.%20Podem%20me%20passar%20os%20detalhes%3F" target="_blank">
                    <button class="border border-white text-white px-6 py-2 rounded">Reservar</button>
                </a>
            </div>
        </div>
    </div>
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
<br><br><br><br>
</x-layout>