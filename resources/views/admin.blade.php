@include('layouts/header')


<!-- Blog posts -->
<section>
    <div class="container pt-5">
      <h1 class="mt-5 mb-2">Админ панель</h1>

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
              <div class="my-3">
                <a href="/blog/{{$el->id}}">Больше</a>
              </div>
              <div class="d-flex ml-2">
                <a href="{{ route('post-delete', $el->id) }}">
                    <button class="btn btn-sm btn-outline-danger">Удалить</button>
                </a>
              </div>
            </div>
            
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>


@include('layouts/footer')