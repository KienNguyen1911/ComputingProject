@extends('admin.layoutAdmin')

@section('view-service')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between">
                    <h4 class="card-title"> Service Table</h4>
                    <a href="{{ route('add.service') }}" class="btn btn-primary">Add More Type</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th> Name</th>
                                <th> Price</th>
                                <th> Description</th>
                                <th class="text-center"> Function</th>
                            </thead>
                            <tbody>
                                @foreach ($services as $services)
                                    <tr>
                                        <td> {{$services->service_name}}</td>
                                        <td> {{$services->service_price}}</td>
                                        <td> {{$services->service_description}}</td>
                                        <td class="text-center " style="display: flex; gap: 10px">
                                            <a href="{{ route('edit.service',['id'=>$services->id]) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ route('delete.service', ['id'=>$services->id]) }}" class="btn btn-danger">Delete</a>
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
