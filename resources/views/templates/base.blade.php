<!DOCTYPE html>
<html lang="en">
<!-- Create un nuovo progetto Laravel, su cui lavoreremo sia oggi che domani.
Oggi concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
Create poi le rotte di home page e product e abbellite il tutto sfruttando Sass.
Bonus: Create più pagine istituzionali che condividono lo stesso layout. Per esempio un about-us.
Qui tutto ciò che riguarda l’url generation e le route in blade https://laravel.com/docs/7.x/urls#introduction
Slide e video arrivano a breve   -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DC COMICS - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;700&display=swap');
    </style>
    <script src="{{ mix('/js/app.js') }}"></script>
</head>

<body>
    <header>
        @include('templates.header')
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        @include('templates.footer')
    </footer>
</body>

</html>