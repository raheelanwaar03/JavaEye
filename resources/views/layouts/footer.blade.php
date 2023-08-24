<div class="appBottomMenu" style="background-color: black;">
    <a href="{{ route('User.Dashboard') }}" class="item {{ request()->is('User/Dashboard') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-home" aria-hidden="true" style="font-size: 20px;color:rgb(215, 68, 93) !important;"></i>
            <strong style="color: white;">Home</strong>
        </div>
    </a>
    <a href="{{ route('User.Assets') }}" class="item {{ request()->is('User/Assets') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-file-text-o" aria-hidden="true" style="font-size: 20px;color:white;"></i>
            <strong style="color: white;">Assest</strong>
        </div>
    </a>
    <a href="{{ route('User.All.Tickets') }}" class="item {{ request()->is('User/All/Tickets') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-film" aria-hidden="true" style="font-size: 20px;color:white;"></i>
            <strong style="color: white;">Movies</strong>
        </div>
    </a>
    <a href="{{ route('LandingPage.Contact') }}" class="item {{ request()->is('User/Contact') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-comment-o" aria-hidden="true" style="font-size: 20px;color:white;"></i>
            <strong style="color: white;">Service</strong>
        </div>
    </a>
    <a href="{{ route('User.Mine') }}" class="item {{ request()->is('User/Mine') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 20px;color:white;"></i>
            <strong style="color: white;">Mine</strong>
        </div>
    </a>
</div>


<!-- ========= JS Files =========  -->
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
<!-- Ionicons -->
<script type="module" src="{{ asset('assets/js/ionicons.js') }}"></script>
<!-- Splide -->
<script src="{{ asset('assets/js/plugins/splide/splide.min.js') }}"></script>



</body>

</html>
