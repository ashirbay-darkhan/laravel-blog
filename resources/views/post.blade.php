@include('layouts/header')


  <!-- Blog posts -->
  <section>
    <div class="container pt-5">
      <h1 class="pt-5 mb-3">{{ $post->title }}</h1>
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <div>
                <img
                  src="{{ $post->profile_image }}"
                  class="rounded-circle mb-2 profile-img"
                  alt=""
                />
                <strong class="d-inline-block mb-2 text-primary">{{ $post->name }}</strong>
              </div>
              <h3 class="mb-0">{{ $post->title }}</h3>
              <div class="mb-1 text-muted">{{ $post->created_at }}</div>
              <p class="card-text mb-auto">{{ $post->body }}</p>
              <img src="{{ $post->imageUrl }}" class="postImg my-2" alt="postImage">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section>
      <div class="container border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <h4 class="mt-3">Комментировать</h4>
        <form method="POST" class="py-3 " action="{{ route('comment-submit', $post->id) }}">
          @csrf 
          <div class="mb-3">
              <textarea class="form-control" name="text" placeholder="Введите коммент" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Отправить</button>
      </form>
      </div>
  </section>
  <section>
      <div class="container">
        <h4 class="my-3">Комменты</h4>
        <ol class="list-group list-group-numbered">
          
          @foreach($comments as $el)
            @if ($el->postId == $post->id)
              
         
            <li class="list-group-item">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">{{ $el->userName }}</div>
                      {{ $el->text }}
                    </div>
                    
                </div>
            </li>
            @endif
          @endforeach
            
          </ol>
      </div>
  </section>



@include('layouts/footer')