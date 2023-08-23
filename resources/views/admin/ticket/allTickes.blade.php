@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Tickets</h4>
                            <a href="{{ route('Admin.Add.Ticket') }}" class="btn btn-sm btn-primary">Add New</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example4" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Item Price</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tickets as $ticket)
                                            <tr>
                                                <td>{{ $ticket->id }}</td>
                                                <td>{{ $ticket->title }}</td>
                                                <td>{{ $ticket->price }}</td>
                                                <td>{{ $ticket->description }}</td>
                                                <td>{{ $ticket->total_price }}</td>
                                                <td>
                                                    <img src="{{ asset('images/' . $ticket->image) }}"
                                                        class="img-responsive img-thumbnail" height="80px" width="80px">
                                                </td>
                                                <td>{{ $ticket->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Delete.Ticket',['id'=>$ticket->id]) }}" class="btn btn-sm btn-primary">Delete</a>
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
