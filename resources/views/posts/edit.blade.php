<x-layouts.main>
    <x-slot:title>
        Edit post #{{ $post->id }}
    </x-slot:title>

    <x-page-header>
        Edit post #{{ $post->id }}
    </x-page-header>

    <div class="row justify-content-center">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('posts.update',['post'=>$post->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="title" placeholder="Title"
                               value="{{ $post->title }}"/>
                        @error('title')
                        <p class="help-block text-danger ml-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-3 mt-3">
                        <input name="photo" type="file" class="form-control p-4" placeholder="photo"/>
                        @error('photo')
                        <p class="help-block text-danger ml-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-3">
                        <textarea class="form-control p-4" rows="3" name="short_content"
                                  placeholder="Short Content">{{ $post->short_content }}</textarea>
                        @error('short_content')
                        <p class="help-block text-danger ml-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="content"
                                  placeholder="Content">{{ $post->content }}</textarea>
                        @error('content')
                        <p class="help-block text-danger ml-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex text-center">
                        <button class="btn btn-success py-3 px-5 mt-3" type="submit">
                            Save
                        </button>
                        <a href="{{ route('posts.show',['post'=>$post->id]) }}" class="btn btn-danger py-3 px-5 mt-3">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.main>
