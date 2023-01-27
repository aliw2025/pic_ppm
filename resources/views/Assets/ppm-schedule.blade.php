<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>PPM Summary</h4>
                <p>Equipment Type Name</p>
            </div>
            <div class="card-body">
                {{-- <div class="row">

                    <div class="col-3">
                        <label class="mt-1 form-label">Last PPM Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-3">
                        <label class="mt-1 form-label">Next PPM Date</label>
                        <input type="date" class="form-control">
                    </div>
                   
                </div> --}}
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