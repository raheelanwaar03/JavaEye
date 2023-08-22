@extends('layouts.app')
@section('content')
    <div class="section" style="margin-top: -50px;border-bottom: 1px solid black;">
        <div class="section-heading padding">
            <h2 class="title" style="color: white;">Hot Selling!</h2>
        </div>

        <div id="card-container" class="card-container">

            <div class="col-4"
                style="margin-left: 7px; width:100px;height: 100px;background-image: url('{{ asset('assets/img.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img1.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>


            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img2.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets//img3.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img4.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img5.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img6.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img7.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img8.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img9.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img11.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>

            <div class="col-4"
                style="margin-left: 7px;width:100px;height: 100px;background-image: url('{{ asset('assets/img12.jpg') }}');border-radius: 10px !important;">
                <a href="{{ route('User.Dashboard') }}">
                </a>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cardContainer = document.getElementById("card-container");
            let isDragging = false;
            let startPosition = 0;
            let currentScrollPosition = 0;

            cardContainer.addEventListener("mousedown", (event) => {
                isDragging = true;
                startPosition = event.clientX;
                currentScrollPosition = cardContainer.scrollLeft;
                cardContainer.style.cursor = "grabbing";
            });

            cardContainer.addEventListener("mouseup", () => {
                isDragging = false;
                cardContainer.style.cursor = "grab";
            });

            cardContainer.addEventListener("mousemove", (event) => {
                if (!isDragging) return;
                const deltaX = event.clientX - startPosition;
                cardContainer.scrollLeft = currentScrollPosition - deltaX;
            });
        });
    </script>

    <div class="section full mb-5">
        <div class="col-12">
            <h3 class="text-center text-white">All Tickets (Price: 10$)</h3>
            <div class="row text-center mt-4">
                @forelse ($tickets as $ticket)
                    <div class="col-6 col-md-3">
                        <div class="card bg-transparent shadow border-0 mb-3 bordered">
                            <div class="card-body">
                                <div class="no-shadow border-0">
                                    <img src="{{ asset('images/' . $ticket->image) }}" alt="image" height="200px"
                                        width="200px" class="img-fluid rounded">
                                </div>
                                <h3 class="mt-3 mb-0 font-weight-normal text-white">{{ $ticket->title }}</h3>
                                <p class="text-secondary text-mute small text-white">{{ $ticket->description }}</p>
                                <form action="{{ route('User.Buy.Ticket', ['id' => $ticket->id]) }}" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex jusitfy-content-center align-items-center">
                                            <input type="number" style="width:50px;border:1px solid white"
                                                class="bg-transparent text-white" name="qty" min="1"
                                                value="1">
                                        </div>
                                        <div class="">
                                            <button type="submit" class="btn btn-sm btn-danger">Buy</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>No Ticket Available</h3>
                @endforelse
                {{ $tickets->withQueryString()->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
