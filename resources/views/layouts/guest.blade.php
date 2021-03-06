<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">


    <style>
      ::-webkit-scrollbar {
          width: 12px;
      }
      ::-webkit-scrollbar-track {
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.1); 
          border-radius: 10px;
      }
      ::-webkit-scrollbar-thumb {
          border-radius: 10px;  
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.2);
      }
    </style>



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    {{-- Recaptcha --}}

    <script type="text/javascript">

      function callbackThen(response){

      // read HTTP status

      console.log(response.status);

      // read Promise object

      response.json().then(function(data){

      console.log(data);

      });

      }

      function callbackCatch(error){

      console.error('Error:', error)

      }

      </script>

      {!! htmlScriptTagJsApi([

      'callback_then' => 'callbackThen',

      'callback_catch' => 'callbackCatch'

      ]) !!}

      {{-- !Recaptcha --}}

</head>

<body class="font-sans antialiased scroll-smooth">
    <x-jet-banner />

    <div class="min-h-screen bg-gradient-to-r from-darkBlue to-lightBlue">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
