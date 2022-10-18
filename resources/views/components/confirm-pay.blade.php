@include('components.head')
<link rel="stylesheet" href="{{asset('css/components/confirm-pay.css')}}">

<body>
    <div class="confirm-pay-container">
        <div class="confirm">
            <div class="confirm-title">
                <h1>Confirm and pay</h1>
                <div class="dongke"></div>
            </div>
            <div class="bill">
                <div class="bill-title">Your trip</div>
                <div class="bill-material">
                    <div class="bill-day">
                        <div class="bill-item-title">Date</div>
                        <div class="bill-select">Aug 01 - Aug 19</div>
                    </div>
                    <div class="bill-icon"><button class="btn">nag</button></div>

                    <div class="bill-guest">
                        <div class="bill-item-title">Guests
                        </div>
                        <div class="bill-select">4 guests</div>
                    </div>
                    <div class="bill-icon"><button class="btn">nag</button></div>
                </div>
            </div>
        </div>


        <div class="pay">
            <div class="pay-title">
                <div class="pay-img"><img style="border-radius: 24px; width: auto; width: 180px; height: 180px;" src="./img/itemimg1.jpg" alt=""></div>
                <div class="pay-item-des" style="flex: 3;">
                    <div class="pay-name">Spectacular views of Queenstown</div>
                    <div class="pay-host">Hosted by <span style="font-weight: bold;">Zoe Towne</span></div>
                    <div class="pay-service">1 prrivate bath . 1 bathroom</div>
                    <div class="dongke"></div>
                    <div class="pay-rate"></div>
                </div>
            </div>
            <div class="order-information">
                <div class="order-detail">
                    <p style="font-size: 12px;">Date</p>
                    <p>Aug 15, 2021</p>
                </div>
                <div class="order-detail">
                    <p style="font-size: 12px;">Check-out</p>
                    <p>Aug 22, 2021</p>
                </div>
                <div class="order-detail">
                    <p style="font-size: 12px;">Guest</p>
                    <p>1 guest</p>
                </div>
            </div>
            <div class="price-detail">
                <div class="price-title">Price details</div>
                <div class="price-item">
                    <div class="price-item-name" style="color: #777e90;">$119 x 7 nights</div>
                    <div class="price-item-cost">$833</div>
                </div>
                <div class="price-item">
                    <div class="price-item-name" style="color: #777e90;">10% campaign discount</div>
                    <div class="price-item-cost">-$125</div>
                </div>
                <div class="price-item">
                    <div class="price-item-name" style="color: #777e90;">Service fee</div>
                    <div class="price-item-cost">$103</div>
                </div>
                <div class="price-item">
                    <div class="price-item-name" style="font-weight:bold; ">Total (USD)</div>
                    <div class="price-item-cost">$811</div>
                </div>
            </div>

            <div class="st">
                <p>Free cancellation until 3:00 PM on May 15, 2021</p>
            </div>
        </div>
    </div>
</body>
