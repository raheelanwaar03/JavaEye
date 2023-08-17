<div class="footer">
    <div class="no-gutters">
        <div class="col-auto mx-auto">
            <div class="row no-gutters justify-content-center">
                <div class="col-auto">
                    <a href="{{ route('User.Dashboard') }}" class="btn btn-link-default active">
                        <i class="material-icons">home</i>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{ route('User.Deposit.Money') }}" class="btn btn-link-default">
                        <i class="material-icons">local_atm</i>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-link-default">
                        <i class="material-icons">account_balance_wallet</i>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="transactions.html" class="btn btn-link-default">
                        <i class="material-icons">widgets</i>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="profile.html" class="btn btn-link-default">
                        <i class="material-icons">account_circle</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer ends-->
</div>
<!-- Modal -->
<div class="modal fade" id="shareLink" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5>Copy,Share and Earn </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0">
                <div class="form-group mt-4">
                    <input type="text" id="myInput" class="form-control form-control-lg text-center"
                        value="{{ route('register', ['referral' => auth()->user()->email]) }}" readonly>
                </div>
                {{-- <div class="card shadow border-0 mb-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto pr-0">
                            <div class="avatar avatar-60 no-shadow border-0">
                                <img src="{{ asset('asset/img/user2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="font-weight-normal mb-1">Ms. Shivani Dilux</h6>
                            <p class="text-mute small text-secondary">London, UK</p>
                        </div>
                    </div>
                </div>
            </div> --}}
                <p class="text-mute text-center">Share more earn more.</p>
            </div>
            <div class="modal-footer border-0">
                <button onclick="copy()" class="btn btn-default btn-lg btn-rounded shadow btn-block" class="close"
                    data-dismiss="modal">Copy</button>
            </div>
        </div>
    </div>
</div>

<!-- jquery, popper and bootstrap js -->
<script src="{{ asset('asset/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('asset/js/popper.min.js') }}"></script>
<script src="{{ asset('asset/vendor/bootstrap-4.4.1/css/bootstrap.min.css') }}"></script>
<script src="{{ asset('asset/vendor/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/vendor/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('asset/vendor/cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('asset/js/main.js') }}"></script>

<script>
    function copy() {
        // Get the text field
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        // Alert the copied text
        alert("Copied!");
    }
</script>

</body>

</html>
