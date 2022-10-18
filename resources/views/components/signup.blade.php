@include('components.head')
<link rel="stylesheet" href="{{asset('css/components/signup.css')}}">


<body>
    <div class="mfp-content">
        <div class="popup popup_login" id="popup-login">
            <div class="login">
                <div class="login__item">
                    <div class="login__title h3">Sign up on Fleet</div>
                    <div class="login__info">Use Your OpenID to Sign up</div>
                    <div class="login__btns">
                        <button type="button" class="btn btn-link">
                            <i class="fa-brands fa-google"></i>
                            <span>Google</span>
                        </button>

                        <button type="button" class="btn btn-link" style="background-color: black;height: 40px;">
                            <i class="fa-brands fa-apple"></i>
                            <span>Apple</span>
                        </button>
                    </div>
                    <div class="login__note">Or continue with email</div>
                    <div class="subscription">
                        <input class="subscription__input" type="email" name="email" placeholder="Enter your email" required="">
                        <button class="subscription__btn">
                            <a href="signin"><i class="fa-solid fa-arrow-right"></i></a>
                        </button>
                    </div>
                    <div class="login__foot">Already have an account? <a class="login__link" href="signin">Login</a></div>
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                </div>
            </div>
        </div>
    </div>

</body>
