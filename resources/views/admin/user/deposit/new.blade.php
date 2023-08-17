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
                                        @forelse ($deposits as $deposit)
                                            <tr>
                                                <td>{{ $deposit->user_name }}</td>
                                                <td>{{ $deposit->user_email }}</td>
                                                <td>{{ $deposit->account_title }}</td>
                                                <td>{{ $deposit->amount }}</td>
                                                <td>{{ $deposit->trcId }}</td>
                                                <td>
                                                    <img src="{{ asset('images/' . $deposit->screen_shot) }}"
                                                        class="img-responsive img-thumbnail" height="80px" width="80px">
                                                </td>
                                                <td>{{ $deposit->created_at }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-success">Approved</a>
                                                    <a href="#" class="btn btn-sm btn-primary">Rejected</a>
                                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <h3>No deposit added yet!</h3>
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
