@extends('admin.layoutAdmin')

@section('edit-type')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Edit Profile</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label>Type Name</label>
                                <input type="text" class="form-control" placeholder="Type Name" value="{{$type->type_name}}" name="type_name" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Type Description</label>
                                <textarea type="text" name="type_description" class="form-control" style="border-radius: 20px" placeholder="Type Description"" cols="30" rows="10">
                                    {{$type->type_description}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-user">
            <div class="image">
                <img src="../img/bg5.jpg" alt="...">
            </div>
            <div class="card-body">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="{{Auth::user()->avatar_original}}" alt="...">
                        <h5 class="title">{{Auth::user()->name}}</h5>
                    </a>
                    <p class="description">
                        michael24
                    </p>
                </div>
                <p class="description text-center">
                    "Lamborghini Mercy <br>
                    Your chick she so thirsty <br>
                    I'm in that two seat Lambo"
                </p>
            </div>
            <hr>
            <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-google-plus-g"></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection