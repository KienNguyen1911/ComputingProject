@extends('admin.layoutAdmin')

@section('add-home')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                @if (session('error'))
                    <div class="alert alert-dismissible alert-warning">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="alert-heading">Failed!</h4>
                        <p class="mb-0">Please fulfill all information before submit!</p>
                    </div>
                @endif

                <div class="card-header">
                    <h5 class="title">Add new Home</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('postAddHome') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label>Home Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="home_name"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label>Home Status</label>
                                    <input type="text" class="form-control" placeholder="Name" name="home_status"
                                        value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label>Home Price</label>
                                    <input type="number" class="form-control" placeholder="Name" name="home_price"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label>Home Capacity</label>
                                    <input type="number" class="form-control" placeholder="Name" name="home_capacity"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label>Home Rating</label>
                                    <input type="number" class="form-control" placeholder="Name" name="home_rating"
                                        value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label>Home Address</label>
                                    <input type="text" class="form-control" placeholder="Name" name="home_address"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label>Home Image</label>
                                    <input type="file" class="form-control" accept="image/*" placeholder="Name" name="images[]" multiple>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Home Description</label>
                                    <textarea type="text" class="form-control" placeholder="Name" name="home_description" value="">
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Add New Home</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
