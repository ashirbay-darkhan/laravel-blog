@section('header')

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
        .postImg {
          width: 200px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-1 fixed-top">
    <div class="container">
      <a href="{{ route('index') }}" class="navbar-brand">Stock blog</a>

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
            "displayMode": "adaptive",
            "locale": "en"
            }
            </script>
        </div>
  <!-- TradingView Widget END -->
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('profile') }}">Профиль</a></li>
                    <li><a class="dropdown-item" href="{{ route('blog') }}">Блог</a></li>
                    @if (Auth::user()->email == "admin@admin")
                    <li><a class="dropdown-item" href="{{ route('admin') }}">Админка</a></li>
                    @endif
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    class="dropdown-item"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Выйти') }}
                            </x-dropdown-link>
                        </form>
                    </li>
                  </ul>
                </li>
              </ul>
          </li>
        </ul>
      </div>
      
    </div>
  </nav>