@include('components.head')
<link rel="stylesheet" href="{{ asset('css/components/browse.css') }}">

<body>
    @include('components.header')
    <div class="section browse">
        <div class="browse__center center">
            <div class="browse__inner">
                <div class="browse__head">
                    @php
                        $count = count($data);
                        // dd($count);
                    @endphp
                    {{-- <h2 class="browse__title h2">Your result: </h2> --}}
                    <div class="browse__info info">There are {{$count}} homes that is suitable for your search</div>
                </div>
                <br><br><br>

                <div class="browse-wrapper">
                    <div class="browse-slider row">
                        @foreach ($data as $data)
                            @php
                                $home_id = $data->id;
                                $home_image = DB::table('images')->where('home_id', $home_id)->first();
                                // dd($home_image);
                            @endphp
                            <a href="{{ route('home-details', ['id' => $data->id]) }}" class="browse-item col-md-4 col-lg-3 ">
                                <div class="browse-preview" style="position: relative">
                                    <img src="/homes_image/{{$home_image->image}}" alt="">
                                    <div class="status-black browse__category" style="top: 20px">20% off</div>
                                </div>
                                <div class="browse-subtitle">{{ $data->home_name }}</div>
                                <div class="browse__content">
                                    <i class="fa-solid fa-house" style="color:gray; font-size:12px;">
                                        {{ $data->home_price }} </i>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>