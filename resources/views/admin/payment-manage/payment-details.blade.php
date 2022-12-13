@extends('admin.layoutAdmin')
@section('payment-details')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between">
                    <h4 class="card-title"> Payment Detail</h4>
                    {{-- <a href="{{ route('add.reservation') }}" class="btn btn-primary">Add New Reservation</a> --}}
                </div>
                <div class="card-body">
                    {{-- <div class="table-responsive"> --}}
                    <div class="infor-payment">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="staticEmail" class=" col-form-label">User</label>
                                <div class="">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{ $payment->name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="staticEmail" class=" col-form-label">Home Name</label>
                                <div class="">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{ $payment->home_name }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="staticEmail" class=" col-form-label">Start Date</label>
                                <div class="">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{ $payment->start }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="staticEmail" class=" col-form-label">End Date</label>
                                <div class="">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{ $payment->end }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="staticEmail" class=" col-form-label">Total Price</label>
                                <div class="">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{ number_format($payment->total_price, 0) }} VND">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="staticEmail" class=" col-form-label">Number Date</label>
                                <div class="">
                                    @php
                                        // count date
                                        $start = new DateTime($payment->start);
                                        $end = new DateTime($payment->end);
                                        $interval = $start->diff($end);
                                        // format($interval);
                                    @endphp
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{  $interval->format('%a') }} days">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="staticEmail" class=" col-form-label">Transaction No</label>
                                <div class="">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{ $payment->vnp_TransactionNo }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="staticEmail" class=" col-form-label">Bank Code</label>
                                <div class="">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{ $payment->vnp_BankCode }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="staticEmail" class=" col-form-label">Pay Date</label>
                                <div class="">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{ date('Y-m-d H:i:s', strtotime($payment->vnp_PayDate)) }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="staticEmail" class=" col-form-label">Bill Note</label>
                                <div class="">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{ $payment->note }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                @php
                                    $image = DB::table('images')->where('id', $payment->home_id)->first();
                                    // dd($image);
                                @endphp
                                <label for="staticEmail" class=" col-form-label">Image Preview</label>
                                <div class="home-preview">
                                    <img src="/homes_image/{{ $image->image }}  " alt="" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
