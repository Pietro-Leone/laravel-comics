<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>@yield("title")</title>
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
  
</head>
<body>
  @include("partials.header")
  <main>
    @yield("content")
  </main>
  @include("partials.footer")
</body>
<script src="./js/main.js"></script>
</html>