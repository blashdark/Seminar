<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Thư viện</title>
</head>
<body>
    <header class="header">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link style="color: white;text-decoration: none" :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Đăng xuất') }}
            </x-dropdown-link>
        </form>
        <div class="cart">
            <span class="logo"><?xml version="1.0" encoding="iso-8859-1"?>
                <!-- Generator: Adobe Illustrator 18.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                <g>
                    <path d="M22.293,9.707l6.999,6.999c0.092,0.093,0.203,0.166,0.326,0.217C29.74,16.974,29.87,17,30,17s0.26-0.026,0.382-0.077
                        c0.123-0.051,0.234-0.124,0.326-0.217l6.999-6.999c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0L31,13.586V1
                        c0-0.553-0.447-1-1-1s-1,0.447-1,1v12.586l-5.293-5.293c-0.391-0.391-1.023-0.391-1.414,0S21.902,9.316,22.293,9.707z"/>
                    <path d="M39,5h17.414l-5.074,5.074L58.481,19H59V3h-0.586l-0.069,0.069C58.236,3.029,58.122,3,58,3H39c-0.553,0-1,0.447-1,1
                        S38.447,5,39,5z"/>
                    <polygon points="9,19 9,12.851 4.081,19 	"/>
                    <polygon points="51,19 55.919,19 51,12.851 	"/>
                    <path d="M8.66,10.074L3.586,5H21c0.553,0,1-0.447,1-1s-0.447-1-1-1H2C1.878,3,1.764,3.029,1.655,3.069L1.586,3H1v16h0.519
                        L8.66,10.074z"/>
                    <path d="M0,20v35.259C0,57.873,2.127,60,4.741,60h50.518C57.873,60,60,57.873,60,55.259V20H0z M16,29c0,0.553-0.447,1-1,1
                        s-1-0.447-1-1c0-2.206,1.794-4,4-4s4,1.794,4,4c0,0.553-0.447,1-1,1s-1-0.447-1-1c0-1.103-0.897-2-2-2S16,27.897,16,29z M43,39
                        c0,7.168-5.832,13-13,13s-13-5.832-13-13v-6c0-0.553,0.447-1,1-1s1,0.447,1,1v6c0,6.065,4.935,11,11,11s11-4.935,11-11v-6
                        c0-0.553,0.447-1,1-1s1,0.447,1,1V39z M42,27c-1.103,0-2,0.897-2,2c0,0.553-0.447,1-1,1s-1-0.447-1-1c0-2.206,1.794-4,4-4
                        s4,1.794,4,4c0,0.553-0.447,1-1,1s-1-0.447-1-1C44,27.897,43.103,27,42,27z"/>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                </svg>
                </span>
            @livewire('cart-counter')
            @livewire('cart-container')
        </div>
    </header>
    <div class="container" id="item">
        <h1>Sách</h1>
        @livewire('product-list',[ "books" => $books ])
    </div>
    <footer>
    </footer>
</body>
</html>
