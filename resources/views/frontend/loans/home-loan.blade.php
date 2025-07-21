  @extends('frontend.layout.app')
  @section('title', ucWords($service->name))
  @section('content')
      <div class="page-header">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="page-breadcrumb">
                          <ol class="breadcrumb">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Services</a></li>
                              <li class="active">{{ ucWords($service->name) }}</li>
                          </ol>
                      </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="bg-white pinside30">
                          <div class="row">
                              <div class="col-xl-5 col-lg-5 col-md-4 col-sm-12 col-12">
                                  <h1 class="page-title">{{ ucWords($service->name) }}</h1>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12 col-12">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="rate-block">
                                              <h1 class="rate-number">{{ number_format($service->rate_of_interest, 1) }}%
                                              </h1>
                                              <small>Rate of Interest</small>
                                          </div>
                                      </div>
                                      {{-- <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                                          <div class="btn-action"> <a href="contact-us.html" class="btn btn-primary">Get a
                                                  call back</a> <a href="#" class="btn btn-default">Emi Calculator</a>
                                          </div>
                                      </div> --}}
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="sub-nav" id="sub-nav">
                          <ul class="nav nav-justified">
                              <li class="nav-item"><a href="#section-about" class="page-scroll nav-link">About Loan</a></li>
                              <li class="nav-item"><a href="#section-financeNeed" class="page-scroll nav-link">Finance what
                                      you need</a>
                              </li>
                              <li class="nav-item"><a href="#section-feature" class="page-scroll nav-link">features &amp;
                                      Benefits</a></li>
                              <li class="nav-item"><a href="#section-eleigiblity"
                                      class="page-scroll nav-link">eligibility</a></li>
                              <li class="nav-item"><a href="#section-faq" class="page-scroll nav-link">FAQ’S</a></li>
                              <li class="nav-item"><a href="#section-apply" class="page-scroll nav-link">Apply now</a></li>
                              <li class="nav-item"><a href="#service_cities" class="page-scroll nav-link">Cities We
                                      Serve</a></li>
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
                      <div class="wrapper-content bg-white">
                          <div class="section-scroll pinside60" id="section-about">
                              <h1>About Home Loan</h1>
                              <i> “Helping you get your dream house.”</i>
                              <p class="lead mt-2">A home loan is a financial product that allows you to borrow money from a
                                  bank or other
                                  financial institution to purchase a property. Home loans are usually repaid for years, and
                                  the interest rate is generally fixed. Home loans can be used to buy both new and existing
                                  properties.</p>
                              <p>To make your home credit venture a smooth sail, we will assist you with eligibility
                                  criteria, process, necessary documents, comparison and best possible rates in the market.
                              </p>
                              {{-- <a href="#" class="btn btn-default">Apply for loan</a> --}}
                          </div>
                          <div class="section-scroll" id="section-financeNeed">
                              <div class="bg-light pinside60">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb60">
                                              <h2> Get financing for whatever you need now</h2>
                                              <p>Achieve all your goals and aspirations; with the right kind of help,
                                                  exactly when you need it.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>New Home</h3>
                                              <p>New Home Loan at basic interest rates from Borrow-Loan Company. You can
                                                  apply online and check your eligibility and easy EMI. Fast Approval for
                                                  your new home loan.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-62 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Home Conversion</h3>
                                              <p>A home conversion loan is a scheme for those who have already taken a
                                                  housing loan. This loan follow some rules and regulations.It is a part of
                                                  loan.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Land Purchase</h3>
                                              <p>Borrow Loan offers home loan for land purchase to make your dream home. You
                                                  can compare home loan rates with our compare loan table. Apply online for
                                                  Home Loan.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Home Renovation</h3>
                                              <p>Get instant approval for renovation your home. Borrow introduce home
                                                  improvement loan. It is with basic rate and flexible EMI repayment.For
                                                  more detail you can check our loan products.
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="bg-default pinside80 text-center">
                              <div class="row">
                                  <h1 class="text-white">Get financing for whatever you need now</h1>
                                  {{-- <a href="#" class="btn btn-default">Enquire Now</a> --}}
                              </div>
                          </div>
                          <div class="section-scroll" id="section-feature">
                              <div class="pinside60">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb60">
                                              <h2> Features of Home Loan</h2>
                                              <p>All loans are not created equal, personal loan has become a great option
                                                  for people to use.
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              <h3>Salaried & Self Employed</h3>
                                              <p>Self-employed and salaried workers have different home loan features to
                                                  take advantage of. In addition, we offer both fixed and variable rate
                                                  options, so you can choose the repayment schedule that best suits your
                                                  needs.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-light-bulb-1 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Loan For Agriculturists</h3>
                                              <p>Agriculturalists can also apply for home loans. The process is similar to
                                                  that of other applicants, but some additional documents that
                                                  agriculturists need to submit, such as proof of their agricultural income
                                                  and land ownership.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-money icon-default icon-2x"></i></div> --}}
                                              <h3>Home Loans For NRIs</h3>
                                              <p>NRIs (non-resident Indians) can also apply for home loans in India. The
                                                  process is somewhat similar to Indian citizens, but some additional
                                                  documents that NRIs need to submit include a copy of their passport and
                                                  visa and proof of their income and employment.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-settings-6 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>No Morgage</h3>
                                              <p>Our home loan features no mortgage and offers a unique opportunity for
                                                  those looking to purchase a home. With no mortgage insurance required, we
                                                  provide the best possible interest rates and repayment terms as per your
                                                  needs.
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="section-scroll" id="section-eleigiblity">
                              <div class=" bg-light pinside60">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb60">
                                              <h2>Personal Loan - Eligibility</h2>
                                              <p> Any salaried, self-employed or professional Public and Privat companies,
                                                  Government sector employees including Public Sector is eligible for a
                                                  personal loan. </p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                          <div class="feature-blurb mb30">
                                              <h3>Age</h3>
                                              <p>Maximum age of applicant at loan maturity: 60 years</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

                                          <div class="feature-blurb mb30">
                                              <h3>Income</h3>
                                              <p>Minimum Net Monthly Income: Rs 15,000</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

                                          <div class="feature-blurb mb30">
                                              <h3>Credit Rating</h3>
                                              <p>Applicant should have the bank specified credit score. </p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div
                                          class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 offset-md-3 col-md-6 col-sm-offset-3 col-sm-12 col-12">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="section-scroll" id="section-faq">
                              <div class="pinside60">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb60">
                                              <h2>Frequently Ask Questions</h2>
                                              <p>If you have a question that deals with clients, customers or the public in
                                                  general, there is bound to be a need for the FAQ page. </p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 st-accordion">
                                          <div class="panel-group" id="accordion" role="tablist"
                                              aria-multiselectable="true">
                                              <div class="panel panel-default">
                                                  <div class="panel-heading" role="tab" id="headingOne">
                                                      <h4 class="panel-title"> <a role="button" data-toggle="collapse"
                                                              data-parent="#accordion" href="#collapseOne"
                                                              aria-expanded="true" aria-controls="collapseOne"> Can I pay
                                                              off my loan early? </a> </h4>
                                                  </div>
                                                  <div id="collapseOne" class="panel-collapse collapse in"
                                                      role="tabpanel" aria-labelledby="headingOne">
                                                      <div class="panel-body">
                                                          <p>
                                                              Yes, absolutely! At The Loan Company, we encourage early loan
                                                              repayment. You have the flexibility to pay off your loan
                                                              before the term ends without any penalties or additional
                                                              charges. Feel free to save on interest and clear your debt
                                                              sooner.
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="panel panel-default">
                                                  <div class="panel-heading" role="tab" id="headingTwo">
                                                      <h4 class="panel-title"> <a class="collapsed" role="button"
                                                              data-toggle="collapse" data-parent="#accordion"
                                                              href="#collapseTwo" aria-expanded="false"
                                                              aria-controls="collapseTwo"> Do you offering refinancing
                                                              ?</a> </h4>
                                                  </div>
                                                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                      aria-labelledby="headingTwo">
                                                      <div class="panel-body">
                                                          <p>Yes, we offer refinancing options at The Loan Company. If you
                                                              have an existing loan, you can explore the possibility of
                                                              refinancing it with us. Refinancing allows you to obtain a new
                                                              loan with better terms, such as a lower interest rate or
                                                              extended repayment period. It can help you save money or
                                                              manage your finances more effectively. Contact us to discuss
                                                              your refinancing options today</p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="panel panel-default">
                                                  <div class="panel-heading" role="tab" id="headingThree">
                                                      <h4 class="panel-title"> <a class="collapsed" role="button"
                                                              data-toggle="collapse" data-parent="#accordion"
                                                              href="#collapseThree" aria-expanded="false"
                                                              aria-controls="collapseThree"> When should i apply? </a>
                                                      </h4>
                                                  </div>
                                                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                      aria-labelledby="headingThree">
                                                      <div class="panel-body">
                                                          <p>You can apply for a personal loan from The Loan Company at any
                                                              time that suits your needs. Whether you have an urgent
                                                              financial requirement or are planning for an upcoming expense,
                                                              we are here to assist you. Our application process is
                                                              convenient and straightforward. Simply apply when you are
                                                              ready, and we will guide you through the rest. Don’t hesitate
                                                              to reach out to us whenever you’re prepared to take the next
                                                              step.p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="panel panel-default">
                                                  <div class="panel-heading" role="tab" id="headingFour">
                                                      <h4 class="panel-title"> <a role="button" data-toggle="collapse"
                                                              data-parent="#accordion" href="#collapseFour"
                                                              aria-expanded="true" aria-controls="collapseFour">Where are
                                                              you located?</a> </h4>
                                                  </div>
                                                  <div id="collapseFour" class="panel-collapse collapse " role="tabpanel"
                                                      aria-labelledby="headingFour">
                                                      <div class="panel-body">
                                                          <p>The Loan Company is located in Indore, India. We have a
                                                              physical office at:</p>
                                                          <p>
                                                              107, Starlite Tower, Y.N. Road, Indore – 452001 India
                                                          </p>
                                                          <p>
                                                              You can visit our office during business hours or reach out to
                                                              us through the provided address for any inquiries or
                                                              assistance regarding our personal loan services.
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="section-scroll" id="section-apply">
                              <div class="bg-light pinside60">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb60 text-center">
                                              <h1>Get a Quote</h1>
                                              <p>Now apply for a Car Loan online, All you need to do is provide your details
                                                  below application form.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <form class="">

                                              <fieldset>
                                                  <div class="row">
                                                      <!-- Text input-->
                                                      <div
                                                          class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 form-group ">
                                                          <label class="control-label" for="name">Name</label>
                                                          <div class="">
                                                              <input id="name" name="name" type="text"
                                                                  placeholder="Name" class="form-control input-md"
                                                                  required>
                                                              <span class="help-block"> </span>
                                                          </div>
                                                      </div>
                                                      <!-- Text input-->
                                                      <div
                                                          class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 form-group ">
                                                          <label class=" control-label" for="email">E-Mail</label>
                                                          <div class="">
                                                              <input id="email" name="email" type="text"
                                                                  placeholder="E-mail" class="form-control input-md">
                                                          </div>
                                                      </div>
                                                      <!-- Text input-->
                                                      <div
                                                          class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 form-group ">
                                                          <label class="control-label" for="phone">Phone</label>
                                                          <div class="">
                                                              <input id="phone" name="phone" type="text"
                                                                  placeholder="Phone" class="form-control">
                                                          </div>
                                                      </div>
                                                      <div
                                                          class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 form-group slide-ranger ">
                                                          <p id="slider-range-min"></p>
                                                          <label for="amount" class="control-label">Loan Amount</label>
                                                          <input type="text" id="amount" readonly
                                                              class="form-control">
                                                      </div>
                                                      <div
                                                          class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 form-group slide-ranger ">
                                                          <p id="slider-range-max"></p>
                                                          <label for="amount" class="control-label">Year</label>
                                                          <input type="text" id="j" readonly
                                                              class="form-control">
                                                      </div>
                                                      <!-- Button -->
                                                      <div class="form-group col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12">
                                                          <div class="">
                                                              <button id="Submit" name="Submit"
                                                                  class="btn btn-primary btn-block">Submit New
                                                                  Quote</button>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </fieldset>

                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="section-scroll" id="service_cities">
                              <div class="pinside60">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb30">
                                              <h2>Cities We Serve</h2>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          @foreach ($service->cities as $city)
                                              <strong><a href="#">{{ ucfirst($city->name) }}</a></strong>
                                          @endforeach
                                      </div>
                                  </div>
                              </div>
                          </div>
                          {{-- <div class="widget-share">
                              <ul class="listnone">
                                  <li><a href="#" class="btn-share btn-facebook" title="Share on Facebook"><i
                                              class="fa fa-facebook"></i></a></li>
                                  <li><a href="#" class="btn-share btn-twitter" title="Share on Twitter"><i
                                              class="fa fa-twitter"></i></a></li>
                                  <li>
                                      <a href="#" class="btn-share btn-google" title="Share on Google"> <i
                                              class="fa fa-google"></i></a>
                                  </li>
                                  <li><a href="#" class="btn-share btn-linkedin" title="Share on Linkedin"><i
                                              class="fa fa-linkedin"></i></a></li>
                              </ul>
                          </div> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endsection
  <!-- /.content end -->
