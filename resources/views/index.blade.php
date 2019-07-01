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



            <header class="title">

                @include('partials.title')

            </header>



            <article class="content">
                <div>
                    @yield('content')

                </div>
                    

            </article>

            <nav class="navigation">
                    @include('partials.nav')
            </nav>
        
            <footer class="footline">
                
                    @include('partials.footer')

            </footer>

        </div>
        
    </body>

    
</html>
