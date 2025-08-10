  <div class="top-bar">
      <!-- top-bar -->
      <div class="container">
          <div class="row">
              <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6 col-6 d-none d-xl-block d-lg-block">
                  <p class="mail-text">Welcome to our Borrow Loan Website Templates</p>
              </div>
              <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12 text-right">
                  <div class="top-nav"> <span class="top-text"><a href="#">View Locations</a> </span> <span
                          class="top-text"><a href="#">+1800-123-4567</a></span> <span class="top-text"><a
                              href="{{ route('loan-calculator') }}">EMI calculator</a></span> </div>
              </div>
          </div>
      </div>
  </div>
  <div class="header">
      <div class="container">
          <div class="row">
              <div class="col-xl-2 col-lg-2 col-md-12 col-sm-6 col-6">
                  <!-- logo -->
                  <div class="logo">
                      <a href="/"><img src="{{ asset('images/logo.png') }}"
                              alt="Borrow - Loan Company Website Template"></a>
                  </div>
              </div>
              <!-- logo -->
              <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                  <div id="navigation">
                      <!-- navigation start-->
                      <ul>
                          <li><a href="#" class="animsition-link">Services</a>
                              <ul>
                                  <li><a href="{{ route('services.index') }}" title="Loans"
                                          class="animsition-link">Loans</a>
                                  </li>
                                  <li><a href="#">Credit Cards</a>
                                  </li>
                              </ul>
                          </li>
                          <li><a href="{{ route('blogs.index') }}" class="animsition-link">Blogs</a>
                          </li>
                          <li><a href="{{ route('news.index') }}" class="animsition-link">News</a>
                          </li>
                          <li><a href="{{ route('contact-us') }}" class="animsition-link">Contact Us</a>
                          </li>
                          @auth
                              <li><a href="{{ route('frontend.logout') }}" class="animsition-link">Logout</a>
                              </li>
                          @endauth
                      </ul>
                  </div>
                  <!-- /.navigation start-->
              </div>

          </div>
      </div>
  </div>
