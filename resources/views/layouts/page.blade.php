<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                background-color: rgb(23, 25, 30);
                font-family: 'Nunito', sans-serif;
                color: #FFF;
            }
            a {
                color: #FFF;
                text-decoration: none;
            }
            h1 {
                font-size: 40px;
                text-align: center;
            }
            p {
                font-size: 18px;
                text-align: center;
            }
            .admin-menu {
                text-align: right;
            }
            .admin-menu a {
                margin-left: 30px;
                margin-right: 10px;
            }
            img {
                display: block;
                margin: 0 auto;
                margin-top: 200px;
            }
        </style>
    </head>
    <body>

                <div>
            
                <div class="admin-menu">
                   
                        <a href="{{ url('/') }}">Home</a>

                        <a href="{{ route('vulnerabilities') }}">OWASP Database</a>
                    
                        <a href="{{ route('login') }}">Log in</a>

                        <a href="{{ route('register') }}">Register</a>
                        
                    
                </div>
            


    	@yield('content')

    </body>
    </html>