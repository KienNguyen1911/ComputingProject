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
    /* border-radius: 12px; */
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

/*  */
.field__view {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 48px;
}
/* div, input, textarea, select, button, h1, h2, h3, h4, h5, h6, a, span, a:focus {
    outline: none;
} */
input, button {
    margin: 0;
    padding: 0;
    border: 0;
}
button {
    background: none;
}
input[type="submit"], button {
    cursor: pointer;
}
.login__form > .button {
    width: 100%;
    margin-top: 12px;
}
[class^="button"] {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    height: 48px;
    padding: 0 24px;
    background: #3B71FE;
    border-radius: 24px;
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    color: #FCFCFD;
    transition: all .2s;
}
.login__foot {
    margin-top: 32px;
    text-align: center;
    font-size: 12px;
    line-height: 1.66667;
    color: #353945;
}
.login__password {
    color: #353945;
}
.login__link, .login__password {
    font-weight: 600;
    transition: color .2s;
}
a {
    text-decoration: none;
}
.login__link{
color:#FCFCFD;
}
</style>
</head>
<body>
<div class="mfp-content"><div class="popup popup_login" id="popup-login">
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
            <button class="button login__button" ><a class="login__link" href="content">Login</a></button>
          </div>
          <div class="login__foot"><a class="login__password" href="#">Forgot password?</a></div>
        </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>