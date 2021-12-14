@include('layouts/header')

    <section class="pt-5">
        <div class="container pt-5">
            <form method="POST" class="py-5" action="{{ route('post-submit') }}">
                @csrf 
                <div class="py-3">
                    <img
                    src="{{ Auth::user()->profile_image }}"
                    class="rounded-circle mb-2 profile-img"
                    alt=""
                    />
                    <strong class="d-inline-block mb-2 text-primary">{{ Auth::user()->name }}</strong>
                </div>
                <div class="mb-3">
                    <label class="form-label">Название поста</label>
                    <input type="text" name="title" placeholder="Введите название вашего поста" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Текст поста</label>
                    <textarea class="form-control" name="body" placeholder="Введите текст" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Картинка</label>
                    <input 
                        type="text" 
                        name="imageUrl" 
                        class="form-control"
                        placeholder="Image url"
                    >
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
            
    </section>
  
@include('layouts/footer')