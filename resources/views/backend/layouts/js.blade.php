<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="backend/bootstrap/js/popper.min.js"></script>
<script src="backend/bootstrap/js/bootstrap.min.js"></script>
<script src="backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>
<!-- Select2 JS -->
<script src="{{ asset('backend/plugins/select2/select2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
{{-- <script src="backend/plugins/apex/apexcharts.min.js"></script> --}}
<script src="assets/js/dashboard/dash_1.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

{{-- <script src="{{asset('assets/js/components/notification/custom-snackbar.js')}}"></script> --}}
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

<script src="{{ asset('assets/node_modules/tinymce/tinymce.min.js') }}"></script>
<script>
    document.querySelector('#chatBtn').addEventListener('click', function(e) {
        e.preventDefault();
        let message = document.getElementById('input_message').value;
        let user_id = document.getElementById('user_id').value;
        // console.log(inputMessage);
        const csrfToken = '{{ csrf_token() }}';

        fetch('/chat/store', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    message,
                    user_id
                })
            })
            .then(res => res.json())
            .then(res => {
                if (res.success) {
                    const msgBox = document.querySelector('.chat-messages');

                    // Create message div
                    const newMsg = document.createElement('div');
                    newMsg.classList.add('message');
                    newMsg.classList.add(res.mess.sender_type === 'user' ? 'user-message' :
                        'admin-message');
                    newMsg.innerText = res.mess;

                    msgBox.appendChild(newMsg);

                    // Clear input
                    document.getElementById('input_message').value = '';
                }
            })
        // .catch(error => {
        //     console.error('Fetch Error:', error);
        // });
    });
</script>
