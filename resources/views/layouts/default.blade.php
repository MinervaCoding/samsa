<!DOCTYPE html>
<html lang="en">

   <head>
      @include('partials.head')
   </head>

   <body>

      <div class="grid-index">

         @include('partials.nav')
         @include('partials.header')
         @include('partials.content')
         @include('partials.footer')
         @include('partials.footer-scripts')

         @if (session('status'))
            <div class="alert alert-success" role="alert">
                  {{ session('status') }}
            </div>
         @endif


      </div>
      @yield('scripts')
   </body>
</html>