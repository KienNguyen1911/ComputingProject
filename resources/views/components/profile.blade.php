<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Profile</title>
</head>

<body>
    <div class="container">
        <div class="cover-head">
            <img src="{{ asset('img/bg-profile.jpg') }}" class="cover-image" alt="">
            <div class="cover-btn btn btn-light rounded-pill">
                <i class="fa-regular fa-pen-to-square"></i>
                <span>Edit profile</span>
            </div>
            <div class="cover-body">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="section-menu">
                            <div class="section-menu-image">
                                <img src="{{ asset('img/avatar-1.jpg') }}" alt="avatar">
                            </div>
                            <div class="section-menu-name">
                                <h5>Lam Khanh</h5>
                            </div>
                            <div class="section-menu-item">
                                <li>Lives in:</li>
                                <li>Date of birth: </li>
                                <li>Phone number: </li>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="section-title">
                            <h3>Hi, I'm Lam Khanh</h3>
                            <a class="section-form-button" href="">Edit profile</a>
                        </div>
                        <div class="section-main">
                            <div class="section-main__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, placeat assumenda. Ab ut aliquid quasi. Dolorum, provident placeat. Architecto in sint officia ipsam, eum porro vel fuga commodi pariatur non.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
