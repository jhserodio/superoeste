@extends ('template')
@section('content')

<section class="so-home">

  <div class="banner">
    <div class="card-triple">
      <div class="card">
        <article class="banner-item">
          <header>
            <h1 class="title-banner">
              Dia das Mães
            </h1>
          </header>
          <main>
            <img src="<?= URL::asset('images/banner/banner-01.jpg') ?>" alt="banner image" />
          </main>
          <footer>
            <p>
              No oeste todos os dias são dias das mães
            </p>
          </footer>
        </article>
      </div>

      <div class="card">
        <article class="banner-item">
          <header>
            <h1 class="title-banner">
              Cartão Oeste
            </h1>
          </header>
          <main>
            <img src="<?= URL::asset('images/banner/banner-02.jpg') ?>" alt="banner image" />
          </main>
          <footer>
            <p>
              Faça suas compras com credito direto, para todos os mercados,
              condições especiais de pagamente especialmente para os clientes Oeste.
            </p>
          </footer>
        </article>
      </div>

      <div class="card">
        <article class="banner-item">
          <header>
            <h1 class="title-banner">
              Produtos Oeste
            </h1>
          </header>
          <main>
            <img src="<?= URL::asset('images/banner/banner-03.jpg') ?>" alt="banner image" />
          </main>
          <footer>
            <p>
              O Super Oeste Oferece produtos de produção propria na nossa padaria,
              com preços mais acessíveis e produtos fresquinhos.
            </p>
          </footer>
        </article>
      </div>
    </div>
  </div>

  <div class="home-info">
    <div class="card-double">
      <div class="card">
          <h2 class="title">Insitucional</h2>
          <p>
            <i class="icon-build"></i>
            <strong>Supermercado Oeste desde 1994</strong> <br>
            Tradição e respeito ao cliente, sempre buscando dar qualidade de
            atendimento e produtos para nossos clientes e suas famílias
          </p>
          <a href="{{ route('institucional') }}">
            <button class="btn-link">
              ler mais
            </button>
          </a>
      </div>

      <div class="card">
          <h2 class="title">Cartão Oeste</h2>
          <p>
            <i class="icon-card"></i>
            <strong>
              Mais Crédito, Prazo e Benefícios
            </strong> <br>
            Adquira seu cartão em qualquer uma de nossas lojas, dirigindo-se ao balcão de atendimento.
          </p>
          <a href="{{ route('contatos') }}">
            <button class="btn-link">
              peça o seu
            </button>
          </a>
      </div>

    </div>
  </div>

  <div class="home-news">
    <h2 class="title">Notícias</h2>
    <div class="card-four">

      <div class="card">
        <article class="news-thumb">
          <header class="nt-header">
            <h3 class="title-news">Dia Das Mães</h3>
            <time> 11 Abril de 2016 </time>
          </header>
          <main class="nt-main">
            <p>
              Nesse dia das mães venha encher a geladeira com produtos do super oeste, para aquele almoço de
              dia das mães todo especial.
            </p>
          </main>
        </article>
      </div>

      <div class="card">
        <article class="news-thumb">
          <header class="nt-header">
            <h3 class="title-news">PROMOÇÃO DE PASCOA</h3>
            <time> 02 Março de 2016 </time>
          </header>
          <main class="nt-main">
            <p>
              O Superoeste esta com preços Imperdíveis para chocolates e Ovos de pasco. Venha a
              loja mais próxima e aproveite nossas ofertas, com preços imbatíveis pela concorrência.
            </p>
          </main>
        </article>
      </div>

      <div class="card">
        <article class="news-thumb">
          <header class="nt-header">
            <h3 class="title-news">PROMOÇÃO cerveja LITRÃO</h3>
            <time>12 de setembro de 2015</time>
          </header>
          <main class="nt-main">
            <p>
              O Superoeste esta com preços Imperdíveis para Cerveja Litrão Brahma e Skol.
              Venha a loja mais próxima e aproveite nossas ofertas, com preços imbatíveis pela concorrência.
            </p>
          </main>
        </article>
      </div>
    </div>
  </div>

</section>

@endsection
