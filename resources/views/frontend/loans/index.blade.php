 @extends('frontend.layout.app')
 @section('title', 'Services')
 @section('content')
     <div class="page-header">
         <div class="container">
             <div class="row">
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="page-breadcrumb">
                         <ol class="breadcrumb">
                             <li><a href="index.html">Home</a></li>
                             <li class="active">Services</li>
                         </ol>
                     </div>
                 </div>
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="bg-white pinside30">
                         <div class="row">
                             <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                                 <h1 class="page-title">Loans</h1>
                             </div>
                             {{-- <div class="col-xl-8 col-lg-8 col-md-3 col-sm-12 col-12">
                                 <div class="row">
                                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                         <div class="btn-action"> <a href="#" class="btn btn-default">How To
                                                 Apply</a> </div>
                                     </div>
                                 </div>
                             </div> --}}
                         </div>
                     </div>
                     <div class="sub-nav" id="sub-nav">
                         <ul class="nav nav-justified">
                             <li class="nav-item">
                                 <a href="contact-us.html" class="nav-link">Give me call back</a>
                             </li>
                             <li class="nav-item">
                                 <a href="#" class="nav-link">Emi Caculator</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class=" ">
         <!-- content start -->
         <div class="container">
             <div class="row">
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="wrapper-content">
                         <div class="row">
                             @forelse ($services as $ser)
                                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                     <div class="service-img-box mb30 text-center">
                                         <div class="service-img">
                                             <a href="{{ route('services.show', $ser->slug) }}" class="imghover"><img
                                                     src="{{ asset('storage/images/services/' . $ser->image) }}"
                                                     alt="Borrow - Loan Company Website Template " class="img-fluid"></a>
                                         </div>
                                         <div class="service-content bg-white pinside30 outline">
                                             <h2><a href="{{ route('services.show', $ser->slug) }}"
                                                     class="title">{{ ucwords($ser->name) }}</a></h2>
                                             <p>{!! str($ser->short_desc)->limit(120) !!}</p>
                                             <a href="{{ route('services.show', $ser->slug) }}" class="btn-link">Read
                                                 more</a>
                                         </div>
                                     </div>
                                 </div>
                             @empty
                                 <div>No records found</div>
                             @endforelse
                         </div>
                         <div class="pagination col-lg-12 mt-3">
                             <div class="text-center mx-auto">
                                 <ul class="pagination text-center">
                                     {{ $services->appends(Request::all())->links('pagination::bootstrap-4') }}
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
