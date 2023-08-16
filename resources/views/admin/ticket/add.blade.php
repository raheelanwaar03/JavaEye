@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add New Ticket</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Ticket') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" placeholder="Ticket Title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" placeholder="Ticket Price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" placeholder="Ticket Description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="level">Image</label>
                                    <input type="file" name="img" class="form-control">
                                </div>
                                <div class="">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
