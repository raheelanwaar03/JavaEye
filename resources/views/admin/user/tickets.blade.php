@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example4" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Price</th>
                                            <th>Title</th>
                                            <th>Quantity</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tickets as $ticket)
                                            <tr>
                                                <td>{{ $ticket->user_name }}</td>
                                                <td>{{ $ticket->user_email }}</td>
                                                <td>{{ $ticket->ticket_price }}</td>
                                                <td>{{ $ticket->ticket_title }}</td>
                                                <td>{{ $ticket->qty }}</td>
                                                <td>
                                                    <img src="{{ asset('images/' . $ticket->ticket_img) }}"
                                                        class="img-responsive img-thumbnail" height="80px" width="80px">
                                                </td>
                                                <td>{{ $ticket->created_at }}</td>
                                            </tr>
                                        @empty
                                            <h3>No Ticket added yet!</h3>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
