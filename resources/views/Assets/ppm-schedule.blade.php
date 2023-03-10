<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div data-toggle="modal" data-target="#exampleModalCenter" class="card-header">
                <h4>PPM Summary</h4>
                <p class="m-0">Computer</p>
                <p class="m-0">All in one</p>
                <p class="m-0">HP Core i7</p>

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
                    <div class="col-3">
                        <label class="mt-1 form-label">Schedule Type</label>
                        <select id="sch_type" name="" class="form-control">
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
                            <th>Detail</th>
                            <th>Action</th>
                           

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>183</td>
                            <td>12-Jan-23</td>
                            {{-- <td>12-Jan-23</td> --}}
                            <td><input type="date" class="form-control"></td>
                            <td>12-Jan-23</td>
                            <td>Planned</td>
                            
                            <td><a href="{{ route('add-work-order') }}">
                                    <i style="color:black; font-size: 15px" class="fas fa-eye"></i>
                                </a> </td>
                                <td>
                                    <i style="font-size: 15px" class="fas fa-save"></i>
                                </td>
                        </tr>
                        <tr>
                            <td>219</td>
                            <td>12-Jan-23</td>
                            <td><input type="date" class="form-control"></td>
                            <td>12-Jan-23</td>
                            <td>Completed</td>
                            <td><a href="{{ route('add-work-order') }}">
                                <i style="color:black; font-size: 15px" class="fas fa-eye"></i>
                            </a> </td>
                            <td>
                                <i style="font-size: 15px" class="fas fa-save"></i>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>657</td>
                            <td>12-Jan-23</td>
                            <td><input type="date" class="form-control"></td>
                            <td>12-Jan-23</td>
                            <td>Planned</td>
                            <td><a href="{{ route('add-work-order') }}">
                                <i style="color:black; font-size: 15px" class="fas fa-eye"></i>
                            </a> </td>
                            <td>
                                <i style="font-size: 15px" class="fas fa-save"></i>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>175</td>
                            <td>12-Jan-23</td>
                            <td><input type="date" class="form-control"></td>
                            <td>12-Jan-23</td>
                            <td>Completed</td>
                            <td><a href="{{ route('add-work-order') }}">
                                <i style="color:black; font-size: 15px" class="fas fa-eye"></i>
                            </a> </td>
                            <td>
                                <i style="font-size: 15px" class="fas fa-save"></i>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
        <div class=" bg-dark">
            {{-- class="modal-title text-center" --}}
            <h5 class="mt-2 text-center">Equipment Type Name</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5>Equipment Detail</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Name:</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">Computer</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Type:</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">Desktop</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Model:</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">G12</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Seriel # :</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">1234</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Manufacturer :</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">Dell</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Model :</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">1234</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">FA #:</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">1234</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Equipment Sequence #:</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">1234</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Manufacture Date :</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">1234</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Manufacture Date :</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">12-Jan-23</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Installation Datee :</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">12-Jan-23</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Status :</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">Running</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Vendor:</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">Apex</p>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-6">
                                <h5>Location</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <p style="margin: 0">Vendor:</p>
                                    </div>
                                    <div class="col-6">
                                        <p style="margin: 0">Apex</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
        </div>
        {{-- <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div> --}}
    </div>
</div>
</div>