<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="Online work">
    <meta name="keywords" content="Online work at your own home" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">

</head>

<body>
    <x-alert />

    <div class="appHeader text-light">
        <div class="left">
            <h4 style="color:white">Confirm Purchase</h4>
        </div>
        <div class="right">
            <h4>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-transparent" style="border: none">
                        <i class="fa fa-power-off" aria-hidden="true" style="color: white"></i>
                    </button>
                </form>
            </h4>
        </div>
    </div>
    <div id="appCapsule">

        <div class="col-12">

            <div class="row" style="margin-top:2px;">
                <div class="col-4" style="padding-left: 20px;">
                    <img src="{{ asset('images/' . $ticket->image) }}" width="60px" height="60px"
                        style="border-radius: 10px;">
                </div>
                <div class="col-6">
                    <p class="card-text" style="font-size: 11px; color: white !important;font-weight: bold;">
                        {{ $ticket->title }}</p>
                    <p class="card-text" style="margin-top:-20px;font-size: 11px;color:rgb(215, 68, 93) !important;">
                        Date & Time: {{ $ticket->created_at }}</p>
                </div>
            </div>

            <hr>

            <div class="row" style="padding-left: 20px;">
                <div class="col-6" style="text-align: center;">
                    <input class="form-control" value="Single Price : $10" readonly style="font-size: 12px;">
                </div>
                <div class="col-6" style="text-align: center;">
                    <input class="form-control" value="Ticket Quantity: 1" readonly style="font-size: 12px;">
                </div>
            </div>



            <div style="border:1px solid white;padding: 10px;margin-top: 10px;margin-left: 10px;">
                <p class="card-text" style="margin-top:-10px;">
                <form action="{{ route('User.Buy.Ticket', ['id' => $ticket->id]) }}" method="POST">
                    @csrf
                    <a href="#" style="font-size: 11px; color: white !important;">Quantity:<input
                            class="bg-transparent text-white" id="quantityInput" name="qty"
                            oninput="updateFromInput()" style="float: right;width:20px;border: none" value="1"></a>
                    </p>
                    <p class="card-text" style="margin-top:-10px;"><a href="#"
                            style="font-size: 11px; color: white !important;"> Total Price:<span style="float: right;"
                                id="totalPrice">10</span></a></p>
            </div>

            <div class="row" style="padding-left: 2px;margin-top: 10px;">
                <div class="col-6" style="text-align: center;">
                    <p style="color: white;font-size: 10px;">Purchase quantity</p>
                </div>
                <div class="col-1">
                    <a class="bg-transparent text-white" style="border: 1px solid white;padding:5px;"
                        onclick="decreaseQuantity()">-</a>
                </div>
                <div class="col-1">
                    <a class="bg-transparent text-white" style="border: 1px solid white;padding:5px;"
                        onclick="increaseQuantity()">+</a>
                </div>
            </div>


            <center>
                <div style="padding: 10px;">
                    <button type="submit" class="btn btn-danger">Confirm Purchase</button>
                </div>
            </center>
            </form>

        </div>
    </div>
    <!-- * App Capsule -->

    <div class="appBottomMenu" style="background-color: black;">
        <a href="{{ route('User.Dashboard') }}" class="item active">
            <div class="col">
                <i class="fa fa-home" aria-hidden="true"
                    style="font-size: 20px;color:rgb(215, 68, 93) !important;"></i>
                <strong style="color: white;">Home</strong>
            </div>
        </a>
        <a href="{{ route('User.Assets') }}" class="item">
            <div class="col">
                <i class="fa fa-file-text-o" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Assest</strong>
            </div>
        </a>
        <a href="{{ route('User.All.Tickets') }}" class="item">
            <div class="col">
                <i class="fa fa-film" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Tickets</strong>
            </div>
        </a>
        <a href="{{ route('User.Contact') }}" class="item">
            <div class="col">
                <i class="fa fa-comment-o" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Service</strong>
            </div>
        </a>
        <a href="{{ route('User.Mine') }}" class="item">
            <div class="col">
                <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 20px;color:white;"></i>
                <strong style="color: white;">Mine</strong>
            </div>
        </a>
    </div>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="{{ asset('assets/js/plugins/splide/splide.min.js') }}"></script>


    <script>
        // Initial quantity and price values
        let quantity = 1;
        let unitPrice = 10.00;

        // Function to update the quantity and total price from input
        function updateFromInput() {
            const quantityInput = document.getElementById('quantityInput');
            quantity = parseInt(quantityInput.value);
            updateQuantityAndPrice();
        }

        // Function to update the quantity and total price
        function updateQuantityAndPrice() {
            const quantityElement = document.getElementById('quantityInput');
            const totalPriceElement = document.getElementById('totalPrice');

            // Update quantity and total price
            quantityElement.value = quantity;
            totalPriceElement.textContent = (quantity * unitPrice).toFixed(2);
        }

        // Function to increase quantity
        function increaseQuantity() {
            quantity++;
            updateQuantityAndPrice();
        }

        // Function to decrease quantity
        function decreaseQuantity() {
            if (quantity > 1) {
                quantity--;
                updateQuantityAndPrice();
            }
        }
    </script>



</body>

</html>
