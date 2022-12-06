@include('components.head')
<link rel="stylesheet" href="{{ asset('css/components/signup.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/signin.css') }}">

<body>
    <div class="mfp-content">
        <div class="popup popup_login" id="popup-login">

            <form class="login" method="POST" action="{{ route('postSignup') }}">
                <div class="login__item">
                    <div class="login__title h3">Sign up on Fleet</div>
                    @csrf
                    <div class="subscription">
                        <input class="subscription__input" type="email" name="email" placeholder="Enter your email">
                    </div>

                    <div class="subscription">
                        <input class="subscription__input" type="name" name="name" placeholder="Your Name">
                    </div>

                    <div class="subscription">
                        <input class="subscription__input" type="password" name="password" id="showpassword"
                            placeholder="Enter your password">
                        <button class="subscription__btn">
                            <div type="button" onclick="show()"><i class="fa-solid fa-eye"></i></div>
                        </button>
                    </div>

                    <div class="subscription">
                        <input class="subscription__input" type="password" name="password_confirmation"
                            id="showpassword" placeholder="Rewrite your password">
                        <button class="subscription__btn">
                            <div type="button" onclick="show()"><i class="fa-solid fa-eye"></i></div>
                        </button>
                    </div>

                    <div class="subscription" style="display: flex; justify-content: space-around;">
                        <button class="button" type="submit">Sign up</button>
                        <button class="button btn btn-secondary">Cancel</button>
                    </div>
                    <div class="login__foot">Already have an account? <a class="login__link" href="signin">Login</a>
                    </div>
                    <button title="" type="" class="mfp-close">×</button>
                </div>
            </form>

        </div>
    </div>
</body>
<script>
    function show() {
        var x = document.getElementById("showpassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
