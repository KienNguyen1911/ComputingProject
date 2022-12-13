@extends('admin.layoutAdmin')
@section('view-payment')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between">
                    <a href="{{ route('getPaymentList') }}">
                        <h4 class="card-title"> Payment Table</h4>
                    </a>
                    <form action="{{ route('searchPayment') }}" method="post">
                        @csrf
                        <div class="input-group no-border" style="width: 400px; margin: 10px 0px">
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
                    <form action="{{ route('filterPaymentByDate') }}" method="post" style="display: flex; justify-content: center; margin-right: 14px">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <input type="date" name="date" id="" class="form-control datetimepicker"
                                    style="height: 44px; margin: 10px 0px " max="@php echo date('Y-m-d'); @endphp" step="">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary ">Filter</button>
                            </div>
                        </div>
                    </form>
                    {{-- <a href="{{ route('add.reservation') }}" class="btn btn-primary">Add New Reservation</a> --}}
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary ">
                                <th>User-ID</th>
                                <th>Home</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Total</th>
                                <th> Pay Date</th>
                                <th class="text-center"> Function</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>
                                        <td> {{ $data->user_name }}-{{ $data->user_id }}</td>
                                        <td> {{ $data->home_name }}</td>
                                        <td> {{ $data->start }}</td>
                                        <td> {{ $data->end }}</td>
                                        <td> {{ $data->total_price }}</td>
                                        <td> {{ date('Y-m-d H:i:s', strtotime($data->vnp_PayDate)) }} </td>
                                        {{-- <td>{{$data->home_description}}</td> --}}
                                        <td class="text-center">
                                            {{-- <a href="{{ route('images.home', ['id' => $data->id]) }}"class="btn btn-info">View</a> --}}
                                            <a href="{{ route('getPaymentDetailAdmin', ['id' => $data->id]) }}"
                                                class="btn btn-warning">Details</a>
                                            <a
                                                href="{{ route('deletePayment', ['id' => $data->id]) }}"class="btn btn-danger">Delete</a>
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
