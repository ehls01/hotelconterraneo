<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Hotel Conterrâneo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/hotelLogo.png" sizes="48x48" type="image/x-icon">
    @livewireStyles
</head>

<body>

<x-navbar />

<div class="bg-white text-gray-900">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row items-center">
        <div class="w-full md:w-1/2 flex justify-center">
            <img
                alt="Imagem do Hotel"
                class="w-[800px] h-[600px] object-cover rounded-lg"
                src="{{asset('storage/'.$about_banners->image)}}"
            />
        </div>
        <div class="w-full md:w-1/2 md:pl-8 mt-4 md:mt-0">
            <h1 class="text-4xl font-bold mt-4">{{$about_banners->title}}</h1>
            <p class="text-lg text-gray-600 mt-4">{{$about_banners->text}}</p>
            <div class="mt-6 flex space-x-4">
                <a>
                    <button class="px-4 py-2 border border-gray-900 text-gray-900 hover:bg-gray-100" onclick="scrollToSection('reservas')">Saiba mais</button>
                </a>
                <a href="https://wa.me/{{$contacts->wbusiness}}?text=Ol%C3%A1,%20gostaria%20de%20reservar%20um%20quarto%20individual%20no%20Hotel%20Conterr%C3%A2neo.%20Podem%20me%20passar%20os%20detalhes%20de%20disponibilidade%20e%20tarifa%3F" target="_blank">
                    <button class="px-4 py-2 border border-black text-gray-900">Reservar agora</button>
                </a>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

<div id="equipe" class="bg-white text-gray-800">
    <section class="text-center py-12">
      <h1 class="text-4xl font-bold text-gray-900 mt-2">Nossa equipe</h1>
      <p class="text-gray-600 mt-4">Conheça nossa incrível equipe de profissionais.</p>
    </section>
    <section class="max-w-6xl mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        @foreach ($about_members as $AboutMember)
        <div class="text-center">
          <div class="flex items-center justify-center">
            <img
              alt="Foto de {{$AboutMember->name}}"
              class="h-56 w-56 object-cover rounded-full border-4 border-yellow-300"
              height="220"
              src="{{asset('storage/'.$AboutMember->image)}}"
              width="220"
            />
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mt-4">{{$AboutMember->name}}</h3>
          <p class="text-gray-500">{{$AboutMember->position}}</p>
          <p class="text-gray-600 mt-2">{{$AboutMember->text}}</p>
          <div class="flex justify-center space-x-4 mt-4">
            @if (isset($AboutMember->instagram))
            <a class="text-gray-500 hover:text-gray-900" href="{{$AboutMember->instagram}}">
              <i class="fab fa-instagram"></i>
            </a>
            @endif
          </div>
        </div>
        @endforeach
  
        </div>
      </div>
    </section>
  <br><br><br><br>

<x-footer />

@livewireScripts
</body>