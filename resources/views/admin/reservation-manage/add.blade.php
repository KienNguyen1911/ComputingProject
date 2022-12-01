@extends('admin.layoutAdmin')

@section('add-reservation')


    <div class="row">
        <div class="col-md-12">
            <div class="card">

                @if (session('errors'))
                    <div class="alert alert-dismissible alert-warning">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="alert-heading">Failed!</h4>
                        <p class="mb-0">Please fulfill all information before submit!</p>
                    </div>
                @endif

                <div class="card-header">
                    <h5 class="title">Add new reservation</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('createReservation') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label>User Name</label>
                                    {{-- <input type="text" class="form-control" placeholder="Name" name="home_name" value="" required> --}}
                                    <select name="user_id" id="" class="form-control">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label>Home Name</label>
                                    {{-- <input type="text" class="form-control" placeholder="Name" name="home_status" value="" required> --}}
                                    <select name="home_id" id="" class="form-control">
                                        @foreach ($homes as $home)
                                            <option value="{{ $home->id }}">{{ $home->home_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 ">
                                {{-- <div class="receipt-item "> --}}
                                    <div class="form-group">
                                        <label>Check-in</label>
                                        <input type="text" name="start" class="daterange form-control" value="" data-datepicker-color="primary"
                                            placeholder="YYYY-MM-DD" required />
                                    </div>
                                {{-- </div> --}}
                            </div>

                            <div class="col-lg-6 col-md-6 ">
                                {{-- <div class="receipt-item "> --}}
                                    <div class="form-group">
                                        <label>Check-out</label>
                                        <input type="text" name="end" class="daterange form-control" value="" data-datepicker-color="primary"
                                            placeholder="YYYY-MM-DD" required />
                                    </div>
                                {{-- </div> --}}
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Add New Home</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            $(".daterange").daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: "Clear",
                },
                minDate: moment().subtract(1, "days"),
            });

            $(".daterange").on("apply.daterangepicker", function(ev, picker) {
                $('input[name="start"]').val(picker.startDate.format("YYYY-MM-DD"));
                $('input[name="end"]').val(picker.endDate.format("YYYY-MM-DD"));
            });

            $('input[name="start"]').on(
                "cancel.daterangepicker",
                function(ev, picker) {
                    $(this).val("");
                }
            );

        });
    </script>
@endsection
