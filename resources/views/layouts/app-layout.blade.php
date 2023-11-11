<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8iQK2dtIH57lWNbF5/RYB1IS0Ipa8A8t+YFFeYN8ZjOF6eii1p5E2iK1Tf" crossorigin="anonymous">
    <script
  type="text/javascript"
  src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body>
    <x-navbar></x-navbar>
    {{ $slot }}
</body>
</html>