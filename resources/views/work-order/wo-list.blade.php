@extends('layout.header')
@section('section')
    <div id="accordion" >
        <div class="card">
            <div class="card-header" id="headingOne">
                {{-- <h5 class="mb-0"> --}}
                    <div onclick="replaceIcon()"  class="collapsed d-flex justify-content-between" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <h4>Work Order Search</h4>
                        <a href="#" class="">
                            <p>
                                <i id="down-icon" class="right fas fa-angle-down"></i>
                            </p>
                        </a>
                    </div>
                    {{-- <button class="btn  collapsed" >
                    </button> --}}
                {{-- </h5> --}}
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="">
                        <div class="">
                            <div class="row d-flex">
                                <div class="col-2">
                                    <div style="height: 300px" class="card p-2">
                                        <p class="">Due Date Range</p>
                                        <div class="">
                                            <label for="" class="form-label">Start date</label>
                                            <input type="date" class="form-control">
                                            <label for="" class=" mt-1 form-label">End date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div style="height: 300px" class="card p-2">

                                        <p class="">Generated Date Range</p>
                                        <div class="">
                                            <label for="" class="form-label">Start date</label>
                                            <input type="date" class="form-control">
                                            <label for="" class=" mt-1 form-label">End date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div style="height: 300px" class="card p-2">
                                        <p>Work Order Type</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label">
                                                PPM
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label">
                                                Complaint
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label">
                                                Incedent
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label">
                                                Request for Information
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label">
                                                Self Assigned Task
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label">
                                                Task assigned By senior
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <div style="height: 300px" class="card p-2">
                                        <p>Work Order Status</p>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label">
                                                Draft
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label">
                                                Pending
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label">
                                                Assigned
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label">
                                                Closed
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label">
                                                Completed
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label">
                                                Deffered
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked">
                                            <label class="form-check-label">
                                                On Hold
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div style="height: 300px" class="card p-2">
                                        <p>Asset</p>

                                        <div>
                                            <label for="">Equipment Name </label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div>
                                            <label for="">Type</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div>
                                            <label for="">Model </label>
                                            <input type="text" class="form-control">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-2">
                                    <div style="height: 300px" class="card p-2">
                                        <p>Assigned Resource</p>
                                        <div>
                                            <label for="">Resource Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="">
                                        <button class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Sr#</th>
                                <th>Equipment Type Name</th>
                                <th>Expected PPM Date</th>
                                <th>Planned PPM Date</th>
                                <th>Performed Date</th>
                                <th>Status</th>
                                <th>Detail</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td>Primary</td>
                                <td>Network Engineer</td>
                                <td>aliw2025@gmail.com</td>
                                <td>091222225</td>
                                <td>03400234243</td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>Alexander Pierce</td>
                                <td>Technical</td>
                                <td>Support Engineer</td>
                                <td>aliw2025@gmail.com</td>
                                <td>091222225</td>
                                <td>03400234243</td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>Bob Doe</td>
                                <td>Secondary</td>
                                <td>IT Technician</td>
                                <td>aliw2025@gmail.com</td>
                                <td>091222225</td>
                                <td>03400234243</td>
                            </tr>
                            <tr>
                                <td>175</td>
                                <td>Mike Doe</td>
                                <td>Primary</td>
                                <td>Technician</td>
                                <td>aliw2025@gmail.com</td>
                                <td>091222225</td>
                                <td>03400234243</td>
                            </tr>

                        </tbody>
                    </table>
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


