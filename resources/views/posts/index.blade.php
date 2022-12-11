<x-layouts.main>
    <x-slot:title>
        Blog
    </x-slot:title>

    <x-page-header>
        Blog
    </x-page-header>

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">

            @if(session('status'))
                @if(session('status')=='success')
                    <div class="alert alert-success">
                        {{ __('Yaratildi') }}
                    </div>
                @elseif(session('status')=='error')
                    <div class="alert alert-danger">
                        {{ __('Xato') }}
                    </div>
                @endif
            @endif

            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                    <h1 class="section-title mb-3">Oxirgi Postlar</h1>
                </div>
            </div>


            <div class="row">

                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-100" src="{{ asset('storage/' . $post->photo) }}" alt="">
                            <div class="blog-date">
                                <h4 class="font-weight-bold mb-n1">01</h4>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            @foreach($post->tags as $tag)
                                <a class="text-secondary text-uppercase font-weight-medium">{{ $tag->name }}</a>
                                <span class="text-primary px-2">|</span>
                            @endforeach
                        </div>
                        <div class="d-flex mb-2">
                            <a class="text-danger text-uppercase font-weight-medium">{{ $post->category->name }}</a>
                        </div>
                        <h5 class="font-weight-medium mb-2">{{ $post->title }}</h5>
                        <p class="mb-4">{{ $post->short_content }}</p>
                        <a class="btn btn-sm btn-primary py-2" href="{{ route('posts.show',['post' => $post->id ]) }}">O'qish</a>
                    </div>
                @endforeach

                {{ $posts->links() }}
            </div>
        </div>
    </div>
    <!-- Blog End -->


</x-layouts.main>
