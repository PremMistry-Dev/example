<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Website</title>

     
    </head>
    <body>
   <nav>
      <x-nav-link href="/">Home</x-nav-link>
      <x-nav-link href="/about">About</x-nav-link>
      <x-nav-link href="/contact">Contact</x-nav-link>
      <!-- <h1>Hi poppsy!!</h1> -->
   </nav>
      {{ $slot }}
    </body>
</html>
