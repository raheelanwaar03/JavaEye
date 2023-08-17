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
                                            <th>Account Title</th>
                                            <th>Amount</th>
                                            <th>Admin TrcId</th>
                                            <th>Screen Shot</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tickets as $ticket)
                                            <tr>
                                                <td>{{ $ticket->user_name }}</td>
                                                <td>{{ $ticket->user_email }}</td>
                                                <td>{{ $ticket->account_title }}</td>
                                                <td>{{ $ticket->amont }}</td>
                                                <td>{{ $ticket->trcId }}</td>
                                                <td>
                                                    <img src="{{ asset('images/' . $ticket->screen_shot) }}"
                                                        class="img-responsive img-thumbnail" height="80px" width="80px">
                                                </td>
                                                <td>{{ $ticket->created_at }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-success">Approved</a>
                                                    <a href="#" class="btn btn-primary">Rejected</a>
                                                </td>
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
