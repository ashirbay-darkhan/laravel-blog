<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stocks</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <style>
      .profile-img {
          width: 150px;
      }
  </style>  
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1 fixed-top">
  <div class="container ">
    <a href="#" class="navbar-brand">Stock blog</a>

    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navmenu"
    >
      <span class="navbar-toggler-icon"></span>
    </button>


    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
      {
      "symbols": [
        {
          "proName": "FOREXCOM:SPXUSD",
          "title": "S&P 500"
        },
        {
          "proName": "FOREXCOM:NSXUSD",
          "title": "US 100"
        },
        {
          "proName": "FX_IDC:EURUSD",
          "title": "EUR/USD"
        },
        {
          "proName": "BITSTAMP:BTCUSD",
          "title": "Bitcoin"
        },
        {
          "proName": "BITSTAMP:ETHUSD",
          "title": "Ethereum"
        }
      ],
      "showSymbolLogo": true,
      "colorTheme": "dark",
      "isTransparent": true,
      "displayMode": "regular",
      "locale": "en"
    }
      </script>
    </div>
    <!-- TradingView Widget END -->

  </div>
</nav>

<!-- Showcase -->
<section
class="bg-dark text-light mt-5 p-lg-0 pt-lg-5 text-center text-sm-start"
>
<div class="container">
  <div class="d-sm-flex align-items-center justify-content-between">
    <div>
      <h3><span class="text-danger"> Stock blog </span></h3>
      <p class="h1">БРОСЬ ВЫЗОВ ИСКУССТВЕННОМУ ИНТЕЛЛЕКТУ НА ФОНДОВОМ РЫНКЕ</p>
      <a href="{{ route('register') }}" class="mt-3 btn btn-lg btn-danger">Зарегистрироваться</a>  
      <a href="{{ route('login') }}" class="mt-3 btn btn-lg btn-outline-info">войти</a>  
    </div>
    <img
      class="img-fluid w-50 d-none d-sm-block"
      src="https://pngimg.com/uploads/robot/robot_PNG70.png"
      alt=""
    />
  </div>
</div>
</section>

<section class="mt-5">
  <div class="container text-center">
    <h1 class="m-5">Отслеживайте изменения цен акций</h1>
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
      <div id="tradingview_54d60"></div>
      <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
      <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
      <script type="text/javascript">
      new TradingView.widget(
      {
      "width": 980,
      "height": 610,
      "symbol": "NASDAQ:AAPL",
      "interval": "D",
      "timezone": "Etc/UTC",
      "theme": "light",
      "style": "1",
      "locale": "en",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": false,
      "allow_symbol_change": true,
      "container_id": "tradingview_54d60"
    }
      );
      </script>
    </div>
    <!-- TradingView Widget END -->
  </div>
</section>
<!-- Boxes -->
<section class="p-5">
  <div class="container text-center">
    <h1 class="m-5">Читайте наш блог  </h1>
    <div class="row text-center g-4">
    
    @foreach($posts as $el)
      <div class="col-md-4">
        <div class="card bg-dark text-light">
          <div class="card-body text-center p-5">
            <img
                  src="{{ $el->profile_image }}"
                  class="rounded-circle mb-3 profile-img"
                  alt=""
                />
            <h3 class="card-title mb-3">{{ $el->title }}</h3>
            <p class="card-text">
                {{ $el->body }}
            </p>
            <a href="{{ route('blog') }}" class="mt-3 btn btn-primary">Больше</a>
          </div>
        </div>
      </div>
    @endforeach

      
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="p-5 mt-5 bg-dark text-white text-center position-relative">
  <div class="container">
    <p class="lead">Copyright &copy; Stock Blog</p>

  </div>
</footer>


  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"
  >
  </script>


</body>
</html>