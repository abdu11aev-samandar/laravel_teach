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
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="title" placeholder="Title"
                               required="required"/>
                        <p class="help-block text-danger"></p>
                    </div>
                   {{-- <div class="control-group">
                        <input type="file" class="form-control p-4" id="subject" placeholder="Picture"
                               required="required"/>
                        <p class="help-block text-danger"></p>
                    </div>--}}
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="3" name="short_content" placeholder="Short Content"
                                  required="required"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="content" placeholder="Content"
                                  required="required"></textarea>
                        <p class="help-block text-danger"></p>
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
