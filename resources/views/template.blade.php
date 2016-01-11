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
      <h1 class="logo">Oeste</h1>
      <nav class="header-navegation">
        <ul class="menu">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Institucional</a></li>
          <li><a href="#">Ofertas</a>
            <ul class="menu-drop">
              <li><a href="#">Santa Maria do Oeste</a></li>
              <li><a href="#">Pitanga</a></li>
              <li><a href="#">Quatro Barras Centro</a></li>
              <li><a href="#">Quatro Barras Borda do Campo</a></li>
            </ul>
          </li>
          <li><a href="#">Noticias</a></li>
          <li><a href="#">Contatos</a></li>
        </ul>
      </nav>
    </header>

    <main class="main">
      <div class="container">
        @yield('content')
      </div>
    </main>


    <footer class="footer">
      rodape
    </footer>


      <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
      </script>
  </body>
</html>
