@extends('layouts.app')
@section('content')
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
        <div class="col-12 my-4">
            <div class="row" style="padding:10px;" id="homeProducts">
                @forelse ($tickets as $ticket)
                    <div class="col-6" style="margin-top:10px;margin-bottom:20px">
                        <a href="{{ route('User.Dashboard') }}">
                            <div class="blog-card"
                                style="width:150px;height: 150px; border-radius: 10px !important;padding: 5px; background-image: url('{{asset('images/'.$ticket->image)}}');">
                                <p class="card-text" style="font-size: 11px;margin-top: 160px;"><span
                                        style="padding: 8px 10px;color: white;border-radius: 10px;">{{ $ticket->title }}</span><span
                                        style="float: right;padding: 2px 12px;color: white;border-radius: 10px;background-color: red;">Buy</span>
                                </p>
                            </div>
                        </a>
                    </div>
                @empty
                    <h5 class="text-center text-white">NO Ticket</h5>
                @endforelse
            </div>
        </div>
    </div>
@endsection
