@extends('admin.layoutAdmin')
@section('user')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name"
                                        value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address </label>
                                    <input type="email" class="form-control"  placeholder="Email" name="email"
                                        value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" placeholder="Phone number"
                                        name="phonenumber" value="{{ Auth::user()->phonenumber }}">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" placeholder="Your Password" name="password"
                                        value="{{ Auth::user()->password }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address"
                                        value="{{ Auth::user()->address }}" name="address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Role</label>
                                    <input type="text" class="form-control"  placeholder="Home Address"
                                        value="{{ Auth::user()->role }}" name="role">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Avatar (disabled)</label>
                                    <input type="text" class="" placeholder="Your Avatar" name="avatar_original" value="{{Auth::user()->avatar_original}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Me</label>
                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">Update Your Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="../img/bg5.jpg" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="{{ Auth::user()->avatar_original }}" alt="...">
                            <h5 class="title">{{ Auth::user()->name }}</h5>
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
