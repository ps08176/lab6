<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>GameShop-@yield('title')</title>
    </head>

    <body>
        <header>
            <h1>THIS IS HEADER</h1>
        </header>
        
        <nav>
            @section('nav')
            <h1>this is nav</h1>
            @show
        </nav>

        <main>
            @section('main')
            <h1>this is main</h1>
            @show
        </main>

        <aside></aside>

        <footer></footer>
    </body>

</html>