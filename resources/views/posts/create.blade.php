<x-layouts.main>

    <x-slot:title>
        Post Yaratish
    </x-slot:title>

    <x-page-header>
        Yangi Post Yaratish
    </x-page-header>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group mb-4">
                        <input type="text" class="form-control p-4" name="title" value="{{ old('title') }}"
                               placeholder="Sarlavha"/>
                        @error('title')
                        <p class="help-block text-danger ml-4">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="control-group mb-4">
                        <label class="ml-4">Kategoriya</label>
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

                    <div class="control-group mb-4">
                        <label class="ml-4">Taglar</label>
                        <select name="tags[]" multiple class="form-select form-control form-control-lg">
{{--                            <option selected>Kategoriya tanlang</option>--}}
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                       {{-- @error('title')
                        <p class="help-block text-danger ml-4">{{ $message }}</p>
                        @enderror--}}
                    </div>

                    <div class="control-group mb-4">
                        <input name="photo" type="file" class="form-control p-4" id="subject" placeholder="Rasm"/>
                        @error('photo')
                        <p class="help-block text-danger ml-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                                <textarea class="form-control p-4" rows="3" name="short_content"
                                          placeholder="Qisqacha Ma'lumot">{{ old('short_content') }}</textarea>
                        @error('short_content')
                        <p class="help-block text-danger ml-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group mb-4">
                        <textarea class="form-control p-4" rows="6" name="content"
                                  placeholder="Maqola">{{ old('short_content') }}</textarea>
                        @error('content')
                        <p class="help-block text-danger ml-4">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit">
                            Saqlash
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.main>
