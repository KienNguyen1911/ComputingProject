@extends('admin.layoutAdmin')
@section('view-product')
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
                            <thead class=" text-primary">
                                <th> Name</th>
                                <th>Type</th>
                                <th> Price</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th> Description</th>
                                <th class="text-center"> Function</th>
                            </thead>
                            <tbody>
                                @foreach ($home as $home)
                                    <tr>
                                        <td> {{ $home->home_name }}</td>
                                        <td> nothing</td>
                                        <td> {{ $home->home_price }}</td>
                                        <td> {{ $home->home_address }}</td>
                                        <td> {{ $home->home_images->count() }}</td>
                                        <td class="text-center " style="display: flex; gap: 10px">
                                            <a href="{{ route('images.home', ['id' => $home->id]) }}"class="btn btn-warning">View</a>
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
