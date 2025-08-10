    <div class="footer section-space100">
        <!-- footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="widget-text mt40">
                        <!-- widget text -->
                        <p>Our goal at Borrow Loan Company is to provide access to personal loans and education loan,
                            car loan, home loan at insight competitive interest rates lorem ipsums. We are the loan
                            provider, you can use our loan product.</p>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="address-text"><span><i class="icon-placeholder-3 icon-1x"></i> </span>The Loan
                                    Company is located in Indore, India.</p>
                                <p>We have a physical office at: 107, Starlite
                                    Tower, Y.N. Road, Indore – 452001 India </p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="call-text"><span><i class="icon-phone-call icon-1x"></i></span>800-123-456</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.widget text -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Faq</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            @foreach ($services as $ser)
                                <li><a href="{{ route('services.show', $ser->slug) }}">{{ ucWords($ser->name) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-social mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i>Google Plus</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i>Linked In</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.footer -->
    <div class="tiny-footer">
        <!-- tiny footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                    <p>Terms of use | Privacy Policy</p>
                </div>
            </div>
        </div>
    </div>
    <!-- back to top icon -->
    <a href="#0" class="cd-top" title="Go to top">Top</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/menumaker.js') }}"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sticky-header.js') }}"></script>
    <!-- slider script -->
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slider-carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/service-carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/simple-slider.js') }}"></script>
    <!-- Back to top script -->
    <script src="{{ asset('js/back-to-top.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/notification/snackbar/snackbar.min.js') }}"></script>
    <script>
        @if (Session::get('alert-type') == 'success')
            @if (Session::has('message'))
                Snackbar.show({
                    text: "{{ Session::get('message') }}",
                    pos: 'top-right',
                    actionTextColor: '#fff',
                    backgroundColor: '#1abc9c'
                });
            @endif
        @elseif (Session::get('alert-type') == 'info')
            @if (Session::has('message'))
                Snackbar.show({
                    text: "{{ Session::get('message') }}",
                    pos: 'top-right',
                    actionTextColor: '#fff',
                    backgroundColor: '#2196f3'
                });
            @endif
        @elseif (Session::get('alert-type') == 'error')
            @if (Session::has('message'))
                Snackbar.show({
                    text: "{{ Session::get('message') }}",
                    pos: 'top-right',
                    actionTextColor: '#fff',
                    backgroundColor: '#e7515a'
                });
            @endif
        @else
            @if (Session::has('message'))
                Snackbar.show({
                    text: "{{ Session::get('message') }}",
                    pos: 'top-right',
                    actionTextColor: '#fff',
                    backgroundColor: '#3b3f5c'
                });
            @endif
        @endif
    </script>
    {{-- <script type="text/javascript">
        //jQuery to collapse the navbar on scroll
        $(window).scroll(function() {
            if ($(".header-transparent").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });
    </script> --}}
