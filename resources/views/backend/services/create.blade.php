@extends('backend.layouts.app')
@section('title', 'Create Service')
@section('content')
    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center ">
                        <div class="col-xl-4 col-md-6  mt-2 mb-2 ">
                            <legend class="h4">
                                Create Service
                            </legend>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-2 d-flex justify-content-end align-it mt-2">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Create Service</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statbox widget box box-shadow temp-a col-xl-12">
                <div class="row m-0">
                    <div class="col-12">
                        <form class="mt-3" method="POST" action="{{ route('cms.services.store') }}"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group mb-6 row">
                                <div class="col-xl-6 col-md-6 col-sm-12">
                                    <label>Cities</label>
                                    <select class="col-12 form-control" name="city_id[]" multiple required>
                                        <option value="">Select City</option>
                                        @foreach ($cities as $key => $city)
                                            <option value="{{ $city->id }}"
                                                {{ old('city_id') == $city->id ? 'selected' : '' }}>
                                                {{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('city_id'))
                                        <div class="text-danger" role="alert">{{ $errors->first('city_id') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 mt-2">
                                    <label for="formGroupExampleInput" class="">Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter Name" minlength="3" maxlength="150" required name="name"
                                        value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <div class="text-danger" role="alert">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 mt-2">
                                    <label for="formGroupExampleInput" class="">Type</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter Type" minlength="3" maxlength="20" required name="type"
                                        value="{{ old('type') }}">
                                    @if ($errors->has('type'))
                                        <div class="text-danger" role="alert">{{ $errors->first('type') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 mt-2">
                                    <label for="formGroupExampleInput" class="">Rate Of Interest</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter rate of interest" required name="rate_of_interest"
                                        value="{{ old('rate_of_interest') }}">
                                    @if ($errors->has('rate_of_interest'))
                                        <div class="text-danger" role="alert">{{ $errors->first('rate_of_interest') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 mt-2">
                                    <label>Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @if ($errors->has('image'))
                                        <div class="text-danger" role="alert">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                                <div class="col-12 mb-3 mt-2">
                                    <label for="descriptions">Description</label>
                                    <textarea id="team-about" class="team-about" name="short_desc" minlength="3" maxlength="300">{{ old('short_desc') }}</textarea>
                                    @if ($errors->has('short_desc'))
                                        <div class="text-danger" role="alert">{{ $errors->first('short_desc') }}</div>
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
    {{-- <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4/tinymce.min.js"> --}}
    {{-- </script> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
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

        $(document).ready(function() {
            $('#city_id').select2({
                placeholder: "Select Cities"
            });
        });
    </script>
@endsection
