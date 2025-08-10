@extends('frontend.layout.app')
@section('title', 'Dashboard')
@section('content')
    {{-- <body> --}}
    <div class="slider" id="slider">
        <!-- slider -->
        <div class="slider-gradient-img"><img src="images/index-three-slider-2.jpg"
                alt="Borrow - Loan Company Website Template" class="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="slider-captions">
                            <!-- slider-captions -->
                            <h1 class="slider-title">Simple, Secure and Affordable Rate</h1>
                            <p class="slider-text d-none d-xl-block d-lg-block d-md-block">The low rate you need for the
                                need you want! Call
                                <br>
                                <strong class="text-highlight">(555) 123-4567</strong>
                            </p>
                            <a href="team.html" class="btn btn-outline">Loan Products</a>
                        </div>
                        <!-- /.slider-captions -->
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-gradient-img"><img src="images/index-three-slider-3.jpg"
                    alt="Borrow - Loan Company Website Template" class="">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="slider-captions">
                                <!-- slider-captions -->
                                <h1 class="slider-title"> Lowest Car Loan Rate <strong class="text-highlight">9.60%</strong>
                                </h1>
                                <p class="slider-text d-none d-xl-block d-lg-block d-md-block"> We provide an excellent
                                    service Loan company. Lorem ipsum simple dummy content goes here.</p>
                                <a href="#" class="btn btn-default ">Check Eligiblity</a>
                            </div>
                            <!-- /.slider-captions -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="slider-gradient-img"><img src="images/index-three-slider-1.jpg"
                    alt="Borrow - Loan Company Website Template" class="">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="slider-captions">
                                <!-- slider-captions -->
                                <h1 class="slider-title">Student Loans with Greate Rates <strong
                                        class="text-highlight">11.10%</strong></h1>
                                <p class="slider-text d-none d-xl-block d-lg-block d-md-block">We provide an excellent
                                    service for all types of loans in
                                    <br> ahmedabad and offer service, advice and direction.
                                </p>
                                <a href="#" class="btn btn-default">View Products</a>
                            </div>
                            <!-- /.slider-captions -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="section-space20 bg-white lender-logo-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="lender-box"><img src="images/lender-logo-1.png"></div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="lender-box"><img src="images/lender-logo-2.png"></div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="lender-box"><img src="images/lender-logo-3.png"></div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="lender-box"> <img src="images/lender-logo-4.png"></div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="lender-box"><img src="images/lender-logo-5.png"></div>
                    </div>
                    <div class="lender-box">
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                            <div class="lender-box"> <img src="images/lender-logo-6.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 ">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Let us help you find a loan</h1>
                        <p>We will match you with a loan program that meet your financial need.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                @forelse ($services as $ser)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-img-box mb30 text-center outline h-100">
                            <div class="service-img">
                                <a href="{{ route('services.show', $ser->slug) }}" class="imghover"><img
                                        src="{{ asset('storage/images/services/' . $ser->image) }}" alt="service"
                                        class="img-fluid"></a>
                            </div>
                            <div class="service-content bg-white pinside30">
                                <h2><a href="{{ route('services.show', $ser->slug) }}"
                                        class="title">{{ ucwords($ser->name) }}</a></h2>
                                <p>{!! str($ser->short_desc)->limit(120) !!}</p>
                                <a href="{{ route('services.show', $ser->slug) }}" class="btn-link">Read more</a>
                            </div>
                        </div>
                    </div>

                @empty
                    <div>No Services Found</div>
                @endforelse
                {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-img-box mb30 text-center outline">
                            <div class="service-img">
                                <a href="home-loan.html" class="imghover"><img src="images/blog-img-1.jpg"
                                        alt="Borrow - Loan Company Website Template " class="img-fluid"></a>
                            </div>
                            <div class="service-content bg-white pinside30">
                                <h2><a href="home-loan.html" class="title">Home Loan</a></h2>
                                <p>Lorem ipsum dolor sitamet secteture adipiscing eilit mauris diem lorem ipsum anibus
                                    atdsim eipit. </p>
                                <a href="home-loan.html" class="btn-link">Read more</a>
                            </div>
                        </div>
                    </div> --}}
                {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="service-img-box mb30 text-center outline">
                            <div class="service-img">
                                <a href="education-loan.html" class="imghover"><img src="images/blog-img-2.jpg"
                                        alt="Borrow - Loan Company Website Template " class="img-fluid"></a>
                            </div>
                            <div class="service-content bg-white pinside30">
                                <h2><a href="education-loan.html" class="title">Education Loan</a></h2>
                                <p>Serlaoreet necroin lobortis diam sit rem sitamet urna porttitor lorem amesroces livose
                                    lorem anois.</p>
                                <a href="education-loan.html" class="btn-link">Read more</a>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </div>
    <div class="section-space80 bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="section-title mb60 text-center">
                        <!-- section title start-->
                        <h1>Reasons to choose us</h1>
                        {{-- <p>Nunc iaculis velit a vestibulum cursu estibentum nec ante eu molestie.</p> --}}
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="feature feature-icon-style">
                        <div class="feature-icon"> <i class="fa fa-calculator fa-2x"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">EMI Calculator</h3>
                            {{-- <p>Fusce sed erat libasellus id orciquise ctus velit, asimple male suada urna sodales eu.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="feature feature-icon-style">
                        <div class="feature-icon"><i class="fa fa-heart fa-2x"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">Customers love us!</h3>
                            {{-- <p>Quisque ut ligula nec est pretium phareest male sunec felis atmetus mattis volutpat invel
                                elit.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="feature feature-icon-style">
                        <div class="feature-icon"> <i class="fa fa-file-text-o fa-2x"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">Easy Documentation </h3>
                            {{-- <p>Vestibulum elementum pellent esques ittnunc dui in massa variusare augue feugiat.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="feature feature-icon-style">
                        <div class="feature-icon"><i class="fa fa-flash fa-2x"></i></div>
                        <div class="feature-content">
                            <h3 class="feature-title">Fast Approval</h3>
                            {{-- <p>Pellent esques ittnunc vene nata uri bulum eleme ntum in massa varnare augue feugiat.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space80 ">
        <div class="container">
            <div class="row">
                <div class=" offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title mb60 text-center">
                        <!-- section title start-->
                        <h1>Apply in three easy steps</h1>
                        <p> You won’t be the only one lorem ipsu mauris diam mattises.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="how-it-block">
                        <h3 class="how-it-no">1.</h3>
                        <div class="how-it-content">
                            <h2>Complete the form</h2>
                            <p>First we need to knowa little about you and your needs for loan.</p>
                            <a href="{{ route('contact-us') }}" class="btn btn-default btn-sm">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="how-it-block">
                        <h3 class="how-it-no">2.</h3>
                        <div class="how-it-content">
                            <h2>Get Approval</h2>
                            <p>You will within five working hours of submitting your application and get approved</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="how-it-block">
                        <h3 class="how-it-no">3.</h3>
                        <div class="how-it-content">
                            <h2>Secure Your Funds</h2>
                            <p>After approved, we will can you to work out the details. We sent money within hours of
                                approved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space80 bg-gradient call-to-action">
        <div class="container">
            <div class="row">
                <div class=" offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="text-center">
                        <!-- section title start-->
                        <h1 class="text-white">Get Started Simple & Securely</h1>
                        <p class="text-white">Understand what is the loan amount you are eligible for and what would
                            the EMI be.you can apply as per your eligibility.</p>
                        <a href="#" class="btn btn-default">Check eligibility</a>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="section-space80">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="section-title mb60 text-center">
                            <!-- section title start-->
                            <h1>Loved by 1,000+ people around the world!</h1>
                            <p> You won’t be the only one lorem ipsu mauris diam mattises.</p>
                        </div>
                        <!-- /.section title start-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="customer-block">
                            <div class="customer-quote-circle">
                                <i class="fa fa-quote-right "></i>
                            </div>
                            <div class="customer-img"><img src="images/customer-1.jpg" alt=""
                                    class="img-circle"></div>
                            <div class="customer-content">
                                <p class="customer-text">“Now i can learn my study easily thanks borrow nunc iaculis velit
                                    vestibulum cursu estibulum laoreet ipsum."</p>
                                <div class="customer-meta"><span class="customer-name">Maria Doe</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="customer-block">
                            <div class="customer-quote-circle">
                                <i class="fa fa-quote-right "></i>
                            </div>
                            <div class="customer-img"><img src="images/customer-2.jpg" alt=""
                                    class="img-circle"></div>
                            <div class="customer-content">
                                <p class="customer-text">“Finding easy solutions to grow my business in way lis velit vesti
                                    bulum cursu estibulum laoreet ipsum. Thanks a lot."</p>
                                <div class="customer-meta"><span class="customer-name">Jhone Doe</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="customer-block">
                            <div class="customer-quote-circle">
                                <i class="fa fa-quote-right "></i>
                            </div>
                            <div class="customer-img"><img src="images/customer-3.jpg" alt=""
                                    class="img-circle"></div>
                            <div class="customer-content">
                                <p class="customer-text">“Every single person was truly fantastic ! nunc iaculis velit
                                    vestibulum cursu estibulum laoreet ipsum."</p>
                                <div class="customer-meta"><span class="customer-name">Sunita Agrawal</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <div class="section-space80 bg-primary">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Frequently Asked Questions</h1>
                        <p> Our mission is to deliver reliable, latest news and opinions.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="st-accordion ">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading active" role="tab" id="headingOne">
                                    <h4 class="panel-title"> <a role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne"><i class="fa fa-minus-circle sign"></i>How
                                            much can I borrow?</a> </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">Donec porttitor enim sed justo egestas vehicula. Maecenas
                                        interdum, urna quis facilisis elementum, lectus mi tristique turpis, dapibus
                                        suscipit tellus dui euismSed ullamcorper onsectetur velit. Curabitur luctus et
                                        arcu eget sodales.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo"><i class="fa fa-plus-circle sign"></i>Can I pay
                                            off my loan early?</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">Yes, absolutely! At The Loan Company, we encourage early
                                        loan repayment. You have the flexibility to pay off your loan before the term
                                        ends without any penalties or additional charges. Feel free to save on interest
                                        and clear your debt sooner.div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title"> <a class="collapsed" role="button"
                                                data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree"><i
                                                    class="fa fa-plus-circle sign"></i>Do you offering refinancing
                                                ?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingThree">
                                        <div class="panel-body">Yes, we offer refinancing options at The Loan Company.
                                            If you have an existing loan, you can explore the possibility of refinancing
                                            it with us. Refinancing allows you to obtain a new loan with better terms,
                                            such as a lower interest rate or extended repayment period. It can help you
                                            save money or manage your finances more effectively. Contact us to discuss
                                            your refinancing options today
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title"> <a class="collapsed" role="button"
                                                data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour"><i
                                                    class="fa fa-plus-circle sign"></i>When should i apply?</a> </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingFour">
                                        <div class="panel-body">You can apply for a personal loan from The Loan Company
                                            at any time that suits your needs. Whether you have an urgent financial
                                            requirement or are planning for an upcoming expense, we are here to assist
                                            you. Our application process is convenient and straightforward. Simply apply
                                            when you are ready, and we will guide you through the rest. Don’t hesitate
                                            to reach out to us whenever you’re prepared to take the next step.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-space80">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="mb60 text-center section-title">
                            <!-- section title start-->
                            <h1>Latest News from Loan Company</h1>
                            <p> Our mission is to deliver reliable, latest news and opinions.</p>
                        </div>
                        <!-- /.section title start-->
                    </div>
                </div>
                <div class="row">
                    @forelse ($news as $nw)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="post-block mb30">
                                <div class="post-img">
                                    <a href="{{ route('news.show', $nw->slug) }}" class="imghover"><img
                                            src="{{ asset('storage/images/' . $nw->type . '/' . $nw->image) }}"
                                            alt="Borrow - Loan Company Website Template" class="img-fluid"
                                            style="height:200px; width:400px;"></a>
                                </div>
                                <div class="bg-white pinside40 outline">
                                    <h2><a href="blog-single.html" class="title">{{ $nw->title }}</a>
                                    </h2>
                                    <p class="meta"><span class="meta-date">{{ dd_format($nw->created_at, 'd M, Y') }}
                                            <p>{!! str_limit($nw->body, 200) !!}</p>
                                            <a href="{{ route('news.show', $nw->slug) }}" class="btn-link">Read
                                                More</a>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div>No News Founds</div>
                    @endforelse
                </div>
            </div>
        </div>
        {{-- </body> --}}
    @endsection

    </html>
