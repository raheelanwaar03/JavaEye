@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Rejected Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example4" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Referral</th>
                                            <th>Balance</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->referral }}</td>
                                                <td><strong>{{ $user->balance }}</strong></td>
                                                <td><span class="badge light badge-success">Approved</span></td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Reject.User', ['id' => $user->id]) }}"
                                                        class="btn btn-sm btn-success">Approved</a>
                                                    <a href="{{ route('Admin.Give.Reward', ['id' => $user->id]) }}"
                                                        class="btn btn-sm btn-warning">Reward</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <h3>No Rejected User yet!</h3>
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
