<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{(app()->getLocale() == 'fa') ? 'rtl' : 'ltr'}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        @Vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100">
        <div class="w-4/5 mx-auto mt-16">
            <div class="grid grid-flow-col grid-rows-2 grid-cols-3 gap-2">
                <div class="rounded-lg shadow-lg bg-sky-300 text-center h-32 rotate-6 hover:rotate-0 transition-all">
                  Hello!
                </div>
                <div class="col-start-3 rounded-lg shadow-lg bg-lime-400 text-center h-32 hover:rotate-6 transition-all">
                  Hello!
                </div>
                <div class="rounded-lg shadow-lg bg-pink-400 text-center h-32 hover:rotate-6 transition-all">
                  Hello!
                </div>
                <div class="rounded-lg shadow-lg bg-red-300 text-center h-32 hover:rotate-6 transition-all">
                  Hello!
                </div>
                <div class="row-start-1 col-start-2 col-span-2 rounded-lg shadow-lg bg-amber-200 text-center h-32 hover:rotate-6 transition-all">
                  Hello!
                </div>
            </div>
            <div class="text-center mx-auto text-9xl font-black py-10">
                برگه!
            </div>
            @if (Route::has('login'))
                <div class="text-center px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-sky-700 rounded-lg p-2 text-lg text-white dark:text-gray-500 shadow-md">app</a>
                @else
                    <a href="{{ route('login') }}" class="bg-sky-700 rounded-lg p-2 text-lg text-white dark:text-gray-500 shadow-md">Log in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="bg-sky-500 rounded-lg p-2 ml-4 text-lg text-white dark:text-gray-500 shadow-md">Register</a>
                    @endif
                @endauth
                </div>
            @endif
        </div>
    </body>
    
</html>
