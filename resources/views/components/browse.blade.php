@include('components.head')
<link rel="stylesheet" href="{{ asset('css/components/browse.css') }}">

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
        </div>
    </div>
        
</body>
