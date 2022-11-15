@extends('admin.layoutAdmin')

@section('add-product')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Add new Home</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('postAddProduct') }}" method="POST" enctype="multipart/form-data">
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
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label>Home Price</label>
                                    <input type="text" class="form-control" placeholder="Name" name="home_price"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label>Home Capacity</label>
                                    <input type="text" class="form-control" placeholder="Name" name="home_capacity"
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
                                    <input type="file" class="form-control" placeholder="Name" name="images[]" accept="image/*" multiple>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Home Description</label>
                                    <textarea type="text" class="form-control" placeholder="Name" name="home_name"
                                        value="">
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Add New Home</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection