@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users Approved Transcations</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example4" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Amount</th>
                                            <th>TRC 20</th>
                                            <th>Account Title</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($widthrawals as $user)
                                            <tr>
                                                <td>{{ $user->user_name }}</td>
                                                <td>{{ $user->user_email }}</td>
                                                <td><strong>{{ $user->amount }}</strong></td>
                                                <td>{{ $user->trc_id }}</td>
                                                <td>{{ $user->account_title }}</td>
                                                <td><span class="badge light badge-approved">{{ $user->status }}</span></td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.User.Reject.Widthrawal', $user->id) }}"
                                                        class="btn btn-sm btn-primary">Rejected</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <h3>No User Registered yet!</h3>
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
