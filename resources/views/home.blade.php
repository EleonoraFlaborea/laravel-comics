<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="./src/img/nero.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }} | Comics</title>
  {{--importare vite & co--}}
  @vite('resources/js/app.js')
</head>

<body>
    {{--header--}}
    @include('includes.header')


    <main>
      <div class="col">
        <div class="row">
        @foreach ($products as $product)
          <div class="card">
            <img class="cover narrow" src="{{ $product['src']}}" alt="{{ $product['titolo']}}">
              <h3> {{ $product ['titolo']}}</h3>
          </div>
        @endforeach
         
        </div>
      </div>
    </main>

    {{--footer--}}
    @include('includes.footer')
  

</body>

</html>