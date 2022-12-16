@include('components.head')
<link rel="stylesheet" href="{{ asset('css/components/browse.css') }}">

<body>
    @include('components.header')
    <div class="section browse">
        <div class="browse__center center">
            <form action="{{ route('postFilter') }}" method="post"
                style="border: 1px solid; padding: 16px 18px; border-radius: 10px">
                @csrf
                <h2 style="font-weight: 700; text-align: center">Fillter Home</h2>
                <div class="row">
                    <div class="col-md-6">
                        <label for="types" style="font-size: 20px; font-weight: 600">Type Home</label>
                        <select name="type_name" id="types"
                            style="width: 200px; padding: 6px 8px; border-radius: 8px; margin-left: 10px;">
                            @foreach ($type as $type)
                                <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @php
                        // get home_address
                        $home_address = DB::table('homes')
                            ->select('home_address')
                            ->groupBy('home_address')
                            ->get();
                    @endphp
                    <div class="col-md-6">
                        <label for="types" style="font-size: 20px; font-weight: 600">Home Address</label>
                        <select name="home_address" id="types"
                            style="width: 200px; padding: 6px 8px; border-radius: 8px; margin-left: 10px;">
                            @foreach ($home_address as $home_address)
                                <option value="{{ $home_address->home_address }}">{{ $home_address->home_address }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="div" style="margin-top: 10px; margin-bottom: 10px;">
                    <label for="types" style="font-size: 20px; font-weight: 600">Service Home</label>
                    <br>
                    <div class="row">
                        @foreach ($service as $service)
                            <div class="col-md-3">
                                <input type="checkbox" name="service[]" value="{{ $service->service_name }}"
                                    style="margin-left: 16px">{{ $service->service_name }}
                            </div>
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Filter</button>
            </form>
            <div class="browse__inner">
                <div class="browse__head">
                    <h2 class="browse__title h2">Browse by property type</h2>
                    <div class="browse__info info">Let’s go on an adventure</div>
                </div>
                <br><br><br>

                <div class="browse-wrapper">
                    <div class="browse-slider row">
                        @foreach ($home as $home)
                            @php
                                $home_id = $home->id;
                                $home_image = DB::table('images')
                                    ->where('home_id', $home_id)
                                    ->first();
                                // dd($home_image);
                            @endphp
                            <a href="{{ route('home-details', ['id' => $home->id]) }}"
                                class="browse-item col-md-4 col-lg-3 mt-5">
                                <div class="browse-preview">
                                    <img src="/homes_image/{{ $home_image->image }}" alt="">
                                    <div class="status-black browse__category">20% off</div>
                                </div>
                                <div class="browse-subtitle">{{ $home->home_name }}</div>
                                <div class="browse__content">
                                    {{-- <i class=""></i> --}}
                                    <i class="fa-solid fa-tags" style="color:gray; font-size:12px;">
                                        {{ number_format($home->home_price) }} VND</i>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
