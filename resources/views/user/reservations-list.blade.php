@include('components.header')
<link rel="stylesheet" href="{{ asset('css/home-details.css') }}">
<link rel="stylesheet" href="{{ asset('css/reservations-list.css')}}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

<div class="container">
    <div class="section wishtlist">
        <div class="wishtlist-center center">
            <div class="control">
                <a href="" class="control-button">
                    <i class="fas fa-chevron-left"></i>
                    <span>Go Home</span>
                </a>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="breadcrumb-link" href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Bookings
                        </li>
                    </ol>
                </nav>
            </div>
    
            <div class="wishlist-details">
                <h2 class="wishlists-title h2">Bookings</h2>
                <div class="wishtlist-counter">You added 8 items to wishlists</div>
            </div>
    
            <div class="row">
                @foreach ($data as $data)
                @php
                    $image = DB::table('images')->where('home_id', $data->home_id)->first();
                    $home = DB::table('homes')->where('id', $data->home_id)->first();
                    // dd($home);
                @endphp
                    <div class="col-md-4">
                        <a href="{{ route('getPayment', ['id'=>$data->id]) }}" class="card">
                            <div class="card-preview">
                                <img src="/homes_image/{{ $image->image }}" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-line">
                                    <div class="card-title">{{$home->home_name}}</div>
                                    <div class="card-price">                                    
                                        ${{$home->home_price}}
                                    </div>
                                </div>
                                <div class="card-date">
                                    <div class="card-check-in">From: {{$data->start}}</div>
                                    <div class="card-check-out">To: {{$data->end}}</div>
                                </div>
                                <div class="card-foot">
                                    <div class="card-cost">Total: </div>
                                    <div class="card-rating">
                                        <i class="fa-solid fa-star" style="color: yellow"></i>
                                        {{$home->home_rating}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
