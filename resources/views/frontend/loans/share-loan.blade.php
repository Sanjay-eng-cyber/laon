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
                              <li class="nav-item"><a href="#section-whyus" class="page-scroll nav-link">Why Choose Us</a>
                              </li>
                              <li class="nav-item"><a href="#section-getloan" class="page-scroll nav-link">Get a Share
                                      Loan</a></li>
                              <li class="nav-item"><a href="#section-quickloanaccess" class="page-scroll nav-link">Quick
                                      Loan
                                      Access</a></li>
                              <li class="nav-item"><a href="#section-highlights" class="page-scroll nav-link">Key Highlights
                                  </a></li>
                              <li class="nav-item"><a href="#section-features" class="page-scroll nav-link">Features
                                  </a></li>
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
                              <h1>About Share Loan</h1>
                              <p>Individual customers who have an existing Demat Account or carring Physical certificates
                                  can easily apply for a Loan Against Securities through the loan company. To avail of the
                                  loan, simply share your initial information and rest , we will update you with the best
                                  deal from Landers.
                              </p>
                              {{-- <a href="#" class="btn btn-default">Apply for loan</a> --}}
                          </div>
                          <div class="section-scroll" id="section-whyus">
                              <div class="bg-light pinside60">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb30">
                                              <h2>Why Choose The loan company?</h2>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                      <p>There is no credit check required.</p>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                      <p>Flexibility in repayment is available.</p>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                      <p>No collateral required.</p>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                      <p>Loan Process with minimal documentation.</p>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                      <p>Providing reasonable & competitive interest rates.</p>
                                  </div>
                                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                      <p>providing top-notch client support</p>
                                  </div>
                              </div>
                          </div>
                          <div class="section-scroll" id="section-getloan">
                              <div class="bg-white pinside60">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb60">
                                              <h2>How To Get a Share Loan?</h2>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Connect</h3>
                                              <p>Get in touch with our team & share information about your holdings so that
                                                  we can determine the best loan offer for you.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-62 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Choose</h3>
                                              <p>
                                                  To obtain the best loan amount, use your stock holdings and securities.
                                                  Then, compare offers and loan amounts before choosing the best one
                                                  depending on your needs.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Apply</h3>
                                              <p>
                                                  Fill up the form, and then, at your convenience, submit it online and
                                                  offline with your supporting documentation to apply for a loan against
                                                  your shareholding.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Loan Approval</h3>
                                              <p>
                                                  Whether it’s a short-term or a long-term loan, our team will help you
                                                  after
                                                  completing the documentation to get your loan approved in 2 to 3 days.
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="section-scroll" id="section-quickloanaccess">
                              <div class="bg-light pinside60">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb60">
                                              <h2>Get financing for whatever you need now</h2>
                                              <p>Achieve all your goals and aspirations; with the right kind of help,
                                                  exactly when you need it.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Loans Against Shares</h3>
                                              <p>Loan against mutual funds is unique offering to leverage your cash flow
                                                  while keep invested in shares. You may not be aware that there are many
                                                  companies who offer you loans against your shares. This loan will help you
                                                  to regain some cash flow while investing in stocks and getting their
                                                  long-term benefits.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-62 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Loan Against Mutual Funds Units</h3>
                                              <p>
                                                  Loan against mutual funds is unique offering to leverage your cash flow
                                                  while keep invested in Mutual funds. As an investor it is important to
                                                  understand that sometimes even after careful planning, funds may not be
                                                  readily available for unforeseen requirements. These may include medical
                                                  expenses or any other emergency needs.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Loan Against Sovereign Gold Bonds</h3>
                                              <p>
                                                  Do you want to get a loan against your Sovereign Gold Bond(s)? The process
                                                  of getting a loan against your Gold Bonds is very easy, as long as you
                                                  have some collateral. Cash loans are available on all types of collateral,
                                                  including Sovereign Gold Bonds.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Loan Against Time Deposit</h3>
                                              <p>
                                                  Loan Against Time Deposit refers to a lending agreement that is sanctioned
                                                  by the lender in which a borrower can take out a short-term loan in order
                                                  to cover an emergency expense.
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
                          <div class="section-scroll" id="section-highlights">
                              <div class="pinside60 bg-white">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb60">
                                              <h2>Key Highlights</h2>
                                              <p> All loans are not created equal, personal loan has become a great option
                                                  for people to use.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              <h3>Maximum Loan amount</h3>
                                              <p>
                                                  Our platform is designed in a manner that shows the best offers available
                                                  for you from lenders and displays the highest loan amount available on a
                                                  particular portfolio of securities.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-light-bulb-1 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Low-Cost overdraft facility</h3>
                                              <p>Interest is charged on the loan outstanding/limit utilized.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-money icon-default icon-2x"></i></div> --}}
                                              <h3>Lowest interest rates comparison</h3>
                                              <p>We find the best competitive interest rates for you on the Loan against
                                                  Shares from different lenders.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-settings-6 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Shares (LAS) quickly with the loan company</h3>
                                              <p>
                                                  We save your valuable time so you don’t need to visit different banks and
                                                  NBFC’s.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-settings-6 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Minimum Documentation</h3>
                                              <p>
                                              <ol>
                                                  <li>Identity proof</li>
                                                  <li>Address proof</li>
                                                  <li>Signature proof</li>
                                                  <li>
                                                      If you represent Companies/ Proprietorships/ Partnership firms you
                                                      will need to submit your IT returns, Balance Sheet, and Profit & Loss
                                                      Account for the previous two years.
                                                  </li>
                                              </ol>
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-settings-6 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Transparent & Easy Online Application</h3>
                                              <p>
                                                  The transparent application process with just 3 easy steps – ‘Get
                                                  quotation, compare lenders, and apply’. With an easy online comparison &
                                                  application, you can apply for a Loan against.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-settings-6 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Intact Ownership of Shares</h3>
                                              <p>
                                                  You can enjoy your rights of receiving benefits such as dividends and
                                                  bonuses along with any gains from the price increase in the shares on
                                                  which you have availed the loan from the respective Lender.
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="section-scroll" id="section-features">
                              <div class="pinside60 bg-light">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb60">
                                              <h2>Features</h2>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              <h3>Digital loan against Shares/ Mutual Funds</h3>
                                              <p>Pledge your Shares/ Mutual Funds digitally and get an instant loan in 24
                                                  hours. It’s completely automated and paperless.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-light-bulb-1 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>High Loan to Value</h3>
                                              <p>Get a loan worth up to 80% of the value of the securities pledged, with the
                                                  minimum loan amount of Rs. 50 thousand.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-money icon-default icon-2x"></i></div> --}}
                                              <h3>Easy Repayment</h3>
                                              <p>Pay in EMI to lumsum to repay your loan. The interest is only calculated
                                                  only on the amount of the loan actually used by you</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-settings-6 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Transparent Processing</h3>
                                              <p>All our charges are communicated up front, at the time of the processing of
                                                  the loan. The loan company Loan Against Securities comes without any
                                                  prepayment and foreclosure charges.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-settings-6 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Quick and Efficient Servicing</h3>
                                              <p>With our doorstep service and efficient servicing processes, your loan will
                                                  be processed quickly. Our Loan Against Securities has a dedicated help
                                                  desk, to help you with the entire process.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-settings-6 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Pledging Options</h3>
                                              <p>You are free to pledge shares from any Depository (NSDL or CDSL) and any
                                                  Depository Participant across the country.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-settings-6 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Options for NRI Applicants</h3>
                                              <p>NRIs can choose from options of shares, mutual funds (equity, debt of
                                                  FMPs), insurance policies, NSC or KVP.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-settings-6 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Current Account Benefits</h3>
                                              <p>You can also opt for an Current account against your Loan Against
                                                  Securities, we will create a current account with an overdraft limit for
                                                  you. This will allow you to enjoy all the facilities and benefits that
                                                  come with a current account. </p>
                                          </div>
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
                                                              your refinancing options today.</p>
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
                                                              step.
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
                                          <form action="{{ route('inquiry.store') }}" method="POST" class="row g-3">
                                              @csrf
                                              <div class="col-md-6">
                                                  <select name="service_id" class="form-control select2" id="service_id"
                                                      required>
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
                                                  <select name="city_id" class="form-control select2" id="city_id"
                                                      required>
                                                      <option value="" selected disabled>Select City</option>
                                                      @foreach ($service->cities as $c)
                                                          <option value="{{ $c->id }}"
                                                              @if ($city) {{ old('city_id', $city->id ?? '') == $c->id ? 'selected' : '' }} @endif>
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
                                                  <input type="email" name="email" class="form-control mt-1"
                                                      placeholder="Email" minlength="5" maxlength="60"
                                                      value="{{ old('email') }}" required>
                                                  @if ($errors->has('email'))
                                                      <div class="text-danger" role="alert">
                                                          {{ $errors->first('email') }}
                                                      </div>
                                                  @endif
                                              </div>

                                              <div class="col-md-6">
                                                  <input type="text" name="phone" class="form-control"
                                                      placeholder="Phone" minlength="10" maxlength="10"
                                                      value="{{ old('phone') }}" required>
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
                                                  <button type="submit" class="btn btn-danger w-100">Send
                                                      Request</button>
                                              </div>
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
                                          @foreach ($service->cities as $c)
                                              @continue($city && $c->slug === $city->slug)
                                              <strong>
                                                  <a
                                                      href="{{ route('services.show', ['service_slug' => $service->slug, 'city_slug' => $c->slug]) }}">{{ ucfirst($c->name) }}
                                                  </a>
                                              </strong>
                                          @endforeach
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <a href="https://api.whatsapp.com/send/?phone=916260060190&text={{ urlencode('Hey I am interested for ' . $service->name . ($city ? ' in ' . $city->name : '')) }}"
                  class="whatsapp-button" target="_blank">
                  <i class="fab fa-whatsapp"></i>
              </a>
              <!-- Chat Button -->
              <a href="javascript:void(0)" class="custom-chat-button" onclick="openChatModal()" title="Live Chat">
                  💬
              </a>

              <!-- Chat Modal -->
              <div id="chatModal" class="chat-modal">
                  <div class="chat-modal-content">
                      <span class="close" onclick="closeChatModal()">&times;</span>
                      <h2>Chat With Admin</h2>
                      <form id="chatForm">
                          <div id="messageDiv" style="display: block;">
                              @forelse ($messages as $msg)
                                  @if ($msg->sender_type == 'user')
                                      <p id="userMessagePara">
                                          {{ $msg->message }} : You
                                      </p>
                                  @else
                                      <p id="adminMessagePara">
                                          Admin : {{ $msg->message }}
                                      </p>
                                  @endif
                              @empty
                                  <div>No Messages</div>
                              @endforelse
                          </div>
                          <textarea id="message" name="message" rows="4" placeholder="Type your message..." required></textarea>
                          <button type="submit" id="chatBtn">Send</button>
                      </form>
                      <div class="text-danger" id="messageError">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  @endsection
  @section('js')
      <script>
          function openChatModal() {
              @if (auth()->check())
                  document.getElementById("chatModal").style.display = "block";
              @else
                  window.location.href = "{{ route('login', ['serviceSlug' => $service->slug]) }}";
                  return;
              @endif
          }
      </script>
  @endsection
  <!-- /.content end -->
