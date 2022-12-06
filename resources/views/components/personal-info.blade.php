<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fleet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="{{asset('css/base.css')}}" rel="stylesheet">  
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/personal-infor.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    @include('components.header')
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="section-menu">
                        <a class="section-menu-link" href="#">
                            <i class="fa-regular fa-user"></i> <span class="ms-3">Personal info</span>
                        </a>
                        <a class="section-menu-link" href="#">
                            <i class="fa-solid fa-lock"></i> <span class="ms-3">Login & Security</span>
                        </a>
                        <a class="section-menu-link" href="#">
                            <i class="fa-regular fa-credit-card"></i> <span class="ms-3">Payments</span>
                        </a>
                        <a class="section-menu-link" href="#">
                            <i class="fa-regular fa-bell"></i> <span class="ms-3">Notification</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="section-form">
                        <div class="section-form-head">
                            <div class="section-form-title">Personal info</div>
                            <a class="section-form-button" href="">View profile</a>
                        </div>
                        <div class="section-form-body">
                            <form action="">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="section-form-field">
                                            <div class="section-form-field__title">
                                                First name
                                            </div>
                                            <div class="section-form-field__input">
                                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="section-form-field">
                                            <div class="section-form-field__title">
                                                Last name
                                            </div>
                                            <div class="section-form-field__input">
                                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="section-form-field">
                                            <div class="section-form-field__title">
                                                Phone
                                            </div>
                                            <div class="section-form-field__input">
                                                <input type="text" class="form-control" placeholder="Phone" aria-label="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="section-form-field">
                                            <div class="section-form-field__title">
                                                Email
                                            </div>
                                            <div class="section-form-field__input">
                                                <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="section-form-field">
                                            <div class="section-form-field__title">
                                                Address
                                            </div>
                                            <div class="section-form-field__input">
                                                <input type="text" class="form-control" placeholder="Address" aria-label="Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="section-form-control">
                            <button class="section-form-control__update" type="submit" >Update profile</button>
                            <button class="section-form-control__clear"><i class="fa-solid fa-xmark"></i><span class="ms-3">Clear all</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
