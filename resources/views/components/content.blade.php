<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/content.css' )}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="section adventure">
        <div class="adventure-center center">
            <div class="adventure-head">
                <h2 class="adventure-title">Let’s go on an adventure</h2>
                <p class="adventure-info">Find and book a great experience.</p>
            </div>
            <div class="adventure-wrapper">
                <div class="adventure-slider row">
                    <div class="adventure-item col-lg-4">
                        <div class="adventure-preview">
                            <img src="img/adventure-pic-1.png" alt="">
                        </div>
                        <div class="adventure-details">
                            <div class="adventure-subtitle">
                                Luxury resort at the sea
                            </div>
                            <a class="status adventure-places">
                                9,326 places
                            </a>
                        </div>
                    </div>
                    <div class="adventure-item col-lg-4">
                        <div class="adventure-preview">
                            <img src="img/adventure-pic-2.png" alt="">
                        </div>
                        <div class="adventure-details">
                            <div class="adventure-subtitle">
                                Camping amidst the wild
                            </div>
                            <a class="status adventure-places">
                                12,326 places
                            </a>
                        </div>
                    </div>
                    <div class="adventure-item col-lg-4">
                        <div class="adventure-preview">
                            <img src="img/adventure-pic-3.png" alt="">
                        </div>
                        <div class="adventure-details">
                            <div class="adventure-subtitle">
                                Luxury resort at the sea
                            </div>
                            <a class="status adventure-places">
                                5,326 places
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section travel">
        <div class="travel-center center">
            <div class="travel-head">
                <h2>Travel to make memories all around the world</h2>
                <p class="info">Find trips that fit a flexible lifestyle</p>
            </div>

            <div class="travel-row row">
                <div class="col-lg-6">
                    <div class="travel-list">
                        <div class="travel-item">
                            <div class="travel-number" style="background-color: #8BC5E5;">01</div>
                            <div class="travel-subtitle">
                                Find trips that fit a flexible lifestyle
                            </div>
                            <div class="travel-content">
                                Stacks is a production-ready library of stackable content blocks built in React Native
                            </div>
                        </div>

                        <div class="travel-item">
                            <div class="travel-number" style="background-color: #92A5EF;">02</div>
                            <div class="travel-subtitle">
                                Travel with more confidence
                            </div>
                            <div class="travel-content">
                                Stacks is a production-ready library of stackable content blocks built in React Native
                            </div>
                        </div>

                        <div class="travel-item">
                            <div class="travel-number" style="background-color: #58C27D;">03</div>
                            <div class="travel-subtitle">
                                See what’s really included
                            </div>
                            <div class="travel-content">
                                Stacks is a production-ready library of stackable content blocks built in React Native
                            </div>
                        </div>
                    </div>
                    <a href="" class="travel-button">Start your search</a>
                </div>
                <div class="col-lg-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner" style="border-radius: 3rem">
                            <div class="carousel-item active">
                                <img src="img/travel-pic.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/travel-pic.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/travel-pic.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section work">
        <div class="work-center center">
            <div class="work-head">
                <h2 class="work-title">How it work</h2>
                <p class="work-info">Keep calm & travel on</p>
            </div>
            <div class="work-body">
                <div class="work-line">
                    <svg width="839" height="137" viewBox="0 0 839 137" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M838 4.83887C823.237 25.0088 713.617 137.14 601.48 135.889C497.352 134.728 454.07 -36.7167 262.536 60.1723C94.2489 145.302 53.9174 52.5844 1.07634 1.99272" stroke="#E6E8EC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="4 12"></path>
                    </svg>
                </div>
                <div class="work-list">
                    <div class="work-item">
                        <div class="work-preview">
                            <img src="img/work-pic1.png" alt="">
                        </div>
                        <div class="work-subtitle">Book & relax</div>
                        <div class="work-content">We realize ideas from simple to complex, everything becomes easy to use.</div>
                    </div>
                    <div class="work-item">
                        <div class="work-preview">
                            <img src="img/work-pic-2.png" alt="">
                        </div>
                        <div class="work-subtitle">Smart checklist</div>
                        <div class="work-content">We realize ideas from simple to complex, everything becomes easy to use.</div>
                    </div>
                    <div class="work-item">
                        <div class="work-preview">
                            <img src="img/work-pic-3.png" alt="">
                        </div>
                        <div class="work-subtitle">Save more</div>
                        <div class="work-content">We realize ideas from simple to complex, everything becomes easy to use.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section live">
        <div class="live-center center">
            <div class="live-head">
                <h2 class="live-title">Live anywhere</h2>
                <p class="live-info">Keep calm & travel on</p>
            </div>
            <div class="live-wrapper">
                <div class="live-slider row">
                    <a href="" class="live-item col-lg-4">
                        <div class="live-preview">
                            <img src="img/live-pic-1.png" alt="">
                        </div>
                        <div class="live-subtitle">Pick up the earliest sunrise</div>
                        <div class="live-content">6,879 properties</div>
                    </a>
                    <a href="" class="live-item col-lg-4">
                        <div class="live-preview">
                            <img src="img/live-pic-2.png" alt="">
                        </div>
                        <div class="live-subtitle">Enjoy the great cold</div>
                        <div class="live-content">6,879 properties</div>
                    </a>
                    <a href="" class="live-item col-lg-4">
                        <div class="live-preview">
                            <img src="img/live-pic-3.png" alt="">
                        </div>
                        <div class="live-subtitle">Unique stay</div>
                        <div class="live-content">6,879 properties</div>
                    </a>
                    
                </div>
            </div>
            <div class="live-btns">
                <button class="live-button btn btn-outline-secondary">
                    <div class="loader"></div>
                    <span>Load more</span>
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>