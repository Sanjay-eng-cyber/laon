@extends('frontend.layout.app')
@section('title', 'Contact Us')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                                <h1 class="page-title">Contact Us</h1>
                            </div>
                            {{-- <div class="col-xl-8 col-lg-8 col-md-3 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="btn-action"> <a href="#" class="btn btn-default">How To Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="sub-nav" id="sub-nav">
                        <ul class="nav nav-justified">
                            <li class="nav-item">
                                <a href="{{ route('contact-us') }}" class="nav-link">Give me call back</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('loan-calculator') }}" class="nav-link">Emi Caculator</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="contact-form mb60">
                            <div class=" ">
                                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                                    <div class="mb60  section-title text-center  ">
                                        <!-- section title start-->
                                        <h1>Get In Touch</h1>
                                        <p>Reach out to us &amp; we will respond as soon as we can.</p>
                                    </div>
                                </div>

                                <form action="{{ route('inquiry.store') }}" method="POST" class="row g-3">
                                    @csrf
                                    <div class="col-md-6">
                                        <select name="service_id" class="form-control select2" id="service_id" required>
                                            <option value="" selected disabled>Select Loan Type</option>
                                            @foreach ($services as $ser)
                                                <option value="{{ $ser->id }}"
                                                    {{ old('service_id', $service->id ?? '') == $ser->id ? 'selected' : '' }}>
                                                    {{ ucWords($ser->name) }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('service_id'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('service_id') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <select name="city_id" class="form-control select2" id="city_id" required>
                                            <option value="" selected disabled>Select City</option>
                                            @foreach ($cities as $c)
                                                <option value="{{ $c->id }}"
                                                    {{ old('city_id') == $c->id ? 'selected' : '' }}>
                                                    {{ ucWords($c->name) }} </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('city_id'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('city_id') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control mt-1"
                                            placeholder="Your Name" minlength="5" maxlength="180"
                                            value="{{ old('name') }}" required>
                                        @if ($errors->has('name'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control mt-1" placeholder="Email"
                                            minlength="5" maxlength="60" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone"
                                            minlength="10" maxlength="10" value="{{ old('phone') }}" required>
                                        @if ($errors->has('phone'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('phone') }}
                                            </div>
                                        @endif
                                    </div>


                                    <div class="col-md-6">
                                        <input type="date" name="date" class="form-control"
                                            value="{{ old('date') }}" required>
                                        @if ($errors->has('date'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('date') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">Send
                                            Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.section title start-->
                    </div>
                    <div class="contact-us mb60">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="mb60  section-title">
                                    <!-- section title start-->
                                    <h1>We are here to help you </h1>
                                    <p class="lead">Various versions have evolved over the years sometimes by accident
                                        sometimes on purpose injected humour and the like.</p>
                                </div>
                                <!-- /.section title start-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"><i class="icon-briefcase icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Branch Office</h2>
                                    <p>2843 Lakewood Drive
                                        <br> Jersey City, CA 07304
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Call us at </h2>
                                    <h1 class="text-big">800-123-456 / 789 </h1>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="bg-boxshadow pinside60 outline text-center mb30">
                                    <div class="mb40"> <i class="icon-letter icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">Email Address</h2>
                                    <p>lnfo@loanadvisor.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="map" ></div> --}}
                    <iframe id="googleMap" class="mb-5"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235527.49482607495!2d75.69903738855072!3d22.72388828988633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1754845272331!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
    {{-- <script>
        function initMap() {
            var myLatLng = {
                lat: 23.357030,
                lng: 75.022336
            };

            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 8,
                center: myLatLng,
                scrollwheel: false,

            });
            var image = 'images/map-pin.png';
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image,
                title: 'Hello World!'

            });
        }
    </script> --}}
@endsection
