       <div class="header-transparent navbar-fixed-top">
           <div class="container">
               <div class="row">
                   <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                       <!-- logo -->
                       <div class="logo">
                           <a href="/"><img src="{{ asset('images/logo-white.png') }}"
                                   alt="Borrow - Loan Company Website Template"></a>
                       </div>
                   </div>
                   <!-- logo -->
                   <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                       <div id="navigation">
                           <!-- navigation start-->
                           <ul>
                               <li><a href="#" class="animsition-link">Services</a>
                                   <ul>
                                       <li><a href="{{ route('services.index') }}" title="Loans"
                                               class="animsition-link">Loans</a></li>
                                       <li><a href="#" class="animsition-link">Credit Cards</a>
                                       </li>
                                   </ul>
                               </li>
                               <li><a href="{{ route('blogs.index') }}" class="animsition-link">Blogs</a>
                               </li>
                               <li><a href="{{ route('news.index') }}" class="animsition-link">News</a>

                               </li>
                               <li><a href="{{ route('contact-us') }}" class="animsition-link">Contact US</a>

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
