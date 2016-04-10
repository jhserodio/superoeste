@extends ('template')
@section('content')

<section class="so-noticias">

  <h1 class="title-page">
    <i class="icon-comments"></i>
    <span>
      Noticias
    </span>
  </h1>

  <div class="content">

    <div class="news-set">

      <article class="news-thumb">
        <header class="nt-header">
          <h3 class="title-news"> Dia das Mães </h3>
          <time>11 de Abril de 2016</time>
        </header>
        <main class="nt-main">

          <div class="nt-image">
            <div class="flex-image">
              <img src="<?= URL::asset('images/news/news-03.jpg') ?>" alt="promoçao de pascoa">
            </div>
          </div>

          <div class="nt-descript">
            <p>
              Nesse dia das mães venha encher a geladeira com produtos do super oeste, para aquele almoço de
              dia das mães todo especial.
            </p>
          </div>

        </main>
      </article>

      <article class="news-thumb">
        <header class="nt-header">
          <h3 class="title-news"> Promoção de Pascoa </h3>
          <time>02 de Março de 2016</time>
        </header>
        <main class="nt-main">

          <div class="nt-image">
            <div class="flex-image">
              <img src="<?= URL::asset('images/news/news-01.jpg') ?>" alt="promoçao de pascoa">
            </div>
          </div>

          <div class="nt-descript">
            <p>
              O Superoeste esta com preços Imperdíveis para chocolates e Ovos de pasco.
              Venha a loja mais próxima e aproveite nossas ofertas, com preços imbatíveis pela concorrência.
            </p>
          </div>

        </main>
      </article>

      <article class="news-thumb">
        <header class="nt-header">
          <h3 class="title-news">promoção brahma e skoll litrão</h3>
          <time>12 de setembro de 2015</time>
        </header>
        <main class="nt-main">

          <div class="nt-image">
            <div class="flex-image">
              <img src="<?= URL::asset('images/news/news-02.jpg') ?>" alt="promoçao de cerveja litrão">
            </div>
          </div>

          <div class="nt-descript">
            <p>
              O Superoeste esta com preços Imperdíveis para Cerveja Litrão Brahma e Skol.
              Venha a loja mais próxima e aproveite nossas ofertas, com preços imbatíveis pela concorrência.
            </p>
          </div>

        </main>
      </article>

    </div>

    <div class="pagination">
      <ul class="menu">
        <li><a href="#"> <i class="icon-left"></i> </a></li>
        <li><a href="#"> 1 </a></li>
        <li><a href="#"> <i class="icon-right"></i> </a></li>
      </ul>
    </div>

  </div>

  <aside class="sidebar">

    <div class="sidebar-item">
      <h3 class="title-sidebar">Categoria</h3>
      <ul class="sidebar-list">
        <li><a href="#">Promoções</a></li>
      </ul>
    </div>

  </aside>

</section>

@endsection
