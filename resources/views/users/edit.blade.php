@include('layouts/header')
<body>
    <!-- Blog posts -->
    <section>
      <div class="container pt-5">
        <h1 class="pt-5 mb-3">Профиль</h1>
        <div class="row mb-2">
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <div class="py-4">
                  <img
                    src="{{ Auth::user()->profile_image }}"
                    class="rounded-circle mb-2 profile-img"
                    alt=""
                  />
                </div>
                
                <ul class="list-group">
                    <li class="list-group-item">Name: <strong>{{ Auth::user()->name }}</strong></li>
                    <li class="list-group-item">Email: {{ Auth::user()->email }}</li>
                </ul> 

                <form action="{{ route('user.edit-profile') }}" method="POST">
                  @csrf
                  @method('PUT')
              
                  <div class="form-group py-2">
                      <label for="profile_image">Ссылка на аватар</label>
                      <input type="text" class="form-control" name="profile_image" id="profile_image" value="{{ $user->profile_image }}">
                  </div>
                  
                  <button type="submit" class="btn btn-outline-primary">Обновить аватар</button>
                  </form>
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </section>
</body>

@include('layouts/footer')
