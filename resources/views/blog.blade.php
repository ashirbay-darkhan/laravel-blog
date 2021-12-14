@include('layouts/header')
<body>


  <section id="learn" class="p-5 mt-5">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
            {
            "symbol": "FX:EURUSD",
            "width": "450",
            "height": "290",
            "locale": "en",
            "dateRange": "12M",
            "colorTheme": "light",
            "trendLineColor": "rgba(41, 98, 255, 1)",
            "underLineColor": "rgba(41, 98, 255, 0.3)",
            "underLineBottomColor": "rgba(41, 98, 255, 0)",
            "isTransparent": false,
            "autosize": false,
            "largeChartUrl": ""
          }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-md p-5">
          <h2>Следи за катеровками</h2>
          <p class="lead">
            Этот инструмент позволяет вам видеть цену символа и изменять проценты.
          </p>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
            reiciendis eius autem eveniet mollitia, at asperiores suscipit
            quae similique laboriosam iste minus placeat odit velit quos,
            nulla architecto amet voluptates?
          </p>
        </div>
      </div>
    </div> 
  </section>

  <!-- Blog posts -->

    <div class="container">
      <h1 class="mt-5 mb-2">Блог</h1>
      <a href="{{ route('new-post') }}" class="btn btn-primary my-4">Новый Пост</a>
      <div class="row mb-2">


        @foreach($posts as $el)
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <div>
                <img
                  src="{{ $el->profile_image }}"
                  class="rounded-circle mb-2 profile-img"
                  alt=""
                />
                <strong class="d-inline-block mb-2 text-primary">{{ $el->name }}</strong>
              </div>
              <h3 class="mb-0">{{ $el->title }}</h3>
              <div class="mb-1 text-muted">{{ $el->created_at }}</div>
              <p class="card-text mb-auto">{{ $el->body }}</p>
              <img src="{{ $el->imageUrl }}" class="postImg my-2" alt="postImage">
              <div class="my-3">
                <a href="{{ route('onePost', $el->id) }}">Больше</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>


  
</body>

@include('layouts/footer')