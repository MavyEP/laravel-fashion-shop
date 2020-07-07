@section('page_title' , 'Welcome')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page_title')</title>
  </head>
  <body>
    <ul>
      @foreach ($clothes as $key => $clothe)
        <p>{{ $clothe -> id }}</p>
        <ul>
          <li>{{ $clothe -> type }}</li>
          <li>{{ $clothe -> mesure }}</li>
          <li>{{ $clothe -> color }}</li>
          <li>{{ $clothe -> price }}</li>
          <li>{{ $clothe -> sold_out }}</li>
        </ul>
      @endforeach
    </ul>
  </body>
</html>
