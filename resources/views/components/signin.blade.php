<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
    <style>
        mfp-auto-cursor .mfp-content {
    cursor: auto;
}
.mfp-inline-holder .mfp-content, .mfp-ajax-holder .mfp-content {
    width: 100%;
    
}
.mfp-content {
    position: relative;
    display: flex;
    vertical-align: middle;
    margin: 100 auto;
    text-align: left;
    z-index: 1045;
    border-radius: 20px;
    justify-content: center;
}
.mfp-zoom-in.mfp-ready .popup {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}
.mfp-zoom-in .popup {
    opacity: 0;
    transition: all 0.2s ease-in-out;
    -webkit-transform: scale(0.8);
    transform: scale(0.8);

}
@media only screen and (max-width: 767px){

.popup_login {
    padding: 32px 24px;
}
}

.popup_login {
    max-width: 544px;
    padding: 72px 96px;
    float:center;

}
.popup {
    width: 100%;
    margin: auto;
    background: #FCFCFD;
    border-radius: 16px;
    box-shadow: 0px 64px 64px -48px rgb(15 15 15 / 8%);
    z-index: 2;
    float:center;
}

.login__item:first-child {
    display: block;
}
.login__item {
    display: none;
}
.login__title {
    text-align: center;
}
.h3 {
    font-size: 40px;
    line-height: 1.2;
    letter-spacing: -.01em;
}
.hero, .h1, .h2, .h3, .h4 {
    font-family: 'DM Sans', sans-serif;
    font-weight: 700;
}
.login__form{
    margin-top:32px;
}
.field__wrap{
    position: relative;
}
.login__form .field__input{
border-radius: 24px;
}
.field_view .field__input{
    padding-right: 48px;
}
.field__input{
    height: 48px;
    padding: 0 14px;
}
.field__input, .field__textarea {
    width: 100%;
    border-radius: 12px;
    border: 2px solid #E6E8EC;
    box-shadow: none;
    background: none;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    line-height: 1.71429;
    font-weight: 500;
    color: #23262F;
    transition: border-color .2s;
}
input, button {
    margin: 0;
    padding: 0;
    border: 0;
}
*, *:before, *:after {
    box-sizing: inherit;
}
user agent stylesheet
input[type="password" i] {
    -webkit-text-security: disc !important;
    padding: 1px 2px;
}
user agent stylesheet
input {
    writing-mode: horizontal-tb !important;
    font-style: ;
    font-variant-ligatures: ;
    font-variant-caps: ;
    font-variant-numeric: ;
    font-variant-east-asian: ;
    </style>
</head>
<body>
<div class="login__item" style="display: block;">
          <div class="login__title h3">Sign in</div>
          <div class="login__form">
            <div class="field field_view">
              <div class="field__wrap">
                <input class="field__input" type="password" name="password" placeholder="Password" required="">
                <button class="field__view">
                  <svg class="icon icon-eye">
                    <use xlink:href="#icon-eye"></use>
                  </svg>
                </button>
              </div>
            </div>
            <button class="button login__button">Login</button>
          </div>
          <div class="login__foot"><a class="login__password" href="#">Forgot password?</a></div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>