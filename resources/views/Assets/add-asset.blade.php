@extends('layout.header')
@section('section')
    <div class="row">
        <div class="col-12">
            <div class="col-12 ">
                <div class="card  card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <!-- <li class="pt-2 px-3"><h3 class="card-title">PPM</h3></li> -->
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-home-tab" data-toggle="pill"
                                    href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home"
                                    aria-selected="false">Item Registration</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-messages-tab" data-toggle="pill"
                                    href="#custom-tabs-two-messages" role="tab" aria-controls="custom-tabs-two-messages"
                                    aria-selected="false">Vendor Details</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-ppm-tab" data-toggle="pill"
                                    href="#custom-tabs-two-ppm" role="tab" aria-controls="custom-tabs-two-ppm"
                                    aria-selected="false">PPM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="custom-tabs-two-settings-tab" data-toggle="pill"
                                    href="#custom-tabs-two-settings" role="tab" aria-controls="custom-tabs-two-settings"
                                    aria-selected="true">Gate Pass</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="custom-tabs-two-BME-tab" data-toggle="pill"
                                    href="#custom-tabs-two-BME" role="tab" aria-controls="custom-tabs-two-BME"
                                    aria-selected="true">RAD</a>
                            </li>


                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content " id="custom-tabs-two-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-two-home" role="tabpanel"
                                aria-labelledby="custom-tabs-two-home-tab">
                              @include('Assets.item-registration')
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-two-ppm" role="tabpanel"
                                aria-labelledby="custom-tabs-two-ppm-tab">
                                @include('Assets.ppm-schedule')
                            </div>

                            <div class="tab-pane fade " id="custom-tabs-two-settings" role="tabpanel"
                                aria-labelledby="custom-tabs-two-settings-tab">
                                @include('Assets.gate-pass')
                            </div>
                            <div class="tab-pane fade " id="custom-tabs-two-BME" role="tabpanel"
                                aria-labelledby="custom-tabs-two-BME-tab">
                                @include('Assets.rad')
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            console.log("ready!");
            check_type();
        });

        function check_type() {

            if ($('#sch_type').val() == "timely") {
                $('#ppm_type').show();
                $('#num_itt').show();
                $('#meter').hide();
                $('#unit').hide();

            } else {
                $('#ppm_type').hide();
                $('#num_itt').hide();
                $('#meter').show();
                $('#unit').show();
            }
        }
        $(document).on('change', '#sch_type', function() {
            
            check_type();
        });
    </script>
@endsection
