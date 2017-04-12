<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
  <head>

    <!-- META TAGS -->
    <title>{{ trans($urlname .'.header.title') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ trans($urlname .'.header.description') }}">
    <meta name="robots" content="{{ trans($urlname.'.header.robots.index')}}, {{ trans($urlname .'.header.robots.follow')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="canonical" href="http://projectesidisseny.com/" />
    <meta property="og:locale" content="{{ LaravelLocalization::getCurrentLocale() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ trans($urlname . '.header.title')}}" />
    <meta property="og:description" content="{{ trans($urlname . '.header.description')}}" />
    <meta property="og:site_name" content="Projectes i Disseny" />

    <!-- LINKS -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script async src="{{ asset('js/stellar.js') }}"></script>
    <script async src="{{ asset('js/main.js') }}"></script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NJLTF6B');</script>
    <!-- End Google Tag Manager -->

  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJLTF6B"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="top_nav">
      <div class="top_nav_center">
        <div class="top_nav_phone">
          <img src="{{asset('img/icons/phone.svg')}}" alt="{{ trans('main.top_nav.p') }}">
          <p>  {{ trans('main.top_nav.p') }} <strong> {{ trans('main.top_nav.strong') }}</strong></p>
        </div>
        <div class="top_nav_social">
          <a href="https://www.facebook.com/projectesidisseny/"><img src="{{ asset('img/icons/facebook.svg') }}" alt="Facebook Projectes i Disseny"> </a>
          <a href="https://twitter.com/ProiDiss"><img src="{{ asset('img/icons/twitter.svg') }}" alt="Twitter Projectes i Disseny"></a>
        </div>
        <div class="top_nav_languague">
          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
          <li>
            <a style="margin: 3px;" rel="alternate" hreflang="{{$localeCode}}" href="
            @if ($urlname == 'index')
              {{ LaravelLocalization::getLocalizedURL($localeCode, '/') }}
            @else
              {{ LaravelLocalization::getURLFromRouteNameTranslated($localeCode, 'routes.'. $urlname)}}
            @endif
              ">
              {{ $properties['native'] }}
            </a>
          </li>
          @endforeach
        </div>
      </div>
    </div>
    <header>
      <div class="logo">
        <img src="{{ asset('img/logo.svg') }}" alt="{{ trans('main.nav.img_alt') }}">
      </div>
      <div class="nav_responsive">
        <img src="{{ asset('img/icons/sandwich.svg') }}" alt="{{ trans('main.nav.img_alt_2') }}">
      </div>
      <nav>
        <ul>
          <li id="productes">
            <a href="{{ LaravelLocalization::getLocalizedURL(Config::get('app.locale'), '/') }}">{{ trans('main.nav.a') }}</a>
            <!--<ul>
              <li><a href="#">{{ trans('main.nav.li') }}</a></li>
              <li><a href="#">{{ trans('main.nav.li_2') }}</a></li>
            </ul>-->
          </li>
          <li>
            <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
        'routes.faq')}}">{{ trans('main.nav.li_3') }}</a>
          </li>
          <li>
            <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
        'routes.aboutus')}}">{{ trans('main.nav.li_4') }}</a>
          </li>
          <li>
            <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
        'routes.contact')}}" class="button">{{ trans('main.nav.li_5') }}</a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="nav_responsive_content" style="display: none">
      <ul>
        <li id="productes">
          <a href="{{ LaravelLocalization::getLocalizedURL(Config::get('app.locale'), '/') }}">{{ trans('main.nav.a') }}</a>
          <!--<ul>
            <li><a href="#">{{ trans('main.nav.li') }}</a></li>
            <li><a href="#">{{ trans('main.nav.li_2') }}</a></li>
          </ul>-->
        </li>
        <li>
          <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
      'routes.faq')}}">{{ trans('main.nav.li_3') }}</a>
        </li>
        <li>
          <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
      'routes.aboutus')}}">{{ trans('main.nav.li_4') }}</a>
        </li>
        <li>
          <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
      'routes.contact')}}" class="button">{{ trans('main.nav.li_5') }}</a>
        </li>
     </ul>
    </div>

    @yield('content')

    <footer>
      <div class="footer_legal">
        <h3>{{ trans('main.footer.h3') }}</h3>
        <ul>
          <li><a href="{{ LaravelLocalization::getLocalizedURL(Config::get('app.locale'), '/') }}">{{ trans('main.footer.li') }}</a></li>
          <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
      'routes.faq')}}">{{ trans('main.footer.li_2') }}</a></li>
          <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
      'routes.aboutus')}}">{{ trans('main.footer.li_3') }}</a></li>
          <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
      'routes.contact')}}">{{ trans('main.footer.li_4') }}</a></li>
          <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
      'routes.legaladvice')}}">{{ trans('main.footer.li_5') }}</a></li>
        </ul>
      </div>
      <div class="footer_info">
        <div>
          <img src="{{ asset('img/icons/location.svg')}}" alt="{{ trans('main.footer.img_alt') }}">
          <p>{{ trans('main.footer.p') }}</p>
        </div>
        <div>
          <img src="{{ asset('img/icons/calendar.svg')}}" alt="{{ trans('main.footer.img_alt_2') }}">
          <p>{{ trans('main.footer.p_2') }}</p>
        </div>
        <div>
          <img src="{{ asset('img/icons/envelop.svg')}}" alt="{{ trans('main.footer.img_alt_3') }}">
          <p>{{ trans('main.footer.p_3') }}<p>
        </div>
        <div>
          <img src="{{ asset('img/icons/phone.svg')}}" alt="{{ trans('main.img_alt_4') }}">
          <p>{{ trans('main.footer.p_4') }}</p>
        </div>
      </div>
      <div class="footer_nom">
        <p>{{ trans('main.footer.p_5') }}</p>
      </div>
    </footer>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
  </body>
</html>
