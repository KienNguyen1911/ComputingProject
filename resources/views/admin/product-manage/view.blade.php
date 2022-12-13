@extends('admin.layoutAdmin')
@section('view-home')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between">
                    <a href="{{ route('view.home') }}">
                        <h4 class="card-title"> Home Table</h4>
                    </a>
                    <form action="{{ route('searchHomeAdmin') }}" method="post">
                        @csrf
                        <div class="input-group no-border" style="width: 400px">
                            <input type="text" value="" class="form-control" name="search" placeholder="Search..."
                                style="border: 1px solid; border-right: none" required>
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text"
                                    style="border: 1px solid; border-left: none">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <a href="{{ route('add.home') }}" class="btn btn-primary">Add More Home</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <form action="{{ route('filterHomeByName') }}" method="post">
                                @csrf
                                <select name="home_name" id="home_name" class="form-control">
                                    <option>Name</option>
                                    <option value="0">Ascending A-Z</option>
                                    <option value="1">Descending Z-A</option>
                                </select>
                                <button type="submit" class="btn btn-primary ">Filter</button>

                            </form>
                        </div>
                        <div class="col-md-3">
                            <form action="{{ route('filterHomeByType') }}" method="post">
                                @csrf
                                <select name="type" id="type" class="form-control">
                                    <option value="null">Type</option>
                                    @foreach ($type as $type)
                                        <option value="{{ $type->id }}">{{ $type->type_name }}
                                        </option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary ">Filter</button>

                            </form>
                        </div>
                        <div class="col-md-3">
                            <form action="{{ route('filterHomeByPrice') }}" method="post">
                                @csrf
                                <select name="home_price" id="" class="form-control">
                                    <option value="">Price</option>
                                    <option value="0">High - Low</option>
                                    <option value="1">Low - High</option>
                                </select>
                                <button type="submit" class="btn btn-primary ">Filter</button>

                            </form>
                        </div>
                        <div class="col-md-3">
                            <form action="{{ route('filterHomeByAddress') }}" method="post">
                                @csrf
                                    @php
                                        $home_address = DB::table('homes')
                                            ->select('home_address')
                                            ->distinct()
                                            ->get();
                                            // dd($home_address);
                                    @endphp
                                <select name="home_address" id="" class="form-control">
                                    <option value="no">Address</option>
                                    @foreach ($home_address as $home_address)
                                        <option value="{{ $home_address->home_address }}">
                                            {{ $home_address->home_address }}
                                        </option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary ">Filter</button>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary ">
                                <th>Home Name</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Service</th>
                                <th class="text-center">Function</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    @php
                                        $servicehome = json_decode($data->service);
                                        
                                        $type = DB::table('types')
                                            ->where('id', $data->type_id)
                                            ->first();
                                        $images = DB::table('images')
                                            ->where('home_id', $data->id)
                                            ->get();
                                    @endphp
                                    <tr>
                                        <td> {{ $data->home_name }}</td>
                                        <td> {{ $type->type_name }}</td>
                                        <td> {{ $data->home_price }}</td>
                                        <td> {{ $data->home_address }}</td>
                                        <td> {{ count($images) }}</td>
                                        <td>{{ count($servicehome) }}</td>
                                        {{-- <td>{{$data->home_description}}</td> --}}
                                        <td class="text-center">
                                            <a
                                                href="{{ route('images.home', ['id' => $data->id]) }}"class="btn btn-info">View</a>
                                            <a href="{{ route('edit.home', ['id' => $data->id]) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a
                                                href="{{ route('delete.home', ['id' => $data->id]) }}"class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
