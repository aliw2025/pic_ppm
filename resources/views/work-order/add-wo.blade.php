@extends('layout.header')
@section('section')
    <div class="row">
        <div class="col-12">
            <div id="accordion" class="card">
                <div onclick="replaceIcon()" class="card-header " data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">

                    <div class="row  d-flex justify-content-between">
                        <div class="col-3">
                            <h4> Work Order </h4>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <a href="#">
                                <p>
                                    <i style="color: black" id="down-icon" class="fas fa-angle-down"></i>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="collapseTwo" class=" card-body collapse show" aria-labelledby="headingOne"
                    data-parent="#accordion">
                    <form action="">
                        <div class="row">
                            <div class="col-6">
                                <div class="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 mt-1">
                                                <label for="form-label">Request Type</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="PPM">PM</option>
                                                    <option value="PPM">Complaint</option>
                                                    <option value="PPM">Incedent</option>
                                                    <option value="PPM">Self Assigned Task</option>
                                                    <option value="PPM">Task Assigned by senior</option>
                                                    <option value="PPM">Request for Information</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Deparment</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">BME</option>
                                                    <option value="">ICT</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Category</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">PC Deployement</option>
                                                    <option value="">Server Maintainence</option>
                                                    <option value="">Window Installation</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Asset</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Priority</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">High</option>
                                                    <option value="">Medium</option>
                                                    <option value="">Low</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                
                                <div class="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 mt-1">
                                                <label for="">Due Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Status</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Draft</option>
                                                    <option value="">Pending</option>
                                                    <option value="">Deffered</option>
                                                    <option value="">On Hold</option>
                                                    <option value="">Assigned</option>
                                                    <option value="">In Progress</option>
                                                    <option value=""> Completed</option>

                                                    <option value="">Closed</option>
                                                    {{-- <option value="">On Hold</option> --}}
                                                </select>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Completion Date</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Assigned to</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Self</option>
                                                    <option value="">Vendor</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Vendor </label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-6 mt-1">
                                                <label for="">Technician</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-3">
                                <div class="card-body">
                                    <label for="">Title</label>
                                   <input type="text" class="form-control" name="" id="" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-body">
                                    <label for="">Description</label>
                                    <div style="min-height: " id="summernote"></div>
                                </div>
                            </div>

                        </div>
                       
                        <div class="row ">
                            <div class=" col-12 d-flex justify-content-end">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="card  card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <!-- <li class="pt-2 px-3"><h3 class="card-title">PPM</h3></li> -->
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-two-res-tab" data-toggle="pill"
                                    href="#custom-tabs-two-res" role="tab" aria-controls="custom-tabs-two-res"
                                    aria-selected="false">Resolution</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " id="custom-tabs-two-home-tab" data-toggle="pill"
                                    href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home"
                                    aria-selected="false">Sub Tasks</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-ppm-tab" data-toggle="pill"
                                    href="#custom-tabs-two-ppm" role="tab" aria-controls="custom-tabs-two-ppm"
                                    aria-selected="false">Event History</a>
                            </li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content " id="custom-tabs-two-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-two-res" role="tabpanel"
                                aria-labelledby="custom-tabs-two-res-tab">
                                @include('work-order.resolution')
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-two-home" role="tabpanel"
                                aria-labelledby="custom-tabs-two-home-tab">
                                @include('work-order.tasks')
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-two-ppm" role="tabpanel"
                                aria-labelledby="custom-tabs-two-ppm-tab">
                                @include('work-order.history')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function replaceIcon() {
            console.log($('#down-icon'));
            if ($(".fa-angle-down")[0]) {
                $('#down-icon').removeClass('fa-angle-down').addClass(' fa-angle-up');
            } else {
                $('#down-icon').removeClass('fa-angle-up').addClass('fa-angle-down');
            }

        }

       
    </script>
@endsection
