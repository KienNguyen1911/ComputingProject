@extends('admin.layoutAdmin')
@section('view-home')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between">
                    <h4 class="card-title"> Home Table</h4>
                    <a href="{{ route('add.home') }}" class="btn btn-primary">Add More Home</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary ">
                                <th > Name</th>
                                <th >Type</th>
                                <th > Price</th>
                                <th >Address</th>
                                <th >Image</th>
                                <th> Service</th>
                                <th class="text-center"> Function</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                @php
                                    $servicehome = json_decode($data->service);
                                    $count = count($servicehome);
                                @endphp
                                    <tr >
                                        <td > {{ $data->home_name }}</td>
                                        <td > {{ $data->type_id}}</td>
                                        <td > {{ $data->home_price }}</td>
                                        <td > {{ $data->home_address }}</td>
                                        <td > {{ $data->images->count() }}</td>
                                        <td>{{$count}}</td>
                                        {{-- <td>{{$data->home_description}}</td> --}}
                                        <td class="text-center">
                                            <a href="{{ route('images.home', ['id' => $data->id]) }}"class="btn btn-info">View</a>
                                            <a href="{{ route('edit.home', ['id' => $data->id]) }}"  class="btn btn-warning">Edit</a>
                                            <a href="{{ route('delete.home', ['id' => $data->id]) }}"class="btn btn-danger">Delete</a>
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
