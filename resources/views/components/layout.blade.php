<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GymBro</title>
  
 
     <!-- icone bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

     @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  <body>

   <x-navbar/>

    {{ $slot }}

   
  </body>
</html>