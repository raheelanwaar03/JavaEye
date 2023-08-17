<div class="footer">
    <div class="no-gutters">
        <div class="col-auto mx-auto">
            <div class="row no-gutters justify-content-center">
                <div class="col-auto">
                    <a href="{{ route('User.Dashboard') }}" class="btn btn-link-default active">
                        <i class="material-icons">home</i>
                        Home
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{ route('User.Deposit.Money') }}" class="btn btn-link-default">
                        <i class="material-icons">local_atm</i>
                        Deposit
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{ route('User.Widthraw.Balance') }}" class="btn btn-link-default">
                        <i class="material-icons">account_balance_wallet</i>
                        Widthraw
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{ route('User.Widthraw.Transcation') }}" class="btn btn-link-default">
                        <i class="material-icons">widgets</i>
                        Transcations
                    </a>
                </div>
                <div class="col-auto">
                    <a href="profile.html" class="btn btn-link-default">
                        <i class="material-icons">account_circle</i>
                        Me
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- jquery, popper and bootstrap js -->
<script src="{{ asset('asset/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('asset/js/popper.min.js') }}"></script>
<script src="{{ asset('asset/vendor/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/vendor/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('asset/vendor/cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('asset/js/main.js') }}"></script>
<script>
    function copyLink() {
        // Get the text field
        var copyText = document.getElementById("linkValue");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        // Alert the copied text
        alert("Refer Link Copied!");
    }
</script>
<script>
    function copy() {
        // Get the text field
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        // Alert the copied text
        alert("TRC20 Id Copied!");
    }
</script>

</body>

</html>
