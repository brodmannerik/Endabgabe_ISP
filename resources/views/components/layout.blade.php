<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
{{--    <script type="text/javascript" src="{{ URL::asset('js/my.js') }}"></script>--}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                        green: "#10FF28",
                        background: "#161616",
                        card: "#1E1E1E",
                        white: "#FFFFFF",
                        grey: "#7E7E7E",
                        yellow: "#FAFF10"
                    },
                    maxHeight: {
                        '12': '12rem',
                    }
                },
            },
        };
    </script>

    <title>HearOut</title>

</head>
<body class="bg-background mb-28">
<nav class="flex justify-between items-center mb-4">
    <div class="flex items-center space-x-6">
        @auth
        <a href="/">
            <img class="w-24 ml-6" src="{{asset('images/logoHeaderSm.png')}}" alt=""/>
        </a>
        <a href="/">
            <img class="w-42" src="{{asset('images/HearOut.png')}}" alt="" />
        </a>
        @else
        <a href="/">
            <img class="w-24 ml-6" src="{{asset('images/logoHeaderSm.png')}}" alt=""/>
        </a>
        @endauth
    </div>
    <ul class="flex space-x-6 mr-7 text-lg">
        @auth
        <li>
            <span class="text-grey">
                Hi {{auth()->user()->name}}
            </span>
        </li>
        <li>
            <a href="/podcasts/manage" class="text-grey hover:text-green">
                <i class="fa-solid fa-gear"></i>
            </a>
        </li>
        <li>
           <form class="inline text-grey hover:text-yellow pr-6" method="POST" action="/logout">
               @csrf
               <button type="submit">
                   <i class="fa-solid fa-door-closed"></i>
               </button>
           </form>
        </li>
        @else
        <li>
            <a href="/register" class="text-grey hover:text-green">
                <i class="fa-solid fa-user-plus"></i></a>
        </li>
        <li>
            <a href="/login" class="text-grey hover:text-yellow pr-6">
                <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
        </li>
        @endauth
    </ul>
</nav>
<main>
    {{$slot}}
    @if(optional(auth()->user())->paid_member === 0)
        <form action="/checkout" method="POST">
            <div class="flex justify-center">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="bg-none text-grey" type="submit">Unpaid Version</button>
            </div>
        </form>
    @endif
</main>
    <x-flash-message></x-flash-message>
<footer>
{{--    <x-podcast-player></x-podcast-player>--}}
</footer>
</body>
</html>
