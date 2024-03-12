<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="./src/img/nero.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Comics</title>
  {{--importare vite & co--}}
  @vite('resources/js/app.js')
</head>

<body>
    {{--header--}}
    <header>
      <div class="navbar">
        <div class="logo"> 
          <img class="cover narrow" src="{{ asset('images/dc-logo.png')}}" alt="logo">

        </div>
        <div class="links">
          <ul>
            <li><a href="{{ route('home')}}">CHARACTERS</a></li>
            <li><a href="{{ route('products')}}">COMICS</a></li>
            <li><a href="{{ route('movies')}}">MOVIES</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">GAMES</a></li>
            <li><a href="#">COLLECTIBLES</a></li>
            <li><a href="#">VIDEOS</a></li>
            <li><a href="#">FANS</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="{{ route('shop')}}">SHOP</a></li>
          </ul>
        </div>
      </div>
    </header>

    {{--jumbotron--}}
   <div class="jumbotron">
   </div>

</body>

</html>