<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!--fontonlin-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/components/confirm-pay.css') }}">

    <title>Document</title>
</head>

@include('components.head')

<body>
    @include('components.header')
    <div class="confirm-pay-container" style="margin-inline: auto; margin-top: 100px">
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
                        <div class="bill-select">{{ $data->start }}</div>
                        <div class="bill-icon">
                            {{-- <button>nag</button> --}}
                            <i class="fa-solid fa-pen-to-square" style="font-weight: 100; font-size:30px"></i>
                        </div>
                    </div>
                    <div class="bill-day">
                        <div class="bill-item-title">Guests</div>
                        <div class="bill-select">1 guests</div>
                        <div class="bill-icon">
                            {{-- <button>nag</button> --}}
                            <i class="fa-solid fa-pen-to-square" style="font-weight: 100; font-size:30px"></i>
                        </div>
                    </div>
                </div>
                <div class="bill-contact">
                    <div class="bill-title">Your trip</div>
                    <div class="email-title">Email</div>
                    <div class="email-input"><input type="email"
                            style=" width: 100%;  padding: 14px 24px;  margin: 8px 0;  box-sizing: border-box;border-radius: 12px;"
                            placeholder="Enter your email"></div>
                </div>
                <div class="bill-contact">
                    <div class="email-title">Phone number</div>
                    <div class="email-input"><input type="email"
                            style=" width: 100%;  padding: 14px 24px;  margin: 8px 0;  box-sizing: border-box;border-radius: 12px;"
                            placeholder="Enter your phone number"></div>
                </div>
                <div class="bill-contact">
                    <div class="email-title">Message to host</div>
                    <div class="email-input-message"><input type="email"
                            style=" width: 100%;height: 116px;  padding: 14px 24px;  margin: 8px 0;  box-sizing: border-box;border-radius: 12px;"
                            placeholder="Enter your message"></div>
                </div>
                <div class="confirm-btn">
                    <button class="button-btn"
                        style="border: 0.1px solid rgb(95, 95, 95); border-radius: 24px; width: 176px;height:48px ;">Confirm</button>
                </div>


            </div>
        </div>

        @php
            // $home = App\Models\Reservation::find($data->home_id);
            $image = App\Models\Image::where('home_id', $data->home_id)->first();
            $home = App\Models\Home::find($data->home_id);
        @endphp
        <div class="pay">
            <div class="pay-title">
                <div class="pay-img"><img style="border-radius: 24px; width: auto; width: 180px; height: 180px;"
                        src="/homes_image/{{ $image->image }}" alt=""></div>
                <div class="pay-item-des" style="flex: 3;">
                    <div class="pay-name">{{$home->home_name}}</div>
                    <div class="pay-host">Hosted by <span style="font-weight: bold;">Zoe Towne</span></div>
                    <div class="pay-service">1 prrivate bath . 1 bathroom</div>
                    <div class="dongke"></div>
                    <div class="pay-rate"></div>
                </div>
            </div>
            <div class="order-information">
                <div class="order-detail">
                    <p style="">Check-in</p>
                    <p style="font-size: 20px; font-weight:700">{{ $data->start }}</p>
                </div>
                <div class="order-detail">
                    <p style="">Check-out</p>
                    <p style="font-size: 20px; font-weight:700">{{ $data->end }}</p>
                </div>
                <div class="order-detail">
                    <p style="">Guest</p>
                    <p style="font-size: 20px; font-weight:700">1 guest</p>
                </div>
                <div class="order-detail">
                    <p style="">Price per Night</p>
                    <p style="font-size: 20px; font-weight:700">${{$home->home_price}}</p>
                </div>
            </div>

            <div class="price-detail">
                <div class="price-title">Price details</div>
                <div class="price-item">
                    <div class="price-item-name" style="color: #777e90;">
                        @php
                            $home = App\Models\Home::find($data->home_id);
                            $home_price = $home->home_price;

                            $dateStart = new DateTime($data->start);
                            $dateEnd = new DateTime($data->end);
                            $interval = $dateStart->diff($dateEnd);

                            $total = $interval->days * $home_price;
                            echo '$'.$home_price.' x '.$interval->format('%a');
                        @endphp
                        nights</div>
                    <div class="price-item-cost">{{$total}}</div>
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
                    <div class="price-item-cost">${{$total}}</div>
                </div>
            </div>


        </div>
    </div>
</body>
