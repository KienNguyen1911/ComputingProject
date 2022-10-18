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
        * {
            font-family: 'DM Sans', sans-serif;
            box-sizing: border-box;
        }

        a {
            text-decoration: none !important;
            font-family: Popins, sans-serif !important;
        }

        /* Browse */

        @media only screen and (max-width: 1179px) {
            .section {

                margin-bottom: 112px;
            }
        }

        .center {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
        }

        .browse__inner {
            position: relative;
        }

        @media only screen and (max-width: 1179px) {
            .browse__head {
                margin-bottom: 64px;
            }
        }

        .browse__head {
            padding-right: 120px;
        }

        .h2 {
            font-size: 48px;
            line-height: 1.16667;
            letter-spacing: -.02em;
        }

        .hero,
        .h1,
        .h2,
        .h3,
        .h4 {
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }

        .browse__info {
            margin-top: 12px;
        }

        .info {
            margin-top: 12px;
            font-size: 24px;
            line-height: 1.33333;
            letter-spacing: -.01em;
            color: #777E90;
        }

        .browse-item {
            text-align: left;
        }

        .browse-preview {
            margin-bottom: 1rem;
            overflow: hidden;
            border-radius: 2rem;
        }

        .browse-preview img {
            max-width: 380px;
            max-height: 380px;
            border-radius: 40px;
            transition: transform 1s ease-in-out;
            display: block;
            width: 100%;
            height: 256px;
        }

        .browse-subtitle {
            margin-bottom: 8px;
            font-size: 16px;
            line-height: 1.5;
            font-weight: 700;
            color: black;
        }

        .browse-content {
            color: gray !important;

        }

        .browse-item:hover .browse-preview img {
            transform: scale(1.05);
        }

        [class^="status"] {
            display: inline-block;
            padding: 0 12px;
            background: #E6E8EC;
            border-radius: 13px;
            font-size: 12px;
            line-height: 26px;
            font-weight: 700;
            text-transform: uppercase;
            color: #353945;
        }

        .browse__category {
            position: absolute;
            top: 185px;
            background-color: black;
            color: white;
            margin-left: 12px;
        }

        /* Join */
        [class^="section"] {
            margin-bottom: 136px;
        }

        .newsletter__center {
            display: flex;
            align-items: center;
        }

        .center {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 80px;
        }

        .newsletter__wrap {
            max-width: 352px;
            margin-right: auto;
        }

        .newsletter__title {
            margin-bottom: 16px;
        }

        .h2 {
            font-size: 48px;
            line-height: 1.16667;
            letter-spacing: -.02em;
        }

        .hero,
        .h1,
        .h2,
        .h3,
        .h4 {
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }

        .newsletter__info {
            margin-bottom: 40px;
            font-size: 16px;
            line-height: 1.5;
            color: #777E90;
        }

        .newsletter__list {
            margin-bottom: 40px;
        }

        .newsletter__item:not(:last-child) {
            margin-bottom: 16px;
        }

        .newsletter__item {
            display: flex;
        }

        .newsletter__number {
            flex-shrink: 0;
            width: 44px;
            margin-right: 16px;
            border-radius: 12px;
            text-align: center;
            line-height: 24px;
            font-weight: 500;
            color: #FCFCFD;
        }

        .newsletter__text {
            font-size: 16px;
            line-height: 1.5;
            font-weight: 500;
        }

        .subscription {
            position: relative;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        textarea {
            -webkit-appearance: none;
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

        .subscription__btn {
            position: absolute;
            top: 8px;
            right: 8px;
            bottom: 8px;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #3B71FE;
            transition: background .2s;
        }

        /* Browse 2*/
        .browse__category-1 {
            position: absolute;
            top: 130px;
            background-color: black;
            color: white;
            margin-left: 12px;
        }
    </style>
</head>

<body>
    <!-- Browse -->
    <div class="section browse">
        <div class="browse__center center">
            <div class="browse__inner">
                <div class="browse__head">
                    <h2 class="browse__title h2">Browse by property type</h2>
                    <div class="browse__info info">Let’s go on an adventure</div>
                </div>
                <br><br><br>
                <div class="browse-wrapper">
                    <div class="browse-slider row">
                        <a href="" class="browse-item col-lg-3">
                            <div class="browse-preview">
                                <img src="img/catalog-pic-1@2x.jpg" alt="">
                                <div class="status-black browse__category">20% off</div>
                            </div>
                            <div class="browse-subtitle">Nature house</div>
                            <div class="browse__content">
                                <i class="fa-solid fa-house" style="color:gray; font-size:12px;"> 650,111 </i>
                            </div>
                        </a>
                        <a href="" class="browse-item col-lg-3">
                            <div class="browse-preview">
                                <img src="img/catalog-pic-7@2x.jpg" alt="">
                                <div class="status-black browse__category">FROM $230</div>
                            </div>
                            <div class="browse-subtitle">Nature house</div>
                            <div class="browse__content">
                                <i class="fa-solid fa-house" style="color:gray; font-size:12px;"> 664,423 </i>
                            </div>
                        </a>
                        <a href="" class="browse-item col-lg-3">
                            <div class="browse-preview">
                                <img src="img/browse-pic-3@2x.jpg" alt="">
                                <div class="status-black browse__category">30% off</div>
                            </div>
                            <div class="browse-subtitle">Nature house</div>
                            <div class="browse__content">
                                <i class="fa-solid fa-house" style="color:gray; font-size:12px;"> 324,565 </i>
                            </div>
                        </a>
                        <a href="" class="browse-item col-lg-3">
                            <div class="browse-preview">
                                <img src="img/browse-pic-4@2x.jpg" alt="">
                                <div class="status-black browse__category">FROM $190</div>
                            </div>
                            <div class="browse-subtitle">Nature house</div>
                            <div class="browse__content">
                                <i class="fa-solid fa-house" style="color:gray; font-size:12px;"> 443,879 </i>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <br> <br> <br> <br> <br>
        <!-- News Letter -->
        <div class="section newsletter">
            <div class="newsletter__center center">
                <div class="newsletter__wrap">
                    <h2 class="newsletter__title h2">Join our newsletter 🎉</h2>
                    <div class="newsletter__info">Stacks is a production-ready library of stackable content blocks built in React Native.</div>
                    <div class="newsletter__list">
                        <div class="newsletter__item">
                            <div class="newsletter__number" style="background-color: #58C27D;">01</div>
                            <div class="newsletter__text">Get more discount</div>
                        </div>
                        <div class="newsletter__item">
                            <div class="newsletter__number" style="background-color: #92A5EF;">01</div>
                            <div class="newsletter__text">Get premium travel magazine</div>
                        </div>
                    </div>
                    <div class="subscription">
                        <input class="subscription__input" type="email" name="email" placeholder="Enter your email" required="">
                        <button class="subscription__btn" style="color:#FCFCFD;">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="newsletter__gallery">
                    <img src="img/newsletter-pic-1.png" alt="">
                </div>
            </div>
        </div>
        <!-- Browse -->
        <div class="section browse">
            <div class="browse__center center">
                <div class="browse__inner">
                    <div class="browse__head">
                        <h2 class="browse__title h3">Explore mountains in New Zealand</h2>
                    </div>
                    <br><br><br>
                    <div class="browse-wrapper">
                        <div class="browse-slider row">
                            <a href="" class="browse-item col-lg-3">
                                <div class="browse-preview">
                                    <img src="img/catalog-pic-1@2x.jpg" alt="">
                                    <div class="status-black browse__category-1">20% off</div>
                                </div>
                                <div class="browse-subtitle"> Moutain house</div>
                                <div class="browse__content">
                                    <i class="fa-solid fa-house" style="color:gray; font-size:12px;"> 650,111 </i>
                                </div>
                            </a>
                            <a href="" class="browse-item col-lg-3">
                                <div class="browse-preview">
                                    <img src="img/catalog-pic-7@2x.jpg" alt="">
                                    <div class="status-black browse__category-1">FROM $230</div>
                                </div>
                                <div class="browse-subtitle"> Moutain house</div>
                                <div class="browse__content">
                                    <i class="fa-solid fa-house" style="color:gray; font-size:12px;"> 664,423 </i>
                                </div>
                            </a>
                            <a href="" class="browse-item col-lg-3">
                                <div class="browse-preview">
                                    <img src="img/browse-pic-3@2x.jpg" alt="">
                                    <div class="status-black browse__category-1">30% off</div>
                                </div>
                                <div class="browse-subtitle"> Moutain house</div>
                                <div class="browse__content">
                                    <i class="fa-solid fa-house" style="color:gray; font-size:12px;"> 324,565 </i>
                                </div>
                            </a>
                            <a href="" class="browse-item col-lg-3">
                                <div class="browse-preview">
                                    <img src="img/browse-pic-4@2x.jpg" alt="">
                                    <div class="status-black browse__category-1">FROM $190</div>
                                </div>
                                <div class="browse-subtitle"> Moutain house</div>
                                <div class="browse__content">
                                    <i class="fa-solid fa-house" style="color:gray; font-size:12px;"> 443,879 </i>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>