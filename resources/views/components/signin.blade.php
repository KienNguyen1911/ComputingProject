@include('components.head')

<link rel="stylesheet" href="{{ asset('css/components/signin.css') }}">
<title>Document</title>


<body>
    <div class="mfp-content">
        <div class="popup popup_login" id="popup-login">
            <div class="login__item" style="display: block;">
                <div class="login__title h3">Sign in</div>
                <form action="{{ route('postLogin') }}" method="POST">
                    @csrf
                    <div class="login__form">
                        <div class="field field_view">
                            <div class="field__wrap mb-1">
                                <input class="field__input" type="email" name="email" placeholder="Email"
                                    id="user_email" required="">
                            </div>
                            <div class="field__wrap">
                                <input class="field__input" type="password" name="password" placeholder="Password"
                                    id="user_password" required="">
                                <button class="field__view">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        <button class="button login__button"><a style="color:aliceblue" href="header"
                                type="submit">Login</a></button>
                        <div class="login__foot"><a class="login__password" href="#">Forgot password?</a></div>
                    </div>
                    <div class="login__note">Or continue with email</div>
                    <div class="login__btns">
                        <a href="{{ route('google.login') }}" type="button" class="btn"
                            style="border: 1px solid black; margin-right: 20px">
                            <i class="fa-brands fa-google"></i>
                            <span>Google</span>
                        </a>
                        <button type="button" class="btn" style="background-color:#046fe5; color:aliceblue">
                            <i class="fa-brands fa-facebook"></i>
                            <span>Facebook</span>
                        </button>
                    </div>
                </form>
                <div class="login__foot">Don't have account?<a class="login__link" href="signup">Sign up</a></div>
            </div>
        </div>
    </div>
</body>
