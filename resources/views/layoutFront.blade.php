<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>artico.io</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}">
    @yield('styles')

</head>
<body class="{{Request::route()->getName()}}">

    <div id="preloader">
    
    </div>

<header class="Header Container">
    <div class="BarNav row middle between">
        <a href="{{url('/')}}" class="col-2 small-2">
            <figure class="Logo">
                    <img src="{{asset('img/logo.svg')}}" alt="Ártico">
            </figure>
        </a>
        <nav class="row col-10 small-10 end">
            <ul class="Menu row between">
               <li class="menu-item-out-movile"><a href="">Artico item</a></li>
                <li>
                    <div class="Menu-fixed">
                        <a href="#" class="Hamburguer">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <nav>
                            <ul class="col-4">
                                
                                <li><a href="">menu item</a></li>
                                <li><a href="">menu item</a></li>
                                
                                
                            </ul>
                        </nav>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

@yield('content')


<footer class="Footer row middle center">
    
</footer>
<!-- Smartsupp Live Chat script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('scripts')
</body>
</html>