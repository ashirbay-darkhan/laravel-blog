<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>
<body>
    <!-- Blog posts -->
  <section>
    <div class="container">
      <h1 class="mt-5 mb-2">Блог</h1>
      <a href="./newpost.html" class="btn btn-primary my-4">Новый Пост</a>
      <div class="row mb-2">

        {{-- @foreach($data as $el)
            <div class="alert alert-secondary justify-content-between d-flex">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">{{ $el->petsname }}</li>
                    <li class="list-group-item">{{ $el->fio }}</li>
                    <li class="list-group-item">{{ $el->number }}</li>
                    <li class="list-group-item">{{ $el->email }}</li>
                    <li class="list-group-item">{{ $el->aim }}</li>
                    <li class="list-group-item">{{ $el->place }}</li>
                    <li class="list-group-item">{{ $el->charge }}</li>
                    
                </ul>
                <div>
                    <a href="{{ route('form-delete', $el->id) }}">
                        <button type="button" class="btn btn-outline-danger">Отклонить</button>
                    </a>
                </div>
            </div>
        @endforeach --}}

        @foreach($data as $el)
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <div>
                <img
                  src="{{ $el->profile_image }}"
                  class="rounded-circle mb-2"
                  alt=""
                />
                <strong class="d-inline-block mb-2 text-primary">{{ $el->created_at }}</strong>
              </div>
              <h3 class="mb-0">Featured post</h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse deserunt suscipit dolor nihil nostrum temporibus id velit beatae dicta et. Dolore maiores quos aut. Possimus.</p>
              <div class="my-3">
                <a href="./post.html">Больше</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </section>
</body>
</html>