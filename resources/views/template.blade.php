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
      <div class="container">
        <h1 class="logo">
          Oeste
          <small>
            supermercados
          </small>
        </h1>
        <nav class="navegation-header">
          <ul class="menu">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Institucional</a></li>
            <li class="drop-down"><a href="#">Ofertas <i class="icon-down"></i></a>
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
        <button class="btn-icon" id="btn-responsive"> <i class="icon-menu"></i> </button>
      </div>
    </header>

    <main class="main">
      <div class="container">
        @yield('content')
      </div>
    </main>


    <footer class="footer">
      <div class="container">

        <div class="footer-note">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          </p>
        </div>

        <div class="footer-info">
          <span>
            <strong>
              Loja 1 - Santa Maria do Oeste
            </strong>
            <address>
              Endereço: Rua Generoso Karpinski, Nº 970
            </address>
            <a href="mailto:stamaria@superoeste.com.br">
              stamaria@superoeste.com.br
            </a>
            <a href="tel://42-3644-1227">
              (42) 3644 1227
            </a>
          </span>
          <span>
            <strong>
              Loja 2 - Quatro Barras Centro
            </strong>
            <address>
              Endereço: Endereço: Rua Nilo Favaro, Nº 414
            </address>
            <a href="mailto:quatrobarras_centro@superoeste.com.br">
               quatrobarras_centro@superoeste.com.br
            </a>
            <a href="tel://41-3672-2024">
              (41) 3672 2024
            </a>
          </span>
          <span>
            <strong>
              Loja 3 - Pitanga
            </strong>
            <address>
              Endereço: Rua Conselheiro Zacarias, Nº 500
            </address>
            <a href="mailto:pitanga@superoeste.com.br">
              pita1-ga@s-peroeste.com.br
            </a>
            <a href="tel://42-3646-1241">
              (42) 3646-1241
            </a>
          </span>
          <span>
            <strong>
              Loja 4 - Quatro Barras Borda do Campo
            </strong>
            <address>
              Endereço: Rua Ana Andreatta Mocelin, Nº 566
            </address>
            <a href="mailto:quatrobarras_borda@superoeste.com.br">
              quatrobarras_borda@superoeste.com.br
            </a>
            <a href="tel://41-3672-1315">
              (41) 3672 1315
            </a>
          </span>
        </div>

      </div>
    </footer>


      <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
      </script>
  </body>
</html>
