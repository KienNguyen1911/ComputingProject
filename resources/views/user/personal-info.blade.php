<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fleet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/personal-infor.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
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
                            <div class="section-form-title">Personal info
                                <br>
                                <span style="font-size: 20px; color: #777E90; font-weight: 500">Please, fulfill your
                                    information excactly. This will help us to contact with you</span>
                            </div>
                            <a class="section-form-button" href="">View profile</a>
                        </div>
                        <div class="section-form-body">
                            <form action="{{ route('postProfileUser') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="section-form-field">
                                            <div class="section-form-field__title">
                                                Your Name
                                            </div>
                                            <div class="section-form-field__input">
                                                <input type="text" class="form-control" style="border: 1px solid"
                                                    placeholder="Last name" aria-label="Last name"
                                                    value="{{ $user->name }}" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="section-form-field">
                                            <div class="section-form-field__title">
                                                Phonenumber
                                            </div>
                                            <div class="section-form-field__input">
                                                <input type="text" class="form-control" style="border: 1px solid"
                                                    placeholder="Phone" aria-label="Phone"
                                                    value="{{ $user->user_phonenumber }}" name="user_phonenumber">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="section-form-field">
                                            <div class="section-form-field__title">
                                                Email
                                            </div>
                                            <div class="section-form-field__input">
                                                <input type="text" class="form-control" style="border: 1px solid"
                                                    placeholder="Email" aria-label="Email" value="{{ $user->email }}"
                                                    name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="section-form-field">
                                            <div class="section-form-field__title">
                                                Address
                                            </div>
                                            <div class="section-form-field__input">
                                                <input type="text" class="form-control" style="border: 1px solid"
                                                    placeholder="Address" aria-label="Address"
                                                    value="{{ $user->user_address }}" name="user_address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-form-control">
                                    <button class="section-form-control__update" type="submit">Update profile</button>
                                    <button class="section-form-control__clear"><i class="fa-solid fa-xmark"></i><span
                                            class="ms-3">Clear all</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
