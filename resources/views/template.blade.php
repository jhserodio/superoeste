<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= URL::asset('styles/style.css') ?>">
  </head>

  <body>

    <header class="header">
      cabeçalho
    </header>

    <main class="main">
      @yield('content')
    </main>


    <footer class="footer">
      rodape
    </footer>


      <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
      </script>
  </body>
</html>
