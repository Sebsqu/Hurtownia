<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shoppingCart.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mb-5">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Hurtownia części komputerowych
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-flex justify-content-center">
            <div id="cart_total_value" class="cart">
                <h2>Całkowita wartość koszyka:</h2>
                <h3>{{ $cartTotalValue }} zł</h3>
            </div>
        </div>
        <div class="d-flex mt-5 justify-content-center">
            <div id='cart_cases' class='cart'>
                @if(session('cart_cases'))
                    @foreach (session('cart_cases') as $id => $details)
                        <hr>
                        <h4>{{ $details['fullname'] }}</h4>
                        <p> Ilość: {{ $details['quantity'] }}x {{ $details['price'] }} zł</p>
                        <form action="{{ route('cart.remove', ['category' => 'cases', 'id' => $id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                        <hr>
                    @endforeach
                @endif 
            </div>    
        </div>
        <div class="d-flex justify-content-center">           
            <div id='cart_cpus' class='cart'>
                @if(session('cart_cpus'))
                    @foreach (session('cart_cpus') as $id => $details)
                        <hr>
                        <h4>{{ $details['fullname'] }}</h4>
                        <p>Ilość: {{ $details['quantity'] }}x {{ $details['price'] }} zł</p>
                        <form action="{{ route('cart.remove', ['category' => 'cpus', 'id' => $id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                        <hr>
                    @endforeach
                @endif    
            </div>
        </div>
        <div class="d-flex justify-content-center">           
            <div id='cart_disks' class='cart'>
                @if(session('cart_disks'))
                    @foreach (session('cart_disks') as $id => $details)
                        <hr>
                        <h4>{{ $details['fullname'] }}</h4>
                        <p>Ilość: {{ $details['quantity'] }}x {{ $details['price'] }} zł</p>
                        <form action="{{ route('cart.remove', ['category' => 'disks', 'id' => $id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                        <hr>
                    @endforeach
                @endif    
            </div>
        </div>
        <div class="d-flex justify-content-center">           
            <div id='cart_gpus' class='cart'>
                @if(session('cart_gpus'))
                    @foreach (session('cart_gpus') as $id => $details)
                        <hr>
                        <h4>{{ $details['fullname'] }}</h4>
                        <p>Ilość: {{ $details['quantity'] }}x {{ $details['price'] }} zł</p>
                        <form action="{{ route('cart.remove', ['category' => 'gpus', 'id' => $id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                        <hr>
                    @endforeach
                @endif    
            </div>
        </div>
        <div class="d-flex justify-content-center">           
            <div id='cart_mbs' class='cart'>
                @if(session('cart_mbs'))
                    @foreach (session('cart_mbs') as $id => $details)
                        <hr>
                        <h4>{{ $details['fullname'] }}</h4>
                        <h3> </h3>
                        <p>Ilość: {{ $details['quantity'] }}x {{ $details['price'] }} zł</p>
                        <form action="{{ route('cart.remove', ['category' => 'mbs', 'id' => $id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                        <hr>
                    @endforeach
                @endif    
            </div>
        </div>
        <div class="d-flex justify-content-center">           
            <div id='cart_psus' class='cart'>
                @if(session('cart_psus'))
                    @foreach (session('cart_psus') as $id => $details)
                        <hr>
                        <h4>{{ $details['fullname'] }}</h4>
                        <h3> </h3>
                        <p>Ilość: {{ $details['quantity'] }}x {{ $details['price'] }} zł</p>
                        <form action="{{ route('cart.remove', ['category' => 'psus', 'id' => $id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                        <hr>
                    @endforeach
                @endif    
            </div>
        </div>
        <div class="d-flex justify-content-center">           
            <div id='cart_rams' class='cart'>
                @if(session('cart_rams'))
                    @foreach (session('cart_rams') as $id => $details)
                        <hr>
                        <h4>{{ $details['fullname'] }}</h4>
                        <h3> </h3>
                        <p>Ilość: {{ $details['quantity'] }}x {{ $details['price'] }} zł</p>
                        <form action="{{ route('cart.remove', ['category' => 'mbs', 'id' => $id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                        <hr>
                    @endforeach
                @endif    
            </div>
        </div>      
    </div>
</body>
</html>
<script>
    $(document).ready(function() {
        $.get('{{ route('cart.total-value') }}', function(data) {
            $('#total-value').text(data + ' zł');
        });
    });
</script>