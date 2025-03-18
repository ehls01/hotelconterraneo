<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Conterrâneo</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="icon" href="imgs/hotelLogo.png" sizes="48x48" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    
<x-navbar/>

{{ $slot }}

<x-footer />

@livewireScripts
</body>
