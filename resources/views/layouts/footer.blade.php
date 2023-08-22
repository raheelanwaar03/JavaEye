<div class="appBottomMenu" style="background-color: black;">
    <a href="{{ route('User.Dashboard') }}" class="item active">
        <div class="col">
            <i class="fa fa-home" aria-hidden="true"
                style="font-size: 20px;color:rgb(215, 68, 93) !important;"></i>
            <strong style="color: white;">Home</strong>
        </div>
    </a>
    <a href="{{ route('User.Widthraw.Transcation') }}" class="item">
        <div class="col">
            <i class="fa fa-exchange" aria-hidden="true" style="font-size: 20px;color:white;"></i>
            <strong style="color: white;">Transactions</strong>
        </div>
    </a>
    <a href="{{ route('User.All.Tickets') }}" class="item">
        <div class="col">
            <i class="fa fa-film" aria-hidden="true" style="font-size: 20px;color:white;"></i>
            <strong style="color: white;">Tickets</strong>
        </div>
    </a>
    <a href="{{ route('profile.edit') }}" class="item">
        <div class="col">
            <i class="fa fa-cog" aria-hidden="true" style="font-size: 20px;color:white;"></i>
            <strong style="color: white;">Setting</strong>
        </div>
    </a>
</div>



<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
<!-- Ionicons -->
<script type="module" src="{{ asset('assets/js/ionicons.js') }}"></script>
<!-- Splide -->
<script src="{{ asset('assets/js/plugins/splide/splide.min.js') }}"></script>

<script>
    let slideIndex = [1, 1];
    let slideId = ["mySlides1", "mySlides2"]
    showSlides(1, 0);
    showSlides(1, 1);

    function plusSlides(n, no) {
        showSlides(slideIndex[no] += n, no);
    }

    function showSlides(n, no) {
        let i;
        let x = document.getElementsByClassName(slideId[no]);
        if (n > x.length) {
            slideIndex[no] = 1
        }
        if (n < 1) {
            slideIndex[no] = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex[no] - 1].style.display = "block";
    }
</script>

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

