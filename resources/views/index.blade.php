<!doctype html>

<html>
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>samsa</title>

        <!-- verknüpfung zu Stylesheet  -->
        <link rel="stylesheet" href="{{ mix('/css/app.css')}}">

    </head>

    <body>

        <div class="grid">



            <header>

                @include('partials.title')

            </header>

            <nav>
                    @include('partials.nav')
            </nav>

            <article>

                    @yield('content')

            </article>
        
            <footer>

                    @include('partials.footer')

            </footer>

        </div>
        
    </body>

    
</html>
