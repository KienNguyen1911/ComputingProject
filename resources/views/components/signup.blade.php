<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <title>Document</title>
<style>
    
.mfp-auto-cursor .mfp-content {
    cursor: auto;
}
.mfp-inline-holder .mfp-content, .mfp-ajax-holder .mfp-content {
    width: 100%;
    
}
.mfp-content {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    margin: 100 auto;
    text-align: left;
    z-index: 1045;
    border-radius: 20px;

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
.login__info {
    margin-top: 12px;
    text-align: center;
    font-size: 16px;
    line-height: 1.5;
    color: #777E90;
}
.login__btns {
    display: flex;
    justify-content: center;
    margin-top: 32px;
}
.button .login__button{
    align-items:center;
    background-color:#0142eb;
    border-radius:24px;
    color:#fcfcfd;
    display:flex;
    font-family:DM Sans;
    font-weight:700;
    justify-content:center;
    line-height:16px;
    padding:0px 24px;
    text-align:center;
}
.button-black .login__button{
    align-items:center;
    background-color:#23262f;
    border-radius:24px;
    color:#fcfcfd;
    display:flex;
    font-family:DM Sans;
    font-weight:700;
    justify-content:center;
    line-height:16px;
    padding:0px 24px;
    text-align:center;
}
.login__note {
    margin-top: 32px;
    text-align: center;
    font-size: 12px;
    line-height: 1.66667;
    color: #777E90;
}
.login .subscription {
    margin-top: 32px;
}
.subscription {
    position: relative;

}
.subscription__input{
border-color:#e6e8ec;
border-radius:24px;
border-style:solid;
border-width:2px;
color:#23262f;
display:inline-block;
font-family:Poppins;
font-size:14px;
line-height:24.0001px;
padding:0px 48px 0px 14px;
}

.subscription__input {
    width: 100%;
    height: 48px;
    padding: 0 48px 0 14px;
    border-radius: 24px;
    background: none;
    border: 2px solid #E6E8EC;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    line-height: 1.71429;
    color: #23262F;
    transition: border-color .2s;
}

/*  */
input {
    writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: fieldtext;
    letter-spacing: normal;
    word-spacing: normal;
    line-height: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    appearance: auto;
    -webkit-rtl-ordering: logical;
    cursor: text;
    background-color: field;
    margin: 0em;
    padding: 1px 2px;
    border-width: 2px;
    border-style: inset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
.login__foot {
    margin-top: 32px;
    text-align: center;
    font-size: 12px;
    line-height: 1.66667;
    color: #353945;
}
.popup .mfp-close {
    position: absolute;
    top: -16px;
    right: -16px;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    line-height: normal;
    opacity: 1;
    border: 1px solid transparent;
    box-shadow: 0px 8px 16px rgb(15 15 15 / 10%);
    font-size: 0;
    transition: all .2s;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.mfp-close-btn-in .mfp-close {
    color: black;
}
button.mfp-close, button.mfp-arrow {
    overflow: visible;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none;
    display: block;
    outline: none;
    padding: 0;
    z-index: 1046;
    box-shadow: none;
    touch-action: manipulation;
}
.mfp-close {
    width: 44px;
    height: 44px;
    line-height: 44px;
    position: absolute;
    right: 0;
    top: 0;
    text-decoration: none;
    text-align: center;
    opacity: 0.65;
    padding: 0 0 18px 10px;
    color: #FFF;
    font-style: normal;
    font-size: 28px;
    font-family: Arial, Baskerville, monospace;
}
.mfp-close, .mfp-arrow, .mfp-preloader, .mfp-counter {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

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
</style>
</head>

<body>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1>fbdrfbfgcv</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div> -->
        <div class="mfp-content"><div class="popup popup_login" id="popup-login">
      <div class="login">
        <div class="login__item">
          <div class="login__title h3">Sign up on Fleet</div>
          <div class="login__info">Use Your OpenID to Sign up</div>
          <div class="login__btns">
            <button class="button login__button">
            <i class="fa-brands fa-google"></i><span>Google</span>
            </button>
            <button class="button-black login__button">
            
            <i class="fa-brands fa-apple"></i>
              <span>Apple</span>
            </button>
          </div>
          <div class="login__note">Or continue with email</div>
          <div class="subscription">
            <input class="subscription__input" type="email" name="email" placeholder="Enter your email" required="">
            <button class="subscription__btn">
              <svg class="icon icon-arrow-next">
                <use xlink:href="#icon-arrow-next"></use>
              </svg>
            </button>
          </div>
          <div class="login__foot">Already have an account? <a class="login__link" href="#">Login</a></div>
          <button title="Close (Esc)" type="button" class="mfp-close">×</button>

        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>