    <div class="footer section-space100">
        <!-- footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-logo">
                        <!-- Footer Logo -->
                        <img src="{{ asset('images/ft-logo.png') }}" alt="Borrow - Loan Company Website Templates">
                    </div>
                    <!-- /.Footer Logo -->
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                            <h3 class="newsletter-title">Signup Our Newsletter</h3>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                            <div class="newsletter-form">
                                <!-- Newsletter Form -->
                                <form action="https://jituchauhan.com/borrow/bootstrap-4/newsletter.php" method="post">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="newsletter" name="newsletter"
                                            placeholder="Write E-Mail Address" required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit">Go!</button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form>
                            </div>
                            <!-- /.Newsletter Form -->
                        </div>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
            </div>
            <hr class="dark-line">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="widget-text mt40">
                        <!-- widget text -->
                        <p>Our goal at Borrow Loan Company is to provide access to personal loans and education loan,
                            car loan, home loan at insight competitive interest rates lorem ipsums. We are the loan
                            provider, you can use our loan product.</p>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="address-text"><span><i class="icon-placeholder-3 icon-1x"></i> </span>3895
                                    Sycamore Road Arlington, 97812 </p>
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
    <!-- Back to top script -->
    <script src="{{ asset('js/back-to-top.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/notification/snackbar/snackbar.min.js') }}"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="{{ asset('js/echo.js') }}"></script>
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
    <script type="text/javascript">
        //jQuery to collapse the navbar on scroll
        $(window).scroll(function() {
            if ($(".header-transparent").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });

        function openChatModal() {
            @if (auth()->check())
                document.getElementById("chatModal").style.display = "block";
            @else
                window.location.href = "{{ route('login', ['serviceSlug' => $service->slug]) }}";
                return;
            @endif
        }

        function closeChatModal() {
            document.getElementById("chatModal").style.display = "none";
        }

        // Optional: close modal when clicking outside of it
        window.onclick = function(event) {
            let modal = document.getElementById("chatModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        document.querySelector('#chatBtn').addEventListener('click', function(e) {
            e.preventDefault();

            let message = document.getElementById('message').value;
            let messageError = document.getElementById('mesaageError');
            const csrfToken = '{{ csrf_token() }}';

            fetch('/chat/store', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        message
                    })
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        let msgBox = document.getElementById('messageDiv');
                        let newMsg = document.getElementById('userMessagePara');
                        newMsg.innerText = document.getElementById('message').value;
                        msgBox.appendChild(newMsg);
                        document.getElementById('message').value = '';
                        msgBox.scrollTop = msgBox.scrollHeight; // auto-scroll to bottom
                    } else {
                        messageError.innerText = res.errors.message[0];
                    }
                })
                .catch(error => {
                    console.error('Fetch Error:', error);
                });

            @php
                $userId = auth()->guard('web')->check() ? auth()->guard('web')->user()->id : session('chat_user_id');
            @endphp
            const userId = "{{ $userId }}";
            Echo.private(`chat.${userId}`)
                .listen('AdminUserChatEvent', (e) => {
                    const messageDiv = document.getElementById('messageDiv');
                    messageDiv.innerHTML += `
                <p class="admin-message">Admin: ${e.message}</p>
            `;
                    messageDiv.scrollTop = messageDiv.scrollHeight;
                });
        });
    </script>
