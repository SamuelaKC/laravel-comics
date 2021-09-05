<!DOCTYPE html>
<html lang="en">
<!-- Create un nuovo progetto Laravel, su cui lavoreremo sia oggi che domani.
Oggi concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
Create poi le rotte di home page e product e abbellite il tutto sfruttando Sass.
Bonus: Create più pagine istituzionali che condividono lo stesso layout. Per esempio un about-us.
Qui tutto ciò che riguarda l’url generation e le route in blade https://laravel.com/docs/7.x/urls#introduction
Slide e video arrivano a breve

Ciao ragazzi,
oggi continuate a lavorare nella stessa repo di ieri: laravel-comics
Completate l’homepage con la lista dei fumetti e poi create una pagina di dettaglio per visualizzare tutte le informazioni di un fumetto.
Definite quindi una rotta che avrà un parametro per poter visualizzare dinamicamente tutte le pagine di dettaglio.
Infine, fate sì che cliccando sulla card di un fumetto si possa accedere alla relativa pagina di dettaglio.
Bonus: Aggiungete e stilate la classe active alla giusta voce del menu
Buon lavoro e buon weekend!! :laptop_parrot:


-->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DC COMICS - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <script src="{{ mix('/js/app.js') }}"></script>
</head>

<body id="secBody" class="{{ Request::route()->getName() === 'product' ? 'active' : '' }}">
    <header>
        @include('templates.header')
    </header>
    <section>
        @yield('content')
    </section>
    <footer>
        @include('templates.footer')
    </footer>
</body>

</html>