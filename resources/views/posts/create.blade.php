<x-layouts.main>
    <x-slot:title>
        Post Create
    </x-slot:title>

    <x-page-header>
        New Post Create
    </x-page-header>


    <div class="row justify-content-center">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="title" placeholder="Title" value="{{ old('title') }}"/>
                        @error('title')
                            <p class="help-block text-danger ml-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                        <select name="category_id" class="form-select form-control form-control-lg">
                            {{--                            <option selected>Kategoriya tanlang</option>--}}
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        {{-- @error('title')
                         <p class="help-block text-danger ml-4">{{ $message }}</p>
                         @enderror--}}
                    </div>
                    <div class="control-group mb-3 mt-3">
                        <input name="photo" type="file" class="form-control p-4" placeholder="photo"/>
                        @error('photo')
                        <p class="help-block text-danger ml-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-3">
                        <textarea class="form-control p-4" rows="3" name="short_content" placeholder="Short Content">{{ old('short_content') }}</textarea>
                        @error('short_content')
                            <p class="help-block text-danger ml-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="content" placeholder="Content">{{ old('content') }}</textarea>
                        @error('content')
                            <p class="help-block text-danger ml-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5 mt-3" type="submit">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.main>
