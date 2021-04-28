<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Voting System By Gopal</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex item-center justify-between px-8 py-4">
            <a href="#"><img src="{{asset('img/logo.png')}}" width="30" height="30" alt="logo"></a>
            <div class="flex item-center">
                 @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                         <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                    </a>
                </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif 
                <a href="#">
                    
                    <img src="http://www.gravatar.com/avatar" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>

        </header>
        <main class="container mx-auto mx-w-custom flex" >
            <div class="w-70 mr-5">
              ADD IDEA FORM. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
quia. 
</div>
<div class="w-175">
    <nav class="flex item-center justify-between text-xs">
        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
            <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">AllIdeas(88)</li>
            <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering(6)</li> 
            <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">InProgress(1)</li> 
         </ul>


         <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
            <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented(6)</li>
           
            <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed(55)</li> 
           
         </ul>

    </nav>

    <div class="mt-8">
        {{$slot}}
    </div>
</div>        
    </body>
</html>
