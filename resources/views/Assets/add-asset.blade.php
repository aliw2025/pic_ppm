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


                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content " id="custom-tabs-two-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-two-home" role="tabpanel"
                                aria-labelledby="custom-tabs-two-home-tab">
                                <div class="row d-flex ">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="mt-2 d-flex justify-content-between">
                                                    <h4>Add New Equipment</h4>
                                                    <div>
                                                        <button class="m-2 mt-2 btn btn-success"> Save </button>
                                                        <button class="m-2  mt-2 btn btn-primary"> Reset </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form class="mx-2" action="">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label">Equipment Owner </label>
                                                            <select name="type" id="" class="form-control">
                                                                <option value="BME">BME</option>
                                                                <option value="BAF">Building and Facilities</option>
                                                                <option value="ICT">ICT</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label">Equipment Category Name</label>
                                                            <input placeholder="Name" type="text" class="form-control">
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label">Equipment Type</label>
                                                            <input placeholder="Equipment Type" type="text"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label">Manufacturer</label>
                                                            <input placeholder="Manufacturer" type="text"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label">Model</label>
                                                            <input placeholder="Model" type="text" class="form-control">
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label">Serial number</label>
                                                            <input placeholder="Serial number" type="text"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label">FA #</label>
                                                            <input placeholder="FA #" type="text" class="form-control">
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label">Equipment Sequence #</label>
                                                            <input placeholder="Equipment Sequence #" type="text"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label"> Manufacture Date</label>
                                                            <input placeholder="Manufacture Date" type="date"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label"> Installation Date</label>
                                                            <input placeholder=" Installation Date" type="date"
                                                                class="form-control">
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label"> Status</label>
                                                            <select name="type" id="" class="form-control">
                                                                <option value="Active">Active/Running</option>
                                                                <option value="Maintainence">Maintainence</option>
                                                                <option value="Down">Down</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="" class="mt-1 forml-label">Vendor</label>
                                                            <select name="vendor" id="" class="form-control">
                                                                <option value="vendor1">Vendor 1</option>
                                                                <option value="vendor2">Vendor 2</option>
                                                                <option value="vendor3">Vendor 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="mt-1 form-label"> Manual</label>
                                                            <input placeholder=" Attach Manual" type="file"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Building Block</label>
                                                        <select name="type" id="" class="form-control">
                                                            <option value="IPD">IPD</option>
                                                            <option value="OPD">OPD</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Floor</label>
                                                        <select name="type" id="" class="form-control">
                                                            <option value="BF">Basement</option>
                                                            <option value="GF">Ground Floor</option>
                                                            <option value="1F">1st Floor</option>
                                                            <option value="2F">2nd Floor</option>
                                                            <option value="3F">3rd Floor</option>
                                                            <option value="4F">4th Floor</option>
                                                            <option value="5F">5th Floor</option>
                                                            <option value="6F">6th Floor</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Department</label>
                                                        <select name="type" id="" class="form-control">
                                                            <option value="BME">BME</option>
                                                            <option value="BME">Radiology</option>
                                                            <option value="BME">Pathology</option>
                                                            <option value="BME">Emergency</option>
                                                            <option value="BME">OR</option>
                                                            <option value="BME">Cath</option>


                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Room/Area</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Section</label>
                                                        <input placeholder="Section" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Sub Section</label>
                                                        <input placeholder="Sub Section" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row mt-1">
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label"> Custodian Name</label>
                                                        <input placeholder="Custodian Name" type="text"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Office Extention</label>
                                                        <input placeholder="Office Extention" type="text"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Mobile</label>
                                                        <input placeholder="Mobile" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Email</label>
                                                        <input placeholder="Email" type="text" class="form-control">
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

                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">PPM Type</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="weekly">Weekly</option>
                                                            <option value="Monthly">Monthly</option>
                                                            <option selected value="Quarterly">Quarterly</option>
                                                            <option value="Bi-Annually">Bi-Annually</option>
                                                            <option value="Annually">Annually</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Last PPM Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Next PPM Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- <div class="tab-pane fade" id="custom-tabs-two-messages" role="tabpanel"
                                aria-labelledby="custom-tabs-two-messages-tab">
                            vendor
                            </div> --}}
                            <div class="tab-pane fade" id="custom-tabs-two-ppm" role="tabpanel"
                                aria-labelledby="custom-tabs-two-ppm-tab">


                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>PPM Summary</h4>
                                                <p>Equipment Type Name</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Last PPM Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Next PPM Date</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    {{-- <div class="col-3">
                                                        <label class="mt-1 form-label">Last PPM Report</label>
                                                        <input type="file" class="form-control">
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Create PPM Scheudule</h4>

                                            </div>
                                            <div class="card-body">
                                                <div class="row d-flex align-items-center">
                                                    <div  class="col-3">
                                                        <label class="mt-1 form-label">Schedule Type</label>
                                                        <select id="sch_type" name=""  class="form-control">
                                                            <option value="timely">Timely</option>
                                                            <option value="metered">Metered</option>
                                                        </select>
                                                    </div>



                                                    <div id="ppm_type" class="col-3">
                                                        <label class="mt-1 form-label">PPM Type</label>
                                                        <select name="" id="" class="form-control">
                                                            <option value="weekly">Weekly</option>
                                                            <option value="Monthly">Monthly</option>
                                                            <option selected value="Quarterly">Quarterly</option>
                                                            <option value="Bi-Annually">Bi-Annually</option>
                                                            <option value="Annually">Annually</option>
                                                        </select>
                                                    </div>

                                                    <div id="num_itt" class="col-3">
                                                        <label class="mt-1 form-label">Number of Itterations</label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div id="meter" class="col-3">
                                                        <label class="mt-1 form-label">Meter Value</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div id="unit" class="col-3">
                                                        <label class="mt-1 form-label">Meter Unit</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div id="fin_sc" class="mt-4 col-3">
                                                        <button class="btn btn-primary">Finalize Schedule</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Schedule</h4>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-head-fixed text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr#</th>
                                                            <th>Expected PPM date</th>
                                                            <th>Planned PPM date</th>
                                                            <th>Performed date</th>
                                                            <th>Status</th>
                                                            <th>Schedule Report</th>
                                                            <th> detail</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>183</td>
                                                            <td>12-Jan-23</td>
                                                            <td>12-Jan-23</td>
                                                            <td>12-Jan-23</td>
                                                            <td>Planned</td>
                                                            <td>
                                                                <ion-icon name="eye-outline"></ion-icon>
                                                            </td>
                                                            <td><a href="{{ route('ppm-detail') }}">
                                                                    <ion-icon name="document-outline"></ion-icon>
                                                                </a> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>219</td>
                                                            <td>12-Jan-23</td>
                                                            <td>12-Feb-23</td>
                                                            <td>12-Jan-23</td>
                                                            <td>Completed</td>
                                                            <td>
                                                                <ion-icon name="eye-outline"></ion-icon>
                                                            </td>
                                                            <td>
                                                                <ion-icon name="document-outline"></ion-icon>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>657</td>
                                                            <td>12-Jan-23</td>
                                                            <td>12-Mar-23</td>
                                                            <td>12-Jan-23</td>
                                                            <td>Planned</td>
                                                            <td>
                                                                <ion-icon name="eye-outline"></ion-icon>
                                                            </td>
                                                            <td>
                                                                <ion-icon name="document-outline"></ion-icon>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>175</td>
                                                            <td>12-Jan-23</td>
                                                            <td>12-Apr-23</td>
                                                            <td>12-Jan-23</td>
                                                            <td>Completed</td>
                                                            <td>
                                                                <ion-icon name="eye-outline"></ion-icon>
                                                            </td>
                                                            <td>
                                                                <ion-icon name="document-outline"></ion-icon>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade " id="custom-tabs-two-settings" role="tabpanel"
                                aria-labelledby="custom-tabs-two-settings-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Gate Pass Log
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Gate Pass#</label>
                                                        <input placeholder="Name" type="text" class="form-control">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">GP Date
                                                        </label>
                                                        <input placeholder="Name" type="date" class="form-control">
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="mt-1 form-label">Expected Return date
                                                        </label>
                                                        <input placeholder="Name" type="date" class="form-control">
                                                    </div>
                                                    {{-- <div class="col-3">
                                                        <label class="mt-1 form-label">Return date
                                                        </label>
                                                        <input placeholder="Name" type="date" class="form-control">
                                                    </div> --}}

                                                </div>
                                                <div class="row">
                                                     <div class="col-6">
                                                        <label class="mt-1 form-label">Gate Pass Reason</label>
                                                        <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
                                                    </div>
                                                   
                                                   
                                                   
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary">ADD</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Gate Pass log Reports
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-head-fixed text-nowrap">
                                                    <thead>
                                                      <tr>
                                                        <th>Gate Pass No</th>
                                                        <th>GP Date</th>
                                                        <th>Expected Return Date</th>
                                                        <th>Return Date</th>
                                                        <th>Detail</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td>183</td>
                                                        <td>11-7-2014</td>
                                                        <td>11-7-2014</td>
                                                        <td>11-7-2014</td>
                                                         <td><a href="{{ route('gp-detail') }}">
                                                                    <ion-icon name="document-outline"></ion-icon>
                                                                </a> </td>
                                                      </tr>
                                                      <tr>
                                                        <td>219</td>
                                                        <td>11-7-2014</td>
                                                        <td>11-7-2014</td>
                                                        <td>11-7-2014</td>
                                                         <td><a href="{{ route('gp-detail') }}">
                                                                    <ion-icon name="document-outline"></ion-icon>
                                                                </a> </td>
                                                      </tr>
                                                      <tr>
                                                        <td>657</td>
                                                        <td>11-7-2014</td>
                                                        <td>11-7-2014</td>
                                                        <td>11-7-2014</td>
                                                         <td><a href="{{ route('gp-detail') }}">
                                                                    <ion-icon name="document-outline"></ion-icon>
                                                                </a> </td>
                                                      </tr>
                                                      
                                                   
                                                    </tbody>
                                                  </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

    function check_type(){
        
        if($('#sch_type').val()=="timely"){
            $('#ppm_type').show();
            $('#num_itt').show();
            $('#meter').hide();
            $('#unit').hide();

        }else{
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

