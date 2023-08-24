@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users Massages</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example4" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Registration Name</th>
                                            <th>Email</th>
                                            <th>Form Name</th>
                                            <th>Massge</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($massages as $massage)
                                            <tr>
                                                <td>{{ $massage->user_name }}</td>
                                                <td>{{ $massage->email }}</td>
                                                <td>{{ $massage->name }}</td>
                                                <td><strong>{{ $massage->massage }}</strong></td>
                                                <td>{{ $massage->created_at }}</td>
                                            </tr>
                                        @empty
                                            <h3>No User massage yet!</h3>
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
