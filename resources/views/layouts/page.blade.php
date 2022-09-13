<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            .vuln-table, .vuln-single-table {
                width: 800px;
                margin: 0 auto;
                margin-top: 100px;
            }
            .vuln-table, .vuln-table tr td {
                border: 1px solid #424242;
                border-collapse: collapse;
                padding: 12px 20px;
            }
            .vuln-table tr:first-child {
                background-color: #424242;
            }
            .vuln-single-table {
                width: 1000px;
            }
            .vuln-single-table tr td:first-child {
                border-right: 1px solid #424242;
                width: 150px;
            }
            .vuln-single-table td {
                padding: 20px;
                vertical-align: top;
            }
            .admin-menu {
                background-color: rgb(129, 188, 56);
                padding: 20px 30px;
            }
            .admin-menu a {
                color: #000;
                font-weight: 700;
            }
        </style>

    </head>

    <body>
       
        <div class="admin-menu">
                   
            <a href="{{ url('/') }}">Welcome</a>

            <a href="{{ route('vulnerabilities') }}">OWASP Database</a>

            @auth

                <a href="{{ route('dashboard') }}">Dashboard</a>

            @else

                <a href="{{ route('login') }}">Log in</a>

                <a href="{{ route('register') }}">Register</a>

            @endauth
                    
         </div>

    	@yield('content')

    </body>
    
    </html>