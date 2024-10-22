<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Conterrâneo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/logohotel" sizes="48x48" type="image/x-icon">
</head>
<body>

<x-navbar />

<div class="bg-cover bg-center h-screen" style="background-image: url('https://placehold.co/1920x1080');">
    <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
        <div class="text-center text-white">
            <h1 class="text-5xl font-bold mb-4">Bem-vindo ao hotel Conterrâneo!</h1>
            <p class="text-lg mb-8">Descubra um refúgio de conforto e hospitalidade. Explore nossas acomodações e serviços pensados para tornar sua estadia inesquecível.</p>
            <div class="space-x-4">
                <button class="bg-black text-white px-6 py-2 rounded">Explorar</button>
                <button class="border border-white text-white px-6 py-2 rounded">Reservar</button>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto text-center py-12">
    <h1 class="text-4xl font-bold mb-4">Galeria de Imagens</h1>
    <p class="text-lg text-gray-600 mb-8">Descubra o melhor do nosso hotel em fotos.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img alt="Imagem de um quarto de hotel" class="w-full" height="400" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-RcpoXHkzChYnDbFAyeQ8tamr/user-ehrvabJ3DufsCu8YJ7PqY5gl/img-UV4X8KcssCjlTW1nAiNHcm4H.png?st=2024-09-29T19%3A49%3A14Z&amp;se=2024-09-29T21%3A49%3A14Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-29T01%3A05%3A22Z&amp;ske=2024-09-30T01%3A05%3A22Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=nCiSKy81TPMxeShVsZGcKDwYgNtrbm3y3IikA0ZTxBI%3D" width="400"/>
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Conforto &amp; Lazer</h2>
                <button class="bg-yellow-500 text-white px-4 py-2 rounded">Faça sua reserva</button>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img alt="Imagem de um cachorro e um gato em um quarto de hotel" class="w-full" height="400" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-RcpoXHkzChYnDbFAyeQ8tamr/user-ehrvabJ3DufsCu8YJ7PqY5gl/img-ujDlBDpEeR9Vdo3NYkgPEpWE.png?st=2024-09-29T19%3A49%3A13Z&amp;se=2024-09-29T21%3A49%3A13Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-29T01%3A57%3A52Z&amp;ske=2024-09-30T01%3A57%3A52Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=%2BPcePJ0QsBLGqRaO3c7jgcUDubfZgdifytk//bVut%2Bc%3D" width="400"/>
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Seu Pet é mais do que bem vindo</h2>
                <button class="bg-yellow-500 text-white px-4 py-2 rounded">O conforto que seu Pet merece!</button>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img alt="Imagem de pratos de comida" class="w-full" height="400" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-RcpoXHkzChYnDbFAyeQ8tamr/user-ehrvabJ3DufsCu8YJ7PqY5gl/img-Egedee0Srqhcx8J6300s0XzF.png?st=2024-09-29T19%3A49%3A11Z&amp;se=2024-09-29T21%3A49%3A11Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-29T02%3A35%3A23Z&amp;ske=2024-09-30T02%3A35%3A23Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=yI%2BAu6pkfCUZiDle2hi83uAZUC1Ab4MOnx2cknhQoXg%3D" width="400"/>
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">Culinária Única</h2>
                <button class="bg-yellow-500 text-white px-4 py-2 rounded">Conheça nosso cardápio</button>
            </div>
        </div>
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <img alt="Imagem de uma piscina" class="w-full" height="400" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-RcpoXHkzChYnDbFAyeQ8tamr/user-ehrvabJ3DufsCu8YJ7PqY5gl/img-ZOZiEpdCWnWOpOoKbvAb84mT.png?st=2024-09-29T19%3A49%3A17Z&amp;se=2024-09-29T21%3A49%3A17Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-29T00%3A58%3A01Z&amp;ske=2024-09-30T00%3A58%3A01Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=TDyBgtDed47LFeVwYzNvxe9rNeTUqmks0RUcK4HsH5k%3D" width="400"/>
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2">O lazer que você merece!</h2>
                <button class="bg-yellow-500 text-white px-4 py-2 rounded">Aproveite sua estadia</button>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto p-8">
    <div class="flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-8 md:mb-0">
            <h1 class="text-3xl font-bold mb-4">
                Descubra os benefícios de se hospedar em nosso hotel encantador.
            </h1>
            <p class="mb-6">
                Nosso hotel oferece uma localização privilegiada, perfeita para explorar a cidade. Desfrute de um delicioso café da manhã incluso e wi-fi gratuito durante sua estadia.
            </p>
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-4 md:mb-0">
                    <h2 class="font-bold">
                        Pet friendly
                    </h2>
                    <p>
                        Aceitamos seu animalzinho de estimação com maior carinho em nosso espaço.
                    </p>
                </div>
                <div class="md:w-1/2">
                    <h2 class="font-bold">
                        Café da Manhã
                    </h2>
                    <p>
                        Saboreie um café da manhã variado, preparado com ingredientes frescos e locais.
                    </p>
                </div>
            </div>
        </div>
        <div class="md:w-1/2">
            <img alt="Imagem de um quarto de hotel confortável com uma cama, ar-condicionado e decoração aconchegante" class="w-full h-auto" height="400" src="https://barahotel.com.br/wp-content/uploads/2022/10/DSC_4645-HDR-2.webp" width="600"/>
        </div>
    </div>
</div>

<x-footer />

</body>
</html>