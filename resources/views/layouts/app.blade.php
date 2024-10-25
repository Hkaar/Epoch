<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link href="https://fonts.googleapis.com/css?family=Figtree:300,regular,500,600,700,800,900,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
  @vite(['resources/css/app.css'])
  @stack('css')
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>
<body>

  @yield('content')

  @vite(['resources/js/app.js'])
  @stack('js')
</body>
</html>