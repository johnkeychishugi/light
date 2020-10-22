<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Light App</title>
         <style>
            html, body {
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100%;
                margin: 0;
            }

            .gradient{
                background-color: rgba(0,0,0,0.7);
                /*opacity: 0.7;*/
                color: #fff;
                position: absolute;
                z-index: 15;
            }

            .gradient .links{
                color: red;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 70px;
                z-index: 100;
                opacity: 0.5;
                position: relative;
            }


            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles  

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
      <div class="flex-center position-ref full-height" style="">
            <div class="content">
                <div class="title m-b-md">
                    Light
                </div>
                @livewire('light')
            </div>
        </div>
         @livewireScripts 
    </body>
</html>
