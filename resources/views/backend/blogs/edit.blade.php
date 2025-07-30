@extends('backend.layouts.app')
@section('title', 'Edit Post | ' . $post->title)
@section('content')
    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center ">
                        <div class="col-xl-4 col-md-6  mt-2 mb-2 ">
                            <legend class="h4">
                                Edit Post
                            </legend>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-2 d-flex justify-content-end align-it mt-2">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Edit Post</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @dd($service->id) --}}
            <div class="statbox widget box box-shadow temp-a col-xl-12">
                <div class="row m-0">
                    <div class="col-12">
                        <form class="mt-3" method="POST"
                            action="{{ route('cms.post.update', ['service_id' => $service->id, 'post_id' => $post->id]) }}"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group mb-6 row">
                                <div class="col-xl-6 col-md-6 col-sm-12 mt-2">
                                    <label for="title" class="">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Title"
                                        minlength="3" maxlength="200" name="title"
                                        value="{{ old('title') ?? $post->title }}" required>
                                    @if ($errors->has('title'))
                                        <div class="text-danger" role="alert">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 mt-2">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-control" name="type" id="type" required>
                                        <option value="">Select Any</option>
                                        <option value="news" {{ old('type', $post->type) == 'news' ? 'selected' : '' }}>
                                            News
                                        </option>
                                        <option value="blog" {{ old('type', $post->type) == 'blog' ? 'selected' : '' }}>
                                            Blog
                                        </option>

                                    </select>
                                    @if ($errors->has('type'))
                                        <div class="text-danger" role="alert">{{ $errors->first('type') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 mt-3">
                                    <label>Publish Post</label><br>
                                    <label>
                                        <input type="radio" name="published" value="1"
                                            {{ old('published', $post->published) == '1' ? 'checked' : '' }}>
                                        Yes
                                    </label><br>

                                    <label>
                                        <input type="radio" name="published" value="0"
                                            {{ old('published', $post->published) == '0' ? 'checked' : '' }}>
                                        No
                                    </label>
                                    @if ($errors->has('published'))
                                        <div class="text-danger" role="alert">{{ $errors->first('published') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 mt-2">
                                    <label for="image">Image</label><br>
                                    @if ($post->image)
                                        <img width="100" height="100" class="mr-2"
                                            src="{{ asset('storage/images/' . $post->type . '/' . $post->image) }}">
                                    @endif
                                    <input type="file" class="form-control mt-2" id="imagFe" name="image">
                                    @if ($errors->has('image'))
                                        <div class="text-danger" role="alert">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                                <div class="col-12 mb-3 mt-2">
                                    <label for="body">Body</label>
                                    <textarea id="team-about" class="team-about" name="body" minlength="3" maxlength="30000">{{ old('body') ?? $post->body }}</textarea>
                                    @if ($errors->has('body'))
                                        <div class="text-danger" role="alert">{{ $errors->first('body') }}</div>
                                    @endif
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        tinymce.init({
            selector: '.team-about',
            height: 200,
            plugins: 'textcolor colorpicker lists link',
            toolbar: "formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | alignleft aligncenter alignright alignjustify  | numlist bullist | link | outdent indent  | removeformat",
            // theme: 'modern',
            // plugins: ' fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample  charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern ',
            // toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            // image_advtab: true,
            // templates: [{
            //         title: 'Test template 1',
            //         content: 'Test 1'
            //     },
            //     {
            //         title: 'Test template 2',
            //         content: 'Test 2'
            //     }
            // ],
            // content_css: [
            //     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',

            // ]
        });
    </script>
@endsection
