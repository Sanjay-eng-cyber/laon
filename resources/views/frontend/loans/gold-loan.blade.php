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
                              <li><a href="#">Service</a></li>
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
                              <li class="nav-item"><a href="#section-whychooseus" class="page-scroll nav-link">Why Choose
                                      Us</a>
                              </li>
                              <li class="nav-item"><a href="#section-feature" class="page-scroll nav-link">Features &amp;
                                      Benefits</a></li>
                              <li class="nav-item"><a href="#section-eleigiblity"
                                      class="page-scroll nav-link">Eligibility</a></li>
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
                              <h1>About Gold Loan</h1>
                              <p>A gold loan is a loan that is secured by gold. The gold serves as collateral, and the loan
                                  amount is based on the value of the gold. Gold loans are typically used for short-term
                                  financings, such as emergency expenses or unexpected bills.</p>
                              <p>Gold loans are typically used by people who do not have access to other forms of credit,
                                  such as bank loans.</p>
                              <p>Gold loans typically have higher interest rates than other types of loans, but they can be
                                  a good option for people who need money quickly.</p>
                              {{-- <a href="#" class="btn btn-default">Apply for loan</a> --}}
                          </div>
                          <div class="section-scroll" id="section-whychooseus">
                              <div class="bg-light pinside60">
                                  <div class="row">
                                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                          <div class="section-title mb60">
                                              <h2> Why Choose us?</h2>
                                              <p>Achieve all your goals and aspirations; with the right kind of help,
                                                  exactly when you need it.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3> Professional</h3>
                                              <p>Offering gold loans with the highest potential gold value.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-62 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Low Cost</h3>
                                              <p>
                                                  Simple Loan Release options are available.
                                              </p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Fast</h3>
                                              <p>Offering complete gold safety.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Large Community</h3>
                                              <p>Offering the lowest gold loan interest rates.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-blurb mb60">
                                              <h3>Resources & Tools</h3>
                                              <p>Instantly Approved gold loan.</p>
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
                                              <h2>Features of Personal Loan</h2>
                                              <p> All loans are not created equal, personal loan has become a great option
                                                  for people to use.</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              <h3>Fast Loan approval</h3>
                                              <p>Any purchase or item for personal requirements is eligible for a personal
                                                  loan. We provide customers with quick personal loans. However, it can take
                                                  two to three business working days.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-light-bulb-1 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>No security is needed.</h3>
                                              <p>You do not have to put up any security for a personal loan because it is
                                                  unsecured.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-money icon-default icon-2x"></i></div> --}}
                                              <h3>Simple application procedure</h3>
                                              <p>We have designed a simple and secure application process to provide quick
                                                  access to funds.</p>
                                          </div>
                                      </div>
                                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="feature-icon mb30">
                                              {{-- <div class="icon mb20"><i class="icon-settings-6 icon-default icon-2x"></i>
                                              </div> --}}
                                              <h3>Competitive rates</h3>
                                              <p>We provide our clients with the best possible lowest interest rates on the
                                                  market.</p>
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
                                                  <button type="submit" class="btn btn-primary w-100">Send
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
          window.authCheck = {{ auth()->guard('web')->check() ? 'true' : 'false' }};
          window.loginUrl = "{{ route('login', ['serviceSlug' => $service->slug]) }}";
      </script>
      <script src="{{ asset('assets/js/frontend.js') }}"></script>
  @endsection
  <!-- /.content end -->
