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
        .section .complete {
            display: flex;
            align-items: flex-start;
            margin: 0 -16px;
        }

        body {
            min-width: 375px;
            background: #FCFCFD;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 1.71429;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            color: #23262F;
        }

        .complete__col {
            flex: 0 0 calc(50% - 32px);
            width: calc(50% - 32px);
            margin: 0 16px;
            float: right;
        }

        .complete__wrapper {
            margin: 0 -16px;
        }

        .complete__col:nth-child(2) {
            padding-left: 48px;
        }



        .complete__head {
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid #E6E8EC;
        }

        .complete__title {
            margin-bottom: 4px;
        }

        .h2 {
            font-size: 48px;
            line-height: 1.16667;
            letter-spacing: -.02em;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }

        .complete__info {
            margin-bottom: 32px;
            font-size: 16px;
            line-height: 1.5;
            color: #777E90;
        }

        .complete__subtitle {
            margin-bottom: 8px;
            font-size: 16px;
            line-height: 1.5;
            font-weight: 500;
        }

        .complete__author {
            display: flex;
            align-items: center;
        }

        .complete__author span {
            font-size: 12px;
            line-height: 1.66667;
            color: #777E90;
        }

        .complete__avatar {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            margin: 0 8px 0 4px;
        }

        .complete__avatar img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        img {
            vertical-align: middle;
        }

        img {
            border: none;
        }

        .complete__man {
            font-size: 12px;
            line-height: 1.66667;
            font-weight: 600;
        }

        .complete__line {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 32px;
        }

        .complete__rating {
            display: flex;
            align-items: center;
        }

        .complete__rating .icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
            fill: #FFD166;
        }

        .complete__number {
            font-weight: 500;
        }

        .complete__reviews {
            margin-left: 8px;
            color: #777E90;
        }

        .complete__parameters {
            display: flex;
            flex-wrap: wrap;
            margin-left: 24px;
        }

        .complete__parameter:not(:last-child) {
            margin-right: 20px;
        }

        .complete__parameter {
            font-size: 12px;
            line-height: 1.66667;
            color: #777E90;
        }

        .complete__parameter {
            font-size: 12px;
            line-height: 1.66667;
            color: #777E90;
        }

        .complete__list {
            display: flex;
            margin-bottom: 32px;
        }

        .complete__item:first-child {
            padding-right: 24px;
        }

        .complete__item {
            display: flex;
            align-items: center;
            flex: 0 0 50%;
        }

        .complete__category {
            font-size: 12px;
            line-height: 1.66667;
            color: #777E90;
        }

        .complete__value {
            font-size: 16px;
            line-height: 1.5;
            font-weight: 500;
        }

        .complete__stage {
            margin-bottom: 32px;
            font-size: 24px;
            line-height: 1.33333;
            font-weight: 600;
            letter-spacing: -.01em;
        }

        .complete__table {
            margin-bottom: 32px;
        }

        .complete__flex {
            display: flex;
            align-items: center;
        }

        .complete__cell:first-child {
            display: flex;
            align-items: center;
            padding-right: 24px;
            color: #777E90;
        }

        .complete__cell {
            flex: 0 0 50%;
        }

        .complete__cell:first-child .icon {
            width: 20px;
            height: 20px;
            margin-right: 12px;
            fill: #777E90;
        }

        .complete__cell:nth-child(2) {
            font-weight: 500;
        }

        .complete__cell {
            flex: 0 0 50%;
        }

        .complete__btns {
            display: flex;
        }

        .complete__btns .complete__button:not(:last-child) {
            margin-right: 12px;
        }

        .button-stroke {
            background: none;
            box-shadow: 0 0 0 2px #e6e8ec inset;
            color: #23262F;
        }

        a {
            text-decoration: none;
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

        .newsletter__gallery {

            padding: 90px;
            margin-left: 90px;
        }

        .newsletter__gallery img {
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="section complete">
        <div class="newsletter__gallery">
            <img src="img/slider-pic-1.jpg" alt="">
        </div>
    </div>

    <div class="complete__col" bis_skin_checked="1">
        <div class="complete__head" bis_skin_checked="1">
            <h2 class="complete__title h2">Congratulation!</h2>
            <div class="complete__info" bis_skin_checked="1">You trip has been booked! 🎉</div>
            <div class="complete__subtitle" bis_skin_checked="1">Spectacular views of Queenstown</div>
            <div class="complete__author" bis_skin_checked="1"><span>Hosted by</span>
                <div class="complete__avatar" bis_skin_checked="1"><img src="img/content/avatar.jpg" alt="Avatar">
                </div>
                <div class="complete__man" bis_skin_checked="1">Zoe Towne</div>
            </div>
        </div>
        <div class="complete__line" bis_skin_checked="1">
            <div class="complete__rating" bis_skin_checked="1">
                <svg class="icon icon-star">
                    <use xlink:href="#icon-star"></use>
                </svg>
                <div class="complete__number" bis_skin_checked="1">4.8</div>
                <div class="complete__reviews" bis_skin_checked="1">(256 reviews)</div>
            </div>
            <div class="complete__parameters" bis_skin_checked="1">
                <div class="complete__parameter" bis_skin_checked="1">1 bedroom</div>
                <div class="complete__parameter" bis_skin_checked="1">1 private bath</div>
            </div>
        </div>
        <div class="complete__list" bis_skin_checked="1">
            <div class="complete__item" bis_skin_checked="1">
                <div class="complete__details" bis_skin_checked="1">
                    <div class="complete__category" bis_skin_checked="1">Dates</div>
                    <div class="complete__value" bis_skin_checked="1">May 15 - 22, 2021</div>
                </div>
            </div>
            <div class="complete__item" bis_skin_checked="1">
                <div class="complete__details" bis_skin_checked="1">
                    <div class="complete__category" bis_skin_checked="1">Guests</div>
                    <div class="complete__value" bis_skin_checked="1">2 guest</div>
                </div>
            </div>
        </div>
        <div class="complete__stage" bis_skin_checked="1">Booking details</div>
        <div class="complete__table" bis_skin_checked="1">
            <div class="complete__flex" bis_skin_checked="1">
                <div class="complete__cell" bis_skin_checked="1">
                    <svg class="icon icon-hand-cart">
                        <use xlink:href="#icon-hand-cart"></use>
                    </svg>Booking code:
                </div>
                <div class="complete__cell" bis_skin_checked="1">UI8_150989</div>
            </div>
            <div class="complete__flex" bis_skin_checked="1">
                <div class="complete__cell" bis_skin_checked="1">
                    <svg class="icon icon-calendar">
                        <use xlink:href="#icon-calendar"></use>
                    </svg>Date:
                </div>
                <div class="complete__cell" bis_skin_checked="1">30 Apr, 2021</div>
            </div>
            <div class="complete__flex" bis_skin_checked="1">
                <div class="complete__cell" bis_skin_checked="1">
                    <svg class="icon icon-receipt">
                        <use xlink:href="#icon-receipt"></use>
                    </svg>Total:
                </div>
                <div class="complete__cell" bis_skin_checked="1">$833</div>
            </div>
            <div class="complete__flex" bis_skin_checked="1">
                <div class="complete__cell" bis_skin_checked="1">
                    <svg class="icon icon-wallet">
                        <use xlink:href="#icon-wallet"></use>
                    </svg>Payment method:
                </div>
                <div class="complete__cell" bis_skin_checked="1">Credit card</div>
            </div>
        </div>
        <div class="complete__btns" bis_skin_checked="1"><a class="button-stroke complete__button" href="your-trips.html">Your trips</a><a class="button complete__button" href="things-to-do.html">Explore
                things to do</a></div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</body>

</html>