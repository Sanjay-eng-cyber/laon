@extends('backend.layouts.app')
@section('title', 'Edit Service | ' . $service->name)
@section('content')
    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4 col-md-6 col-sm-6 mt-2 mb-1">
                            <legend class="h4">
                                Edit Service
                            </legend>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2 d-flex justify-content-end align-it mt-2 ">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Edit Service</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statbox widget box box-shadow col-xl-12">
                <div class="row m-0">
                    <div class="col-12">
                        <form class="mt-3" method="POST" action="{{ route('cms.services.update', $service->id) }}"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group mb-12 row">
                                <div class="col-xl-6 col-md-6 col-sm-12 mt-2">
                                    <label>Cities</label>
                                    <select class="col-12 form-control select2" name="city_id[]" id="city_id" multiple
                                        required>
                                        <option value="">Select City</option>
                                        @foreach ($cities as $key => $city)
                                            @if (old('city_id'))
                                                <option value="{{ $city->id }}"
                                                    {{ in_array($city->id, old('city_id', $citiesArr)) ? 'selected' : '' }}>
                                                    {{ $city->name }}</option>
                                            @else
                                                <option value="{{ $city->id }}"
                                                    {{ in_array($city->id, $citiesArr) ? 'selected' : '' }}>
                                                    {{ $city->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if ($errors->has('city_id'))
                                        <div class="text-danger" role="alert">{{ $errors->first('city_id') }}</div>
                                    @endif
                                    @if ($errors->has('city_id.*'))
                                        <div class="text-danger" role="alert">{{ $errors->first('city_id') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6  col-md-6 col-sm-12 mt-2">
                                    <label for="formGroupExampleInput" class="">Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter Name" minlength="3" maxlength="150" required name="name"
                                        value="{{ old('name') ?? $service->name }}">
                                    @if ($errors->has('name'))
                                        <div class="text-danger" role="alert">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 mt-2">
                                    <label for="formGroupExampleInput" class="">Type</label>
                                    <select name="type" id="type" class="form-control" required>
                                        <option value="">Select Any</option>
                                        <option value="loan"
                                            {{ old('type', $service->type) == 'loan' ? 'selected' : '' }}>Loan
                                        </option>
                                        <option value="credit_card"
                                            {{ old('type', $service->type) == 'credit_card' ? 'selected' : '' }}>
                                            Credit Card</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        <div class="text-danger" role="alert">{{ $errors->first('type') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-6  col-md-6 col-sm-12 mt-2" id="rate_of_interest">
                                    <label for="rateOfInterestInput" class="">Rate Of Interest</label>
                                    <input type="text" class="form-control" id="rateOfInterestInput"
                                        placeholder="Enter rate of interest" name="rate_of_interest"
                                        value="{{ old('rate_of_interest') ?? $service->rate_of_interest }}">
                                    @if ($errors->has('rate_of_interest'))
                                        <div class="text-danger" role="alert">{{ $errors->first('rate_of_interest') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12 mt-2">
                                    <label>Image</label><br>
                                    @if ($service->image)
                                        <img width="100" height="100" class="mr-2"
                                            src="{{ asset('storage/images/services/' . $service->image) }}">
                                    @endif
                                    <input type="file" class="form-control mt-2" id="image" name="image">
                                    @if ($errors->has('image'))
                                        <div class="text-danger" role="alert">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                                <div class="col-12 mb-3 mt-2">
                                    <label for="descriptions">Description</label>
                                    <textarea id="team-about" class="team-about" name="short_desc" minlength="3" maxlength="30000">{{ old('short_desc') ?? $service->short_desc }}</textarea>
                                    @if ($errors->has('short_desc'))
                                        <div class="text-danger" role="alert">{{ $errors->first('short_desc') }}</div>
                                    @endif
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary"
                                onclick="return confirm('Are you sure, you want to update?')">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
    </script>
    <script>
        tinymce.init({
            selector: '#team-about',
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
    <script>
        $(document).ready(function() {
            $('#city_id').select2({
                placeholder: "Select Cities",
                width: '100%'
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            let type = document.getElementById('type');
            let rateOfInterest = document.getElementById('rate_of_interest');
            let rateOfInterestInput = document.getElementById('rateOfInterestInput');

            function toggleRateField() {
                if (type.value === 'credit_card') {
                    rateOfInterest.style.display = 'none';
                    rateOfInterestInput.removeAttribute('required');
                } else {
                    rateOfInterest.style.display = 'block';
                    // rateOfInterestInput.setAttribute('required', 'required');
                }
            }

            toggleRateField(); // ✅ run once on page load
            type.addEventListener('change', toggleRateField);
        });
    </script>
@endsection
