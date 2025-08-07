@extends('frontend.layout.app')
@section('title', 'News | ' . ucwords($news->title))
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">{{ ucwords($news->title) }}</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                                <h1 class="page-title">{{ ucwords($news->title) }}</h1>
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
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="post-holder">
                                            <div class="post-block mb40">
                                                <div class="post-img mb30"><img
                                                        src="{{ asset('storage/images/' . $news->type . '/' . $news->image) }}"
                                                        alt="Borrow - Loan Company Website Template"
                                                        class="img-fluid blog-img">
                                                </div>
                                                <div class="bg-white">
                                                    <h1>{{ ucwords($news->title) }}</h1>
                                                    <p class="meta"><span
                                                            class="meta-date">{{ dd_format($news->created_at, 'M d, Y') }}</span>
                                                        {{-- <span class="meta-author">By<a href="#" class="meta-link">
                                                                Admin</a></span><span class="meta-comments">05<a
                                                                href="#" class=" meta-link"> Comments</a>
                                                        </span> --}}
                                                    </p>
                                                    <p>{!! $news->body !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="post-related mb40">
                                            <!-- post related -->
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h2 class="post-related-title mb20">Related post</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 mb30">
                                                    <div class="related-img mb20">
                                                        <a href="#"><img src="{{ asset('images/related-img-1.jpg') }}"
                                                                class="img-fluid"
                                                                alt="Borrow - Loan Company Website Template"></a>
                                                    </div>
                                                    <div class="post-related-content">
                                                        <h4 class="related-title mb10"><a href="#"
                                                                class="title">Consider Consolidation Loan</a></h4>
                                                        <span> in <a href="#" class="title"> “Home Loan” </a> </span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="related-img mb20">
                                                        <a href="#"><img src="{{ asset('images/related-img-2.jpg') }}"
                                                                class="img-fluid"
                                                                alt="Borrow - Loan Company Website Template"></a>
                                                    </div>
                                                    <div class="post-related-content">
                                                        <h4 class="related-title mb10"><a href="#" class="title">5
                                                                Essential financial Habits</a></h4>
                                                        <span>in<a href="#" class="title"> “Debt Consolidation” </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="post-navigation mb40">
                                            <!-- post navigation -->
                                            <div class="row">

                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="nav-previous"> <a href="#" class="prev-link">previous
                                                            post</a>
                                                        <h4><a href="#" class="title">Bigger home still the goal</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="nav-next text-right"> <a href="#"
                                                            class="next-link">next post</a>
                                                        <h4><a href="#" class="title">5 Essential financial
                                                                habits</a></h4>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> --}}
                                        {{-- <div class="post-author mb40">
                                            <!-- post author -->
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                    <div class="author-img">
                                                        <a href="#"><img src="{{ asset('images/author.jpg') }}"
                                                                class="img-fluid"
                                                                alt="Borrow - Loan Company Website Template"></a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                                    <div class="author-bio   ">
                                                        <div class="author-header">
                                                            <h3><a href="#" class="title">Harry Murray</a></h3>
                                                        </div>
                                                        <div class="author-content">
                                                            <p>Nam lorem purus sodales et laoreet lestie at felis urabitur
                                                                magna sem ultricen mollis invul tateolutpat risus lorem one
                                                                aecenas enim lectus molestie sitamet lorem.</p>
                                                            <a href="#" class="btn-link">View All Post</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="comments-area mb40">
                                            <h2 class="comments-title">4 Comments</h2>
                                            <ul class="comment-list listnone">
                                                <li class="comment">
                                                    <div class="comment-body mb30">
                                                        <div class="">
                                                            <div class="comment-author"><img
                                                                    src="{{ asset('images/user-pic-1.jpg') }}"
                                                                    alt="Borrow - Loan Company Website Template"
                                                                    class="img-fluid"> </div>
                                                            <div class="comment-info">
                                                                <div class="comment-header">
                                                                    <h4 class="user-title">Jose Arbogast</h4>
                                                                    <div class="comment-meta"><span
                                                                            class="comment-meta-date">Jan 25, 2017</span>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <p>Magna sem ultrices non mollis invul tateolutpat risus
                                                                        lorem aecenas enim lectus molestie sitamet lorem.
                                                                    </p>
                                                                    <div class="reply"><a href="#"
                                                                            class="btn-link">Reply</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="comment-list listnone">
                                                <li class="comment">
                                                    <div class="comment-body mb30">
                                                        <div class="">
                                                            <div class="comment-author"><img
                                                                    src="{{ asset('images/user-pic-2.jpg') }}"
                                                                    alt="Borrow - Loan Company Website Template"
                                                                    class="img-fluid"> </div>
                                                            <div class="comment-info">
                                                                <div class="comment-header">
                                                                    <h4 class="user-title">Angela Lawton</h4>
                                                                    <div class="comment-meta"><span
                                                                            class="comment-meta-date">Jan 25, 2017</span>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <p>Duis imperdiet mauris sitamet lectus aliquetnec
                                                                        convallis risus lorem friestibulum tempor sedmi sed
                                                                        ullamcorper. </p>
                                                                    <div class="reply"><a href="#"
                                                                            class="btn-link">Reply</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="childern listnone">
                                                        <li class="comment">
                                                            <div class="comment-body mb30">
                                                                <div class="">
                                                                    <div class="comment-author"><img
                                                                            src="{{ asset('images/user-pic-3.jpg') }}"
                                                                            alt="Borrow - Loan Company Website Template"
                                                                            class="img-fluid"> </div>
                                                                    <div class="comment-info">
                                                                        <div class="comment-header">
                                                                            <h4 class="user-title">Dorothy Lilly</h4>
                                                                            <div class="comment-meta">Jan 25, 2017</div>
                                                                        </div>
                                                                        <div class="comment-content">
                                                                            <p>Magna sem ultrices non mollis invul one lorem
                                                                                netlorem tenimolestie sitamet lorem.</p>
                                                                            <div class="reply"><a href="#"
                                                                                    class="btn-link">Reply</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="comment-list listnone">
                                                <li class="comment">
                                                    <div class="comment-body mb30">
                                                        <div class="">
                                                            <div class="comment-author"><img
                                                                    src="{{ asset('images/user-pic-4.jpg') }}"
                                                                    alt="Borrow - Loan Company Website Template"
                                                                    class="img-fluid"> </div>
                                                            <div class="comment-info">
                                                                <div class="comment-header">
                                                                    <h4 class="user-title">Evan Parra</h4>
                                                                    <div class="comment-meta"><span
                                                                            class="comment-meta-date">Jan 25, 2017</span>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <p>Magna sem ultrices non mollis invul tateolutpat risus
                                                                        lorem aecenlectus molestie sitamet lorem.</p>
                                                                    <div class="reply"><a href="#"
                                                                            class="btn-link">Reply</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> --}}
                                        {{-- <div class="leave-comments pinside30 bg-primary mb30">
                                            <h2 class="reply-title">Leave A Comment</h2>
                                            <form class="reply-form">
                                                <div class="row">
                                                    <!-- Textarea -->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">

                                                            <label class="sr-only control-label" for="textarea"></label>
                                                            <textarea class="form-control" id="textarea" name="textarea" rows="6" placeholder="Comments"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="sr-only control-label" for="name"></label>
                                                            <input id="name" name="name" type="text"
                                                                class="form-control" placeholder="Name" required>
                                                        </div>
                                                    </div>
                                                    <!-- Text input-->
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="sr-only control-label" for="email"></label>
                                                            <input id="email" name="email" type="text"
                                                                class="form-control" placeholder="E-mail" required>
                                                        </div>
                                                    </div>
                                                    <!-- Text input-->
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="sr-only control-label" for="Subject"></label>
                                                            <input id="Subject" name="Subject" type="text"
                                                                class="form-control" placeholder="Subject" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- Button -->
                                                        <div class="form-group">
                                                            <button id="singlebutton" name="singlebutton"
                                                                class="btn btn-default">leave comments</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="sidebar-area">
                                    <div class="row">
                                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-primary">
                                                <div class="widget widget-search">
                                                    <h3 class="widget-title">Search Bar</h3>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button"><i
                                                                    class="fa fa-search"></i></button>
                                                        </span>
                                                    </div>
                                                    <!-- /input-group -->
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-primary">
                                                <div class="widget widget-category">
                                                    <h3 class="widget-title">Categories</h3>
                                                    <ul class="listnone bullet bullet-arrow-circle-right">
                                                        <li><a href="#">Personal Loan</a></li>
                                                        <li><a href="#">Education Loan</a></li>
                                                        <li><a href="#">Car Loan</a></li>
                                                        <li><a href="#">Home Loan</a></li>
                                                        <li><a href="#">Business Loan</a></li>
                                                        <li><a href="#">Debt Consolidation</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-primary">
                                                <div class="widget widget-recent-post">
                                                    <h3 class="widget-title mb30">Recent post</h3>
                                                    <ul class="listnone">
                                                        @forelse ($relatedNews as $nw)
                                                            <li>
                                                                <div class="recent-block mb20">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-xl-4 col-lg-4 col-md-2 col-sm-5 col-5">
                                                                            <a href="{{ route('news.show', $nw->slug) }}"><img
                                                                                    src="{{ asset('storage/images/' . $nw->type . '/' . $nw->image) }}"
                                                                                    alt="Borrow - Loan Company Website Template"
                                                                                    class="img-fluid mb10 rp"></a>
                                                                        </div>
                                                                        <div
                                                                            class="col-xl-8 col-lg-8 col-md-10 col-sm-7 col-7">
                                                                            <h4 class="recent-title mb10"><a
                                                                                    href="{{ route('news.show', $nw->slug) }}"
                                                                                    class="title">{{ ucwords($nw->title) }}</a>
                                                                            </h4>
                                                                            <div class="meta">
                                                                                <!-- post meta -->
                                                                                <span
                                                                                    class="meta-date">{{ dd_format($nw->created_at, 'M d, Y') }}</span>
                                                                            </div>
                                                                            <!-- /.post meta -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @empty
                                                            <div>No records found</div>
                                                        @endforelse
                                                        {{-- <li>
                                                            <div class="recent-block mb20">
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-4 col-md-2 col-sm-5 col-5">
                                                                        <a href="#"><img
                                                                                src="{{ asset('images/recent-img-2.jpg') }}"
                                                                                alt="Borrow - Loan Company Website Template"
                                                                                class="img-fluid mb10"></a>
                                                                    </div>
                                                                    <div
                                                                        class="col-xl-8 col-lg-8 col-md-10 col-sm-7 col-7">
                                                                        <h4><a href="#" class="title">5 Essential
                                                                                Financial Habits</a></h4>
                                                                        <div class="meta">
                                                                            <!-- post meta -->
                                                                            <span class="meta-date">Aug 24, 2017</span>
                                                                        </div>
                                                                        <!-- /.post meta -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="recent-block mb20">
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-4 col-md-2 col-sm-5 col-5">
                                                                        <a href="#"><img
                                                                                src="{{ asset('images/recent-img-3.jpg') }}"
                                                                                alt="Borrow - Loan Company Website Template"
                                                                                class="img-fluid mb10"></a>
                                                                    </div>
                                                                    <div
                                                                        class="col-xl-8 col-lg-8 col-md-10 col-sm-7 col-7">
                                                                        <h4><a href="#" class="title">Choosing
                                                                                Right Education Loan</a></h4>
                                                                        <div class="meta">
                                                                            <!-- post meta -->
                                                                            <span class="meta-date">Aug 23, 2017 </span>
                                                                        </div>
                                                                        <!-- /.post meta -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-primary">
                                                <div class="widget widget-archives">
                                                    <h3 class="widget-title">Archives</h3>
                                                    <ul class="listnone bullet bullet-arrow-circle-right">
                                                        <li><a href="#">August 2017</a></li>
                                                        <li><a href="#">July 2017</a></li>
                                                        <li><a href="#">June 2017</a></li>
                                                        <li><a href="#">May 2017</a></li>
                                                        <li><a href="#">April 2017</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <!--  tags -->
                                            <div class="bg-primary">
                                                <div class="widget widget-tags">
                                                    <h3 class="widget-title mb30">Tags</h3>
                                                    <!-- widget title -->
                                                    <a href="#" title="Car Loan">Car Loan</a> <a href="#"
                                                        title="Education">Education</a> <a href="#"
                                                        title="Home">Home</a> <a href="#"
                                                        title="Debt Consolidation">Debt Consolidation</a> <a
                                                        href="#" title="Business">Business</a> <a href="#"
                                                        title="Education">Education</a>
                                                </div>
                                                <!-- /.widget well bg -->
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content end -->
@endsection
