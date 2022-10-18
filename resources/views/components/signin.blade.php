@include('components.head')

<link rel="stylesheet" href="{{ asset('css/components/signin.css') }}">
<title>Document</title>


<body>
    <div class="mfp-content">
        <div class="popup popup_login" id="popup-login">
            <div class="login__item" style="display: block;">
                <div class="login__title h3">Sign in</div>
                <div class="login__form">
                    <div class="field field_view">
                        <div class="field__wrap">
                            <input class="field__input" type="password" name="password" placeholder="Password" required="">
                            <button class="field__view">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <button class="button login__button"><a class="login__link" href="header">Login</a></button>
                </div>
                <div class="login__foot"><a class="login__password" href="#">Forgot password?</a></div>
            </div>
        </div>
    </div>


</body>