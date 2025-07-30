@extends('frontend.layout.app')
@section('title', 'Blogs')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="active">Blogs</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                                <h1 class="page-title">Blogs</h1>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-3 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="btn-action"> <a href="#" class="btn btn-default">How To Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <div class="">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="row">
                            @forelse ($blogs as $blog)
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="post-block mb30">
                                        <div class="post-img">
                                            <a href="{{ route('blog.show', $blog->slug) }}" class="imghover"><img
                                                    src="{{ asset('storage/images/' . $blog->type . '/' . $blog->image) }}"
                                                    alt="Borrow - Loan Company Website Template"
                                                    class="img-fluid blogs-img"></a>
                                        </div>
                                        <div class="bg-white pinside40 outline">
                                            <h2><a href="{{ route('blog.show', $blog->slug) }}"
                                                    class="title">{{ ucwords($blog->title) }}</a>
                                            </h2>
                                            <p class="meta"><span
                                                    class="meta-date">{{ dd_format($blog->created_at, 'M d, Y') }}</span>
                                                {{-- <span class="meta-author">By<a href="#"> Admin</a></span> --}}
                                            </p>
                                            <p>{!! str_limit($blog->body, 200) !!}</p>
                                            <a href="{{ route('blog.show', $blog->slug) }}" class="btn-link">Read More</a>
                                        </div>
                                    </div>
                                </div>

                            @empty
                                <div>No records found</div>
                            @endforelse
                            {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="post-block mb30">
                                    <div class="post-img">
                                        <a href="blog-single.html" class="imghover"><img src="images/blog-img-1.jpg"
                                                alt="Borrow - Loan Company Website Template" class="img-fluid"></a>
                                    </div>
                                    <div class="bg-white pinside40 outline">
                                        <h2><a href="blog-single.html" class="title">Family Thinking for Loan</a></h2>
                                        <p class="meta"><span class="meta-date">Aug 24, 2017</span><span
                                                class="meta-author">By<a href="#"> Admin</a></span></p>
                                        <p>Nulla vehicula nibh vel malesuada dapibus ringilla nunc mi sit amet fbendum
                                            sapierttitor. </p>
                                        <a href="blog-single.html" class="btn-link">Read More</a>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="post-block mb30">
                                    <div class="post-img">
                                        <a href="blog-single.html" class="imghover"><img src="images/blog-img-2.jpg"
                                                alt="Borrow - Loan Company Website Templates" class="img-fluid"></a>
                                    </div>
                                    <div class="bg-white pinside40 outline">
                                        <h2><a href="blog-single.html" class="title">Are you students looking for loan?</a>
                                        </h2>
                                        <p class="meta"><span class="meta-date">Aug 23, 2017</span><span
                                                class="meta-author">By<a href="#"> Admin</a></span></p>
                                        <p>Malesuada urna sodales euusce sed erat libasellus id orci quis ligula pretium co
                                            ctus velit.</p>
                                        <a href="blog-single.html" class="btn-link">Read More</a>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="post-block mb30">
                                    <div class="post-img">
                                        <a href="blog-single.html" class="imghover"><img src="images/blog-img-3.jpg"
                                                alt="Borrow - Loan Company Website Template" class="img-fluid"></a>
                                    </div>
                                    <div class="bg-white pinside40 outline">
                                        <h2><a href="blog-single.html" class="title">Bigger home still the goal</a></h2>
                                        <p class="meta"><span class="meta-date">Aug 20, 2017</span><span
                                                class="meta-author">By<a href="#"> Admin</a></span></p>
                                        <p>Lorem ipsum dolor sit amet consectetur its lorem adipiscing elitras molestie
                                            nunceu its.</p>
                                        <a href="blog-single.html" class="btn-link">Read More</a>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="post-block mb30">
                                    <div class="post-img">
                                        <a href="blog-single.html" class="imghover"><img src="images/blog-img-4.jpg"
                                                alt="Borrow - Loan Company Website Template" class="img-fluid"></a>
                                    </div>
                                    <div class="bg-white pinside40 outline">
                                        <h2><a href="blog-single.html" class="title">5 Essential Financial Habits</a>
                                        </h2>
                                        <p class="meta"><span class="meta-date">Aug 15, 2017</span><span
                                                class="meta-author">By<a href="#"> Admin</a></span></p>
                                        <p>Pellentesque augue lacus hendr erit sit amet ultricies ahendrerit qui tortousce.
                                        </p>
                                        <a href="blog-single.html" class="btn-link">Read More</a>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"> --}}
                            {{-- <div class="post-block mb30">
                                    <div class="post-img">
                                        <a href="blog-single.html" class="imghover"><img src="images/blog-img-5.jpg"
                                                alt="Borrow - Loan Company Website Template" class="img-fluid"></a>
                                    </div>
                                    <div class="bg-white pinside40 outline">
                                        <h2><a href="blog-single.html" class="title">How to Get a Scholarship</a></h2>
                                        <p class="meta"><span class="meta-date">Aug 12, 2017</span><span
                                                class="meta-author">By<a href="#"> Admin</a></span></p>
                                        <p>Integer tincidunt quam a nulla aliquet loreml acerad ctum tellus augueac one ntum
                                            ut tincidunt.</p>
                                        <a href="blog-single.html" class="btn-link">Read More</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                            <div class="st-pagination">
                                <!--st-pagination-->
                                <div class="pagination col-lg-12 mt-3">
                                    <div class=" text-center mx-auto">
                                        <ul class="pagination text-center">
                                            {{ $blogs->appends(Request::all())->links('pagination::bootstrap-4') }}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.st-pagination-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
